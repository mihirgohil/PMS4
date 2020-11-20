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
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{$data->avatar}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Student name : <br> {{$data->studentname}}</h5>
                    <p class="card-text">{{$data->enrollment_no}}</a></p>
                    <p class="card-text">{{$data->phone}}</p>
                    <p class="card-text">{{$data->email}}</p>
                    <p class="card-text">{{$data->dob}}</p>
                    <p class="card-text">{{$data->drive}}</p>
                    <p class="card-text">{{$data->ssc}}</p>
                    <p class="card-text">{{$data->hsc}}</p>
                    <p class="card-text">{{$data->ug}}</p>
                    <p class="card-text">{{$data->stream}}</p>
                    <p class="card-text">{{$data->cpi}}</p>
                    <p class="card-text">{{$data->created_at}}</p>
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
