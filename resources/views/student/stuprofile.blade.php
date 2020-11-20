@extends('student.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Profile</h1>
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
                <div class="card-header">Student :: Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                            <label for="enrollment_no" class="col-md-4 col-form-label text-md-right">{{ __('Enrollment No') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number"  class="form-control" name="enrollment_no" value="{{ Auth::guard('student')->user()->enrollment_no }}" readonly> 
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="studentname" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name"  class="form-control" name="studentname" value="{{ Auth::guard('student')->user()->studentname }}" readonly>  
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number"  class="form-control" name="phone" value="{{ Auth::guard('student')->user()->phone }}" readonly>
                            </div>
                    </div>
                        <div class="form-group row">
                            <label for="stream" class="col-md-4 col-form-label text-md-right">{{ __('Stream') }}</label>

                            <div class="col-md-6">
                                <input id="stream" type="name"  class="form-control" name="stream" value="{{ Auth::guard('student')->user()->stream }}" readonly>
                            </div>
                        </div>
                            <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a class="btn btn-primary float-right" href="{{ route('student.editprofile') }}">
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
