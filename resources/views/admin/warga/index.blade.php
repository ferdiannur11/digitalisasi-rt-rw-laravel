@extends('layouts.admin')
@section('content')
@can('warga_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.warga.create") }}">
                {{ trans('global.add') }} {{ trans('global.warga.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.warga.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
        <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_no_ktp') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_no_kk') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_first_name') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_last_name') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_sex') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_religion') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_address') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_address_code') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_job') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_salary_range') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_phone') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_email') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_birth_date') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_is_ktp_sama_domisili') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_join_date') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_pendidikan') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_rt') }}
                        </th>
                        <th>
                            {{ trans('global.warga.fields.warga_status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($warga as $key => $wargas)
                    <tr data-entry-id="{{ $wargas->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $wargas->warga_no_ktp ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_no_kk ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_first_name ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_last_name ?? '' }}
                        </td>
                        @if($wargas->warga_sex == 1)
                        <td>
                           Male
                        </td>
                        @elseif($wargas->warga_sex == 2)
                        <td>
                            Female
                        </td>
                        @else
                        <td>
                           
                        </td>
                        @endif
                        <td>
                            {{ $wargas->religion_name ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_address ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->address_code_name ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->job_name ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_salary_range ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_phone ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_email ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_birth_date ?? '' }}
                        </td>
                        @if($wargas->warga_is_ktp_sama_domisili == 1)
                        <td>
                           Ya
                        </td>
                        @elseif($wargas->warga_is_ktp_sama_domisili == 2)
                        <td>
                            Tidak
                        </td>
                        @else
                        <td>
                           
                        </td>
                        @endif
                        
                        <td>
                            {{ $wargas->warga_join_date ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->pendidikan_name ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->rt_name ?? '' }}
                        </td>
                        <td>
                            {{ $wargas->warga_status ?? '' }}
                        </td>
                        
                        <td>
                            @can('warga_show')
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.warga.show', $wargas->id) }}">
                                {{ trans('global.view') }}
                            </a>
                            @endcan
                            @can('warga_edit')
                            <a class="btn btn-xs btn-info" href="{{ route('admin.warga.edit', $wargas->id) }}">
                                {{ trans('global.edit') }}
                            </a>
                            @endcan
                            @can('warga_delete')
                            <form action="{{ route('admin.warga.destroy', $wargas->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>
                            @endcan
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.products.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('product_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection
@endsection