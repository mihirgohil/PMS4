@extends('student.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
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
                            <div class="col-md-12">
                                <div class="picture-container">
                                    <div class="picture"> 
                                        <img src="{{ Auth::guard('student')->user()->avatar }}" class="picture-src" id="wizardPicturePreview">
                                        <input id="wizard-picture" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" onchange="readURL(this)" name="avatar" value="{{ old('avatar') }}" readonly>
                                    </div>
                                    <h6>Choose Picture</h6>
                                </div>
                            </div>
                        </div>

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
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ Auth::guard('student')->user()->dob }}" min="1997-01-01" max="2015-12-30" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::guard('student')->user()->email }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" onkeypress="return onlyNumberKey(event)" maxlength="10" minlength="10" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ Auth::guard('student')->user()->phone }}" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="ssc" class="col-md-4 col-form-label text-md-right">{{ __('S.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="ssc" type="text" class="form-control{{ $errors->has('ssc') ? ' is-invalid' : '' }}" name="ssc" value="{{ Auth::guard('student')->user()->ssc }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hsc" class="col-md-4 col-form-label text-md-right">{{ __('H.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="hsc" type="text" class="form-control{{ $errors->has('hsc') ? ' is-invalid' : '' }}" name="hsc" value="{{ Auth::guard('student')->user()->hsc }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ug" class="col-md-4 col-form-label text-md-right">{{ __('U.G (%)') }}</label>

                            <div class="col-md-6">
                                <input id="ug" type="text" class="form-control{{ $errors->has('ug') ? ' is-invalid' : '' }}" name="ug" value="{{ Auth::guard('student')->user()->ug }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stream" class="col-md-4 col-form-label text-md-right">{{ __('Select Stream') }}</label>

                            <div class="col-md-6">
                                <input id="stream" type="text" class="form-control{{ $errors->has('stream') ? ' is-invalid' : '' }}" name="stream" value="{{ Auth::guard('student')->user()->stream }}" placeholder="Ex..BCA" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currenr_cpi" class="col-md-4 col-form-label text-md-right">{{ __('MCA Current CPI') }}</label>

                            <div class="col-md-6">
                                <input id="cpi" type="text" class="form-control{{ $errors->has('cpi') ? ' is-invalid' : '' }}" name="cpi" value="{{ Auth::guard('student')->user()->cpi }}" readonly>
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
