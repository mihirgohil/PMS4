@extends('student.layouts.admin')

@section('main_content')
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
                            <label for="studentname" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name"  class="form-control" name="studentname" value="{{ Auth::guard('student')->user()->studentname }}">

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number"  class="form-control" name="phone" value="{{ Auth::guard('student')->user()->phone }}">

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stream" class="col-md-4 col-form-label text-md-right">{{ __('Stream') }}</label>

                            <div class="col-md-6">
                                <input id="stream" type="name"  class="form-control" name="stream" value="{{ Auth::guard('student')->user()->stream }}">
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
@endsection