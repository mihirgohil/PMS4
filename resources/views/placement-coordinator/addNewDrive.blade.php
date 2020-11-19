@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Placement Drive</h1>
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
                <h3 class="card-title">Add Drive</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <form method="POST" action="{{ route('placement-coordinator.addNewDriveSave') }}" aria-label="{{ __('Register') }}">
                        @csrf
                       
                        @if(isset($status))
                        <div class="alert alert-success" role="alert">
                            {{ 'boom' }}
                        </div>
                        @endisset
                    

                        <div class="form-group row">
                            <label for="drive_name" class="col-md-4 col-form-label text-md-right">{{ __('Drive Name') }}</label>

                            <div class="col-md-6">
                                <input id="drive_name" type="text" class="form-control{{ $errors->has('drive_name') ? ' is-invalid' : '' }}" name="drive_name" value="{{ old('drive_name') }}" required>

                                @if ($errors->has('drive_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('drive_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                                <a href="{{ route('placement-coordinator.placementDrive') }}" class="btn btn btn-danger float-right">Back</a>
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
