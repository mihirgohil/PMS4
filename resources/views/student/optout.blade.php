@extends('student.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Opt-Out Form</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
              <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h5 class="card-drive_name">Fill this optout form</h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <form method="POST" action="{{ route('student.optout.submit') }}" aria-label="{{ __('Register') }}">
                        @csrf
                       
                        @if(isset($status))
                        <div class="alert alert-success" role="alert">
                            {{ 'boom' }}
                        </div>
                        @endisset
                    

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="optout" class="col-md-4 col-form-label text-md-right">{{ __('Reason for OptOut') }}</label>

                            <div class="col-md-6">
                                <textarea rows="7" cols="7" id="optout" type="text" class="form-control{{ $errors->has('optout') ? ' is-invalid' : '' }}" name="optout" value="{{ old('optout') }}" required></textarea>

                                @if ($errors->has('optout'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('optout') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

          </div>
      </div>
    </section>
    <script>
       function myFunction() {
  alert("The form was submitted");
}
    </script>
    <!-- /.content -->

@endsection

