@extends('company.layouts.admin')

@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin:50px;">
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                
                    <form action="{{ route('company.updateprofile') }}" method="POST">
                    @csrf
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                     
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name"  class="form-control" name="name" value="{{ Auth::guard('company')->user()->name }}">                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text" pattern="https?://.+"  class="form-control" name="website" value="{{ Auth::guard('company')->user()->website }}">
                            </div>
                    </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number"  class="form-control" name="phone" value="{{ Auth::guard('student')->user()->phone }}">

                               
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                                    
                                <a href="{{route('company.profile') }}" class="btn btn-primary float-right">
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
@endsection