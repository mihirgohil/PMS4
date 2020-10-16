@extends('student.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enrollment No') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number"  class="form-control{{ $errors->has('enrollment_no') ? ' is-invalid' : '' }}" name="name" value="{{ old('enrollment_no') }}" required autofocus>

                                @if ($errors->has('enrollment_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('enrollment_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Roll No') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control{{ $errors->has('rollno') ? ' is-invalid' : '' }}" name="name" value="{{ old('rollno') }}" required autofocus>

                                @if ($errors->has('rollno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rollno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('studentname') ? ' is-invalid' : '' }}" name="name" value="{{ old('studentname') }}" required autofocus>

                                @if ($errors->has('studentname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('studentname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="name" value="{{ old('dob') }}" min="1997-01-01" max="2015-12-30" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" maxlength="10" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="name" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('S.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control{{ $errors->has('ssc') ? ' is-invalid' : '' }}" name="name" value="{{ old('ssc') }}" required autofocus>

                                @if ($errors->has('ssc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ssc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('H.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control{{ $errors->has('hsc') ? ' is-invalid' : '' }}" name="name" value="{{ old('hsc') }}" required autofocus>

                                @if ($errors->has('hsc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hsc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('U.G (%)') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control{{ $errors->has('ug') ? ' is-invalid' : '' }}" name="name" value="{{ old('ug') }}" required autofocus>

                                @if ($errors->has('ug'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select Stream') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('stream') ? ' is-invalid' : '' }}" name="name" value="{{ old('stream') }}" placeholder="Ex..BCA" required autofocus>

                                @if ($errors->has('stream'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stream') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('MCA Current CPI') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control{{ $errors->has('cpi') ? ' is-invalid' : '' }}" name="name" value="{{ old('cpi') }}" required autofocus>

                                @if ($errors->has('cpi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            
                                <button type="cancel" class="btn btn-danger">
                                    {{ __('Cancel') }}
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
