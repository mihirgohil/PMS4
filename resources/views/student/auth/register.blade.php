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
                          
                            <label for="enrollment_no" class="col-md-4 col-form-label text-md-right">{{ __('Enrollment No') }}</label>

                            <div class="col-md-6">
                             
                                <input id="enrollment_no" type="number"  class="form-control{{ $errors->has('enrollment_no') ? ' is-invalid' : '' }}" name="enrollment_no" value="{{ old('enrollment_no') }}" required autofocus>
                                
                                @if ($errors->has('enrollment_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('enrollment_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="studentname" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-6">
                                <input id="studentname" type="text" class="form-control{{ $errors->has('studentname') ? ' is-invalid' : '' }}" name="studentname" value="{{ old('studentname') }}" required autofocus>

                                @if ($errors->has('studentname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('studentname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" min="1997-01-01" max="2015-12-30" required autofocus>

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
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text"  class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ssc" class="col-md-4 col-form-label text-md-right">{{ __('S.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="ssc" type="text" class="form-control{{ $errors->has('ssc') ? ' is-invalid' : '' }}" name="ssc" value="{{ old('ssc') }}" required autofocus>

                                @if ($errors->has('ssc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ssc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hsc" class="col-md-4 col-form-label text-md-right">{{ __('H.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="hsc" type="text" class="form-control{{ $errors->has('hsc') ? ' is-invalid' : '' }}" name="hsc" value="{{ old('hsc') }}" required autofocus>

                                @if ($errors->has('hsc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hsc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ug" class="col-md-4 col-form-label text-md-right">{{ __('U.G (%)') }}</label>

                            <div class="col-md-6">
                                <input id="ug" type="text" class="form-control{{ $errors->has('ug') ? ' is-invalid' : '' }}" name="ug" value="{{ old('ug') }}" required autofocus>

                                @if ($errors->has('ug'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stream" class="col-md-4 col-form-label text-md-right">{{ __('Select Stream') }}</label>

                            <div class="col-md-6">
                                <input id="stream" type="text" class="form-control{{ $errors->has('stream') ? ' is-invalid' : '' }}" name="stream" value="{{ old('stream') }}" placeholder="Ex..BCA" required autofocus>

                                @if ($errors->has('stream'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stream') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currenr_cpi" class="col-md-4 col-form-label text-md-right">{{ __('MCA Current CPI') }}</label>

                            <div class="col-md-6">
                                <input id="cpi" type="text" class="form-control{{ $errors->has('cpi') ? ' is-invalid' : '' }}" name="cpi" value="{{ old('cpi') }}" required autofocus>

                                @if ($errors->has('cpi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpi') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div>  
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if($errors->any())
                                {{-- <div class="row collapse">  --}}
                                     <ul class="alert alert-danger">
                                         @foreach($errors->all() as $error)
                                             <li> {{ $error }} </li>
                                         @endforeach
                                      </ul>
                                  {{-- </div>  --}}
                                @endif
                                
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            
                                <a href="{{ route('home') }}" class="btn btn btn-danger float-right">Back</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
