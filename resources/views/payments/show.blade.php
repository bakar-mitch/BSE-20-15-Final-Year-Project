
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Payment {{ $payment->id }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.payments.fields.client_name') }}
                                </th>
                                <td>
                                    {{ $payment->client_name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.payments.fields.email') }}
                                </th>
                                <td>
                                {{ $payment->email}}
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    {{ trans('cruds.payments.fields.amount') }}
                                </th>
                                <td>
                                    {{ $payment->amount }}
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    {{ trans('cruds.payments.fields.project') }}
                                </th>
                                <td>
                                {{ $project->title ?? '' }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
