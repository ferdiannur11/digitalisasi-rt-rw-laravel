<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyKeuanganRequest;
use App\Http\Requests\StoreKeuanganRequest;
use App\Http\Requests\UpdateKeuanganRequest;
use App\Keuangan;
use App\Keuangan_Category;
use App\Rt;
use App\Warga;
class KeuanganController extends Controller
{
    public function index()
    {

        abort_unless(\Gate::allows('keuangan_access'), 403);
        $keuangan = Keuangan::select('keuangan.*',
        'rt.rt_name',
        'keuangan_category.category_name',       
        'warga.warga_first_name',
        'warga.warga_last_name')
        ->join('rt', 'rt.id', '=', 'keuangan.keuangan_rt')
        ->join('warga', 'warga.id', '=', 'keuangan.keuangan_warga_id')
        ->join('keuangan_category', 'keuangan_category.id', '=', 'keuangan.keuangan_category')->get();;

        return view('admin.keuangan.index', compact('keuangan'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('keuangan_create'), 403);
        $keuangan_rt = Rt::all()->pluck('rt_name', 'id');
        $keuangan_category = Keuangan_Category::all()->pluck('category_name', 'id');
        $keuangan_warga_ids = Warga::all();

        return view('admin.keuangan.create', compact('keuangan_rt','keuangan_category', 'keuangan_warga_ids'));
    }

    public function store(StoreKeuanganRequest $request)
    {
        abort_unless(\Gate::allows('keuangan_create'), 403);

        $keuangan = Keuangan::create($request->all());

        return redirect()->route('admin.keuangan.index');
    }

    public function edit(Keuangan $keuangan)
    {
        abort_unless(\Gate::allows('keuangan_edit'), 403);
        $keuangan_rt = Rt::all()->pluck('rt_name', 'id');
        $keuangan_category = Keuangan_Category::all()->pluck('category_name', 'id');
        $keuangan_warga_ids = Warga::all();
        return view('admin.keuangan.edit', compact('keuangan', 'keuangan_rt','keuangan_category','keuangan_warga_ids'));
    }

    public function update(UpdateKeuanganRequest $request, Keuangan $keuangan)
    {

        abort_unless(\Gate::allows('keuangan_edit'), 403);

        $keuangan->update($request->all());

        return redirect()->route('admin.keuangan.index');
    }

    public function show(Keuangan $keuangan)
    {
        abort_unless(\Gate::allows('keuangan_show'), 403);

        return view('admin.keuangan.show', compact('keuangan'));
    }

    public function destroy(Keuangan $keuangan)
    {
        abort_unless(\Gate::allows('keuangan_delete'), 403);

        $keuangan->delete();

        return back();
    }

    public function massDestroy(MassDestroyKeuanganRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
