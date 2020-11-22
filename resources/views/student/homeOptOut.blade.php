@extends('student.layouts.adminOptout')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Student Placement Drive : {{ $student->placement_drive->drive_name }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        You Have OptOut From Placement Drive : {{ $student->placement_drive->drive_name }}
        <div class="form-group row">
            
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $optout->title }}" readonly>

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
                <textarea rows="7" cols="7" id="optout" type="text" class="form-control{{ $errors->has('optout') ? ' is-invalid' : '' }}" name="optout" value="" readonly>{{ $optout->optout }}</textarea>

                @if ($errors->has('optout'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('optout') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
