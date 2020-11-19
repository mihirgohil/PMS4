@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Placement-Coordinator Profile</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin:50px;">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                            <label for="pcname" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name"  class="form-control" name="name" value="{{ Auth::guard('placement-coordinator')->user()->name }}" readonly>  
                            </div>
                    </div>

                            <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a class="btn btn-primary float-right" href="{{ route('placement-coordinator.editpcprofile') }}">
                                  Edit Profile
                            </a>
                            </div>
                        </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /.content -->
@endsection
