@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Student</h1>
          </div><!-- /.col -->
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
                    <p class="card-text">Date Of Birth : {{$data->dob}}</p>
                    <!-- <p class="card-text">Placement Drive : {{$data->drive}}</p> -->
                    <p class="card-text">S.S.C(%) : {{$data->ssc}}</p>
                    <p class="card-text">H.S.C(%) : {{$data->hsc}}</p>
                    <p class="card-text">U.G(%) : {{$data->ug}}</p>
                    <p class="card-text">Stream : {{$data->stream}}</p>
                    <p class="card-text">CPI : {{$data->cpi}}</p>
                    <p class="card-text">Created At : {{$data->created_at}}</p>
                    <a href="{{ route('placement-coordinator.editStudentSelect', ['id' => $data->id ]) }}" class="btn btn-primary">Edit</a>
                  </div>
                </div>
                </div>
                @endforeach
          </div>
      </div>
    </section>
    <!-- /.content -->
@endsection
