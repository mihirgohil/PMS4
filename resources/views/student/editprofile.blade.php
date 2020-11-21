@extends('student.layouts.admin')

@section('main_content')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin:50px;">
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                
                    <form action="{{ route('student.updateprofile') }}" method="POST">
                    @csrf
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="picture-container">
                                    <div class="picture"> 
                                        <img src="{{ Auth::guard('student')->user()->avatar }}" class="picture-src" id="wizardPicturePreview">
                                        <input id="wizard-picture" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" onchange="readURL(this)" name="avatar" value="{{ old('avatar') }}">
                                    </div>
                                    <h6>Choose Picture</h6>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="enrollment_no" class="col-md-4 col-form-label text-md-right">{{ __('Enrollment No') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number"  class="form-control" name="enrollment_no" value="{{ Auth::guard('student')->user()->enrollment_no }}" required> 
                            </div>
                    </div>

                        <div class="form-group row">
                            <label for="studentname" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name"  class="form-control" name="studentname" value="{{ Auth::guard('student')->user()->studentname }}" required>                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ Auth::guard('student')->user()->dob }}" min="1997-01-01" max="2015-12-30" required>
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
                                <input id="phone" type="text" onkeypress="return onlyNumberKey(event)" maxlength="10" minlength="10" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ Auth::guard('student')->user()->phone }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ssc" class="col-md-4 col-form-label text-md-right">{{ __('S.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="ssc" type="text" class="form-control{{ $errors->has('ssc') ? ' is-invalid' : '' }}" name="ssc" value="{{ Auth::guard('student')->user()->ssc }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hsc" class="col-md-4 col-form-label text-md-right">{{ __('H.S.C (%)') }}</label>

                            <div class="col-md-6">
                                <input id="hsc" type="text" class="form-control{{ $errors->has('hsc') ? ' is-invalid' : '' }}" name="hsc" value="{{ Auth::guard('student')->user()->hsc }}" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ug" class="col-md-4 col-form-label text-md-right">{{ __('U.G (%)') }}</label>

                            <div class="col-md-6">
                                <input id="ug" type="text" class="form-control{{ $errors->has('ug') ? ' is-invalid' : '' }}" name="ug" value="{{ Auth::guard('student')->user()->ug }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stream" class="col-md-4 col-form-label text-md-right">{{ __('Select Stream') }}</label>

                            <div class="col-md-6">
                                <input id="stream" type="text" class="form-control{{ $errors->has('stream') ? ' is-invalid' : '' }}" name="stream" value="{{ Auth::guard('student')->user()->stream }}" placeholder="Ex..BCA" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currenr_cpi" class="col-md-4 col-form-label text-md-right">{{ __('MCA Current CPI') }}</label>

                            <div class="col-md-6">
                                <input id="cpi" type="text" class="form-control{{ $errors->has('cpi') ? ' is-invalid' : '' }}" name="cpi" value="{{ Auth::guard('student')->user()->cpi }}" required>
                            </div>
                        </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                                    
                                <a href="{{route('student.stuprofile') }}" class="btn btn-primary float-right">
                                    {{ __('Back') }}
                                </a>
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