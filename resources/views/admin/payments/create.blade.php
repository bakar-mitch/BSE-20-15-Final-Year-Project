@extends('layouts.admin')
@section('content')
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
                    <form method="POST" action="{{ route('tickets.store') }}" enctype="multipart/form-data">
                        @csrf
<!-- 
                        <div class="form-group row">
                            <label for="author_name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="author_name" type="text" class="form-control @error('author_name') is-invalid @enderror" name="author_name" value="{{ old('author_name') }}" required autocomplete="name" autofocus>

                                @error('donor_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label for="author_email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="author_email" type="email" class="form-control @error('author_email') is-invalid @enderror" name="author_email" value="{{ old('author_email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="author_email" class="col-md-4 col-form-label text-md-right">Amount</label>

                            <div class="col-md-6">
                                <input id="author_email" type="text" class="form-control @error('author_email') is-invalid @enderror" name="author_email" value="{{ old('author_email') }}" required autocomplete="email">

                                @error('author_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">@lang('cruds.project.fields.project_name')</label>

                            <div class="col-md-6">
                              <select name="" id="normal_search" class="form-control select2" required>
                                  <option value="">Select Project </option>
                                  <option value="">Project one</option>
                                  <option value="">Project two</option>
                                  <option value="">Project three</option>
                              </select>
                               
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
@endsection

