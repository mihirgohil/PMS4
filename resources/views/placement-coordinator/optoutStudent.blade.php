@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<link href="{{ asset('css/bootstrapcard.css') }}" rel="stylesheet">
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h2 class="m-0 text-dark">OptOut Students of Placement Drive : {{ $drive->drive_name }}</h2>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <a href="{{ route('placement-coordinator.manageStudent', ['id' => $drive_id ]) }}" class="btn btn-primary">All Students</a>
          </div>
          <div class="col-sm-2">
            <a href="{{ route('placement-coordinator.unplacedStudent', ['id' => $drive_id ]) }}" class="btn btn-success">Student Unplaced</a>
          </div>
          
          <div class="col-sm-2">
            <a href="{{ route('placement-coordinator.placedStudent', ['id' => $drive_id ]) }}" class="btn btn-primary">Student Placed</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-2">
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"> 
              @foreach($student as $data)
                <div class="col-sm-4"> 
                <div class="card" style="width: 22rem;">
                  <img class="card-img-top" src="{{$data->avatar}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Student name :<br>{{$data->studentname}}</h5><br><br>
                    <p class="card-text">Enrollment No : {{$data->enrollment_no}}</a></p>
                    <p class="card-text">Phone No.: {{$data->phone}}</p>
                    <p class="card-text">Email : {{$data->email}}</p>
                    <p class="card-text"><br></p>
                    <p class="card-text">OptOut Title : {{$data->optout->title}}</p>
                    <p class="card-text">OptOut Reason : {{$data->optout->optout}}</p>
                  </div>
                </div>
                </div>
                @endforeach
          </div>
      </div>
    </section>
    <!-- /.content -->
@endsection
