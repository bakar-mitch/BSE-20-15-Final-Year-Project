
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Make Payment</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('payments.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="client_name"  class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="client_name"   type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" value="{{ old('client_name') }}" required autocomplete="name" autofocus>

                                @error('client_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"  class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('author_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author_email" class="col-md-4 col-form-label text-md-right">Amount</label>

                            <div class="col-md-6">
                                <input id="author_email" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="">

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">@lang('cruds.project.fields.project_name')</label>

                            <div class="col-md-6">
                              <select name="project_id" id="normal_search" class="form-control select2" required>
                              <option value="">Select Project </option>
                                  <option value="1">Project one</option>
                                  <option value="2">Project two</option>
                                  <option value="3">Project three</option>
                              </select>
                                @error('project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    @lang('global.submit')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function init() {
document.getElementById("normal_search").value = "";
}
window.onload = init;
</script>
@stop