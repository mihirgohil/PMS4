@extends('student.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Register') }}</div>

                <div class="card-body">
                    <form method="POST" id="frm"  name="frm" action="{{ route('student.register') }}" aria-label="{{ __('Register') }}" onsubmit="return validate()" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="picture-container">
                                    <div class="picture"> 
                                        <img src="{{ asset('/images/user1.png') }}" class="picture-src" id="wizardPicturePreview">
                                        <input id="wizard-picture" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" onchange="readURL(this)" name="avatar" value="{{ old('avatar') }}">
                                    </div>
                                    <h6>Choose Picture</h6>
                                </div>
                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="enrollment_no" class="col-md-4 col-form-label text-md-right">{{ __('Enrollment No') }}</label>
                            
                            <div class="col-md-6">
                                <input id="enrollment_no" type="text" onkeypress="return onlyNumberKey(event)" maxlength="12" minlength="12" class="form-control{{ $errors->has('enrollment_no') ? ' is-invalid' : '' }}" name="enrollment_no" value="{{ old('enrollment_no') }}" required autofocus>
                                
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
                                <input id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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
                                <input id="password-confirm" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" onkeypress="return onlyNumberKey(event)" maxlength="10" minlength="10" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="drive" class="col-md-4 col-form-label text-md-right">{{ __('Select Placement Drive') }}</label>
                            <div class="col-md-6">
                                <select id="drive" class="form-control" name="drive">           
                                    <option value="default_drive">Drive name </option>
                                    @foreach($drive as $data)
                                    <option value="{{ $data->id }}">{{$data->drive_name}} </option>
                                    @endforeach
                                </select>
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
<script>
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 

        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
        {
            return false; 
        return true;
        } 
    } 
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#frm").submit(function(event){
 // var valDDL = $(this).val();
        //event.preventDefault();
         var drive = $("#drive").val();
         if(drive=="default_drive")
         {
              event.preventDefault();
              alert("select Placement Drive");
         }
 });
 function validate(){
    var drive = $("#drive").val();
         if(drive=="default_drive")
         {
              
              alert("select Placement Drive");
              return false;
         }
         return true;
 }
</script>
@endsection
