@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.donations.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.donations.title_singular') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.donations.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Ticket">
            <thead>
                <tr>
                    <!-- <th width="10">

                    </th> -->
                    <th>
                        {{ trans('cruds.donations.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.donations.fields.donor_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.donations.fields.project') }}
                    </th>
                    <th>
                        {{ trans('cruds.donations.fields.amount') }}
                    </th>
                    <th>
                        {{ trans('cruds.donations.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.donations.fields.created_at') }}
                    </th>
                    
                    <!-- <th>
                        &nbsp;
                    </th> -->
                </tr>
            </thead>
        </table>


    </div>
</div>
@endsection