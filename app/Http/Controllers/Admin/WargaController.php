<?php

namespace App\Http\Controllers\Admin;

use App\History_Category;
use App\Master_agama;
use App\Master_Pekerjaan;
use App\Rt;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWargaRequest;
use App\Http\Requests\StoreWargaRequest;
use App\Http\Requests\UpdateWargaRequest;
use App\Warga;
use App\Pendidikan;
use App\Master_Alamat;


class WargaController extends Controller
{
    public function index()
    {

        abort_unless(\Gate::allows('warga_access'), 403);
        
        $warga = Warga::select('warga.*',
        'religion.religion_name',
        'rt.rt_name',
        'pendidikan.pendidikan_name',
        'address_code.address_code_name',
        'job.job_name')
        ->join('religion', 'religion.id', '=', 'warga.warga_religion')
        ->join('rt', 'rt.id', '=', 'warga.warga_rt')
        ->join('pendidikan', 'pendidikan.id', '=', 'warga.warga_pendidikan')
        ->join('address_code', 'address_code.id', '=', 'warga.warga_address_code')
        ->join('job', 'job.id', '=', 'warga.warga_job')->get();

        // $warga = Warga::all();
        return view('admin.warga.index', compact('warga'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('warga_create'), 403);
        
        $religions = Master_agama::all()->pluck('religion_name', 'id');
        $jobs = Master_Pekerjaan::all()->pluck('job_name', 'id');
        $rts = Rt::all()->pluck('rt_name', 'id');
        $pendidikans = Pendidikan::all()->pluck('pendidikan_name', 'id');
        $master_alamats = Master_Alamat::all()->pluck('address_code_name', 'id');

        return view('admin.warga.create', compact( 'religions','jobs','rts','pendidikans','master_alamats'));
    }

    public function store(StoreWargaRequest $request)
    {
        abort_unless(\Gate::allows('warga_create'), 403);

        $warga = Warga::create($request->all());

        return redirect()->route('admin.warga.index');
    }

    public function edit(Warga $warga)
    {
        abort_unless(\Gate::allows('warga_edit'), 403);

        $warga_religion = Master_agama::all()->pluck('religion_name', 'id');
        $warga_job = Master_Pekerjaan::all()->pluck('job_name', 'id');
        $warga_rt = Rt::all()->pluck('rt_name', 'id');
        $warga_pendidikan = Pendidikan::all()->pluck('pendidikan_name', 'id');
        $warga_address_code = Master_Alamat::all()->pluck('address_code_name', 'id');

        return view('admin.warga.edit', compact('warga','warga_religion','warga_job',
        'warga_rt','warga_pendidikan','warga_address_code'));
    }

    public function update(UpdateWargaRequest $request, Warga $warga)
    {

        abort_unless(\Gate::allows('warga_edit'), 403);

        $warga->update($request->all());

        return redirect()->route('admin.warga.index');
    }

    public function show(Warga $warga)
    {
        abort_unless(\Gate::allows('warga_show'), 403);

        return view('admin.warga.show', compact('warga'));
    }

    public function destroy(Warga $warga)
    {
        abort_unless(\Gate::allows('warga_delete'), 403);

        $warga->delete();

        return back();
    }

    public function massDestroy(MassDestroyWargaRequest $request)
    {
        Warga::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
