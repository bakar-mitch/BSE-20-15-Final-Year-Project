
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
                <div class="card-header">Donation {{ $donation->id }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
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
                                    {{ trans('cruds.donations.fields.email') }}
                                </th>
                                <td>
                                {{ $donation->email}}
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
                                    {{ trans('cruds.donations.fields.telephone') }}
                                </th>
                                <td>
                                    {{ $donation->telephone }}
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    {{ trans('cruds.donations.fields.project') }}
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
