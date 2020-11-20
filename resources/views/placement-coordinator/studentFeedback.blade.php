@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Student Feedback</h3>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
              @foreach($stufeedback as $data)
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">{{$data->id}}</h3>
                    <h5 class="card-text">{{$data->title}}</h5>
                    <h6 class="card-text">{{$data->details}}</h6>
                    <small class="card-text">{{$data->created_at}}</small><br><br>
                    <!-- <a href="#" class="btn btn-primary float-right">Response</a> -->
                </div>
              </div>
            @endforeach
              </div>
            </div>
      </div>
    </section>
    <!-- /.content -->
@endsection
