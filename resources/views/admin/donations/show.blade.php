@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.donations.title') }}
    </div>

    <div class="card-body">
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.donations.fields.id') }}
                        </th>
                        <td>
                            {{ $donation->id}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donations.fields.donor_name') }}
                        </th>
                        <td>
                            {{ $donation->donor_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donations.fields.project') }}
                        </th>
                        <td>
                            {{ $donation->project }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.donations.fields.amount') }}
                        </th>
                        <td>
                            {{ $donation->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donations.fields.email') }}
                        </th>
                        <td>
                            {{ $donation->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donations.fields.created_at') }}
                        </th>
                        <td>
                            {{ $donation->created_at }}
                        </td>
                    </tr>
                   
                    
                </tbody>
            </table>
        </div>
        <a class="btn btn-default my-2" href="{{ route('admin.donatons.index') }}">
            {{ trans('global.back_to_list') }}
        </a>

        <!-- <a href="{{ route('admin.tickets.edit', $ticket->id) }}" class="btn btn-primary">
            @lang('global.edit') @lang('cruds.ticket.title_singular')
        </a> -->
    </div>
</div>
@endsection