@extends('backend.layouts.master')
@section('title','Inno Mak || DASHBOARD')
@section('main-content')
    <div style="margin: auto; margin-bottom: 10px; width: 80%;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('ad-min.statuses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.status.title_singular') }}
            </a>
        </div>
    </div>
<div class="card" style="margin: auto; width: 80%;">
    <div class="card-header">
        {{ trans('cruds.status.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Status">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.status.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.status.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.status.fields.color') }}
                        </th>
                        <th>
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statuses as $key => $status)
                        <tr data-entry-id="{{ $status->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $status->id ?? '' }}
                            </td>
                            <td>
                                {{ $status->name ?? '' }}
                            </td>
                            <td style="background-color:{{ $status->color ?? '#FFFFFF' }}"></td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('ad-min.statuses.show', $status->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                    
                                    <a class="btn btn-xs btn-info" href="{{ route('ad-min.statuses.edit', $status->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>

                                    <form action="{{ route('ad-min.statuses.destroy', $status->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('status_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('ad-min.statuses.massDestroy') }}",
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
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Status:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection