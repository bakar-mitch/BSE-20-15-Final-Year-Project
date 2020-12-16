@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.payments.title') }}
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
                            {{ trans('cruds.payments.fields.id') }}
                        </th>
                        <td>
                            {{ $payment->id}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.payments.fields.client_name') }}
                        </th>
                        <td>
                            {{ $payment->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.payments.fields.project') }}
                        </th>
                        <td>
                            {{ $payment->title }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.payment.fields.amount') }}
                        </th>
                        <td>
                            {{ $payment->author_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.payments.fields.email') }}
                        </th>
                        <td>
                            {{ $payment->author_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.payments.fields.created_at') }}
                        </th>
                        <td>
                            {{ $payment->author_email }}
                        </td>
                    </tr>
                   
                    
                </tbody>
            </table>
        </div>
        <a class="btn btn-default my-2" href="{{ route('admin.payments.index') }}">
            {{ trans('global.back_to_list') }}
        </a>

        <!-- <a href="{{ route('admin.tickets.edit', $ticket->id) }}" class="btn btn-primary">
            @lang('global.edit') @lang('cruds.ticket.title_singular')
        </a> -->
    </div>
</div>
@endsection