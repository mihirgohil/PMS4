@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage & Publish Internship</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <a href="{{ route('placement-coordinator.managePublish', ['id' => $id ]) }}" class="btn btn-info">New And Unpublished posts</a>
            <a href="{{ route('placement-coordinator.ViewClosedInternshipPost', ['id' => $id ]) }}" class="btn btn-outline-danger">Closed Published Posted</a>
            
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Already Published Internship Posts</h4>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
          </div>
        </div> 
        @foreach($posts as $data)
        <div class="card">
          <div class="card-header">
            <img src="{{ $data->company->avatar }}" class="img-circle elevation-2" style="width:50px; height:50px;position:relative; border-radius:50%" alt="">
            {{ $data->company->name }}
            <div class="col-md-4 float-right">
              @if($data->is_active_registration)
                <a href="#" class="btn btn-outline-danger">Disable Registration</a>
              @else 
                <a href="#" class="btn btn-outline-warning">Active Registration</a>
              @endif
              <a href="#" class="btn btn-info">Show Applied Students List</a>
            </div>
           
          </div>
          <div class="card-body">
            <h5 class="card-title"><strong>Contact Person : </strong><br> {{$data->co_details}}</h5>
            <p class="card-text"><br><strong>Company Overview :</strong><br> {{ $data->overview }}</p>
            <p class="card-text"><br><strong>Internship Duration :</strong><br> {{ $data->duration }}</p>
            <p class="card-text"><br><strong>Recruitment Process :</strong><br> {{ $data->recruitment }}</p>
            <p class="card-text"><br><strong>No. of Position(Technologies wise) :</strong><br> {{ $data->position }}</p>
            <p class="card-text"><br><strong>Mode Of Interview :</strong><br> {{ $data->modeofinterview }}</p>
            <p class="card-text"><br><strong>Working Hours :</strong><br> {{ $data->workinghours }}</p>
            <p class="card-text"><br><strong>Stipend :</strong><br> {{ $data->stipend }}</p>
            <p class="card-text"><br><strong>CTC :</strong><br> {{ $data->ctc }}</p>
            <p class="card-text"><br><strong>Bond Details :</strong><br> {{ $data->bond }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- /.content -->
@endsection
