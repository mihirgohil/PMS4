@extends('company.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Company Profile</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin:50px;">
            <div class="card">
                <div class="card-header">Company :: Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name"  class="form-control" name="name" value="{{ Auth::guard('company')->user()->name }}" readonly>  
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text"  class="form-control" name="website" value="{{ Auth::guard('company')->user()->website }}" readonly>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number"  class="form-control" name="phone" value="{{ Auth::guard('company')->user()->phone }}" readonly>
                            </div>
                    </div>
                            <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a class="btn btn-primary float-right" href="{{ route('company.editprofile') }}">
                                  Edit Profile
                            </a>
                            </div>
                        </div>
    
                </div>
            </div>
        </div>
    </div>
  </div>
    </section>
    <!-- /.content -->
@endsection
