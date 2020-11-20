@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit <strong>{{ $company->name }}</Strong> Profile</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('placement-coordinator.editCompanySave') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                                @csrf

                                <input id="id" type="hidden" name="id" value="{{ $company->id }}">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="picture-container">
                                            <div class="picture"> 
                                                <img src="{{ $company->avatar }}" class="picture-src" id="wizardPicturePreview">
                                                <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}" onchange="readURL(this)" accept="image/*">
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
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $company->name }}" required autofocus>
        
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $company->address }}" required autofocus>
        
                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="website" type="url" pattern="https?://.+" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" value="{{  $company->website }}" required autofocus>
        
                                        @if ($errors->has('website'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('website') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

        
                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="phone" type="text" onkeypress="return onlyNumberKey(event)" maxlength="10" minlength="10" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $company->phone }}" required autofocus>
        
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
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
                                            {{ __('update') }}
                                        </button>
                                    
                                        <a href="{{ route('placement-coordinator.manageCompany') }}" class="btn btn btn-danger float-right">Back</a>
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
        <script>
        //     $(document).ready(function(){
        // // Prepare the preview for profile picture
        //     $("#wizard-picture").change(function(){
        //         readURL(this);
        //     });
        // });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
      </div>
    </section>
    <!-- /.content -->
@endsection
