@extends('backend.layouts.master')
@section('title','Inno Mak || DASHBOARD')
@section('main-content')

    <div style="margin: auto; width: 80%; margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('ad-min.tickets.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.ticket.title_singular') }}
            </a>
        </div>
    </div>

<div class="card" style="margin: auto; width: 80%;">
    <div class="card-header">
        {{ trans('cruds.ticket.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover datatable datatable-Ticket">
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.ticket.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.ticket.fields.title') }}
                    </th>
                    <th>
                        {{ trans('cruds.ticket.fields.status') }}
                    </th>
                    <th>
                        {{ trans('cruds.ticket.fields.priority') }}
                    </th>
                    <th>
                        {{ trans('cruds.ticket.fields.category') }}
                    </th>
                    <th>
                        {{ trans('cruds.ticket.fields.author_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.ticket.fields.author_email') }}
                    </th>
                    <th>
                        {{ trans('cruds.ticket.fields.assigned_to_user') }}
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                    @foreach($tickets as $key => $ticket)
                        <tr data-entry-id="{{ $ticket->id }}">
                            <td>
                                {{ $ticket->id ?? '' }}
                            </td>
                            <td>
                                {{ $ticket->title ?? '' }}
                            </td>
                            @if($ticket->status_id == 1)
                            
                              <td style="color: ">Open</td>
                            
                            @elseif($ticket->status_id == 2)
                              <td style="color: ">Closed</td>
                            
                            @elseif($ticket->status_id == 3)
                              <td style="color: ">In-progress</td>
                            
                            @else
                              <td></td>
                            
                            @endif
                            @if($ticket->priority_id == 1)
                            
                              <td style="color: ">Low</td>
                            
                            @elseif($ticket->priority_id == 2)
                              <td style="color: ">Medium</td>
                            
                            @elseif($ticket->priority_id == 3)
                              <td style="color: ">High</td>
                            
                            @else
                              <td></td>
                            
                            @endif
                            @if($ticket->category_id == 1)
                              <td style="color: ">System Inquiries</td>
                            @elseif($ticket->category_id == 2)
                              <td style="color: ">Non-Technical Assistance</td>
                            @elseif($ticket->category_id == 3)
                              <td style="color: ">Technical Assistance</td>
                            @else
                              <td></td>
                            
                            @endif
                            <td>
                                {{ $ticket->author_name ?? '' }}
                            </td>
                            <td>
                                {{ $ticket->author_email ?? '' }}
                            </td>
                              <td>
                              @foreach($users as $key => $user)
                                @if($user->id == $ticket->assigned_to_user_id)
                                  <span>{{ $user->name }}</span>
                                @else
                                  
                                @endif
                              @endforeach
                            </td>
                            <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('ad-min.tickets.show', $ticket->id) }}">
                                        {{ trans('global.view') }}
                                    </a>

                                    <a class="btn btn-xs btn-info" href="{{ route('ad-min.tickets.edit', $ticket->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                    
                                    <form action="{{ route('ad-min.tickets.destroy', $ticket->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@endsection
@section('scripts')
@parent
<script>
    $(function () {
let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('ad-min.tickets.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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
$(".datatable-Ticket").one("preInit.dt", function () {
 $(".dataTables_filter").after(filters);
});
  $('.datatable-Ticket').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

</script>
@endsection