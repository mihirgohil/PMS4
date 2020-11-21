@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Internship Post Details</h1>
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
                <h3 class="card-title">Edit Internship Post Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <form method="POST"  id="frm"  name="frm"  action="{{ route('placement-coordinator.addNewpost.Store') }}" aria-label="{{ __('Register') }}" >
                        @csrf
                       
                        @if(isset($status))
                        <div class="alert alert-success" role="alert">
                            {{ 'boom' }}
                        </div>
                        @endisset
                    

                        <div class="form-group row">
                            <label for="co_details" class="col-md-4 col-form-label text-md-right">{{ __('Coordinator Details') }}</label>

                            <div class="col-md-6">
                                <textarea rows="5" cols="5" id="drive_name" type="text" class="form-control{{ $errors->has('co_details') ? ' is-invalid' : '' }}" placeholder="Person's Name,Phone,Email,Designation" name="co_details" value="{{ old('co_details') }}" required>{{ $post->co_details }}</textarea>

                                @if ($errors->has('co_details'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('co_details') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      
                     <div class="form-group row">
                            <label for="overview" class="col-md-4 col-form-label text-md-right">{{ __('Company 
                            Overview') }}</label>

                            <div class="col-md-6">
                                <textarea rows="7" cols="7" id="drive_name" type="text" class="form-control{{ $errors->has('overview') ? ' is-invalid' : '' }}" placeholder="Overview" name="overview" value="{{ old('overview') }}" required>{{ $post->overview }}</textarea>

                                @if ($errors->has('overview'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('overview') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Internship Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}" name="duration" placeholder="In months" value="{{ $post->duration }}" required>

                                @if ($errors->has('duration'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="recruitment" class="col-md-4 col-form-label text-md-right">{{ __('Recruitment Process') }}</label>

                            <div class="col-md-6">
                                <textarea rows="5" cols="5" id="recruitment" type="text" class="form-control{{ $errors->has('recruitment') ? ' is-invalid' : '' }}" name="recruitment" value="{{ old('recruitment') }}" required>{{ $post->recruitment }}</textarea>

                                @if ($errors->has('recruitment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('recruitment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('No. of Position Technologies') }}</label>

                            <div class="col-md-6">
                                <textarea rows="3" cols="3" id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required>{{ $post->position }}</textarea>

                                @if ($errors->has('position'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="modeofinterview" class="col-md-4 col-form-label text-md-right">{{ __('Mode Of Interview') }}</label>

                            <div class="col-md-6">
                                <input id="modeofinterview" type="text" class="form-control{{ $errors->has('modeofinterview') ? ' is-invalid' : '' }}" name="modeofinterview" value="{{ $post->modeofinterview }}" required>

                                @if ($errors->has('modeofinterview'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('modeofinterview') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group row">
                            <label for="workinghours" class="col-md-4 col-form-label text-md-right">{{ __('Working Hours') }}</label>

                            <div class="col-md-6">
                                <input id="workinghours" type="text" class="form-control{{ $errors->has('workinghours') ? ' is-invalid' : '' }}" name="workinghours" value="{{ $post->workinghours }}" required>

                                @if ($errors->has('workinghours'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('workinghours') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group row">
                            <label for="stipend" class="col-md-4 col-form-label text-md-right">{{ __('Stipend') }}</label>

                            <div class="col-md-6">
                                <input id="stipend" type="text" class="form-control{{ $errors->has('stipend') ? ' is-invalid' : '' }}" name="stipend" value="{{ $post->stipend }}" required>

                                @if ($errors->has('stipend'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stipend') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group row">
                            <label for="ctc" class="col-md-4 col-form-label text-md-right">{{ __('CTC') }}</label>

                            <div class="col-md-6">
                                <input id="ctc" type="text" class="form-control{{ $errors->has('ctc') ? ' is-invalid' : '' }}" name="ctc" value="{{ $post->ctc }}" required>

                                @if ($errors->has('ctc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ctc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group row">
                            <label for="bond" class="col-md-4 col-form-label text-md-right">{{ __('Bond Details') }}</label>

                            <div class="col-md-6">
                                <textarea rows="3" cols="3" id="bond" type="text" class="form-control{{ $errors->has('bond') ? ' is-invalid' : '' }}" name="bond" value="{{ old('bond') }}" required>{{ $post->bond }}</textarea>

                                @if ($errors->has('bond'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bond') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>   
                                <a href="{{ route('placement-coordinator.managePublish', ['id' => $post->placement_drive_id ]) }}" class="btn btn-outline-danger">{{__('Go to Manage & Publish Internship Post ')}}</a>
                            </div>
                        </div>
                    </form>
                </div>

          </div>
      </div>
    </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// $("#frm").submit(function(event){
//  // var valDDL = $(this).val();
//         //event.preventDefault();
//          var drive = $("#drive").val();
//          if(drive=="default_drive")
//          {
//               event.preventDefault();
//               alert("select Placement Drive");
//          }
//  });
 function validate(){
    var drive = $("#drive").val();
         if(drive=="default_drive")
         {
              
              alert("select Placement Drive");
              return false;
         }
         var company = $("#company").val();
         if(company=="default_company")
         {
              
              alert("select Company");
              return false;
         }
         return true;
 }
</script>
<script>
$("#frm").submit(function(event){
 // var valDDL = $(this).val();
        //event.preventDefault();
         var company = $("#company").val();
         if(company=="default_company")
         {
              event.preventDefault();
              alert("select Company");
         }
 });
</script>

    <!-- /.content -->
@endsection

