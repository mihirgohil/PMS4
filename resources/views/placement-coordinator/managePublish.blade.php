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
            <a href="{{ route('placement-coordinator.managePublished', ['id' => $id ]) }}" class="btn btn-info">Published posts</a>
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
            <h4 class="m-0 text-dark">New & unpublished Internship Posts</h4>
          </div>
        </div> 
     
      </div> @foreach($posts as $data)
      <div class="card">
        <div class="card-header">
          <img src="{{ $data->company->avatar }}" class="img-circle elevation-2" style="width:50px; height:50px;position:relative; border-radius:50%" alt="">
          {{ $data->company->name }}
        </div>
        <div class="card-body">
        <h5 class="card-title">Contact Person : <br> {{$data->co_details}}</h5>
          <p class="card-text"><br>Company Overview : {{ $data->overview }}</p>
          <p class="card-text">Internship Duration : {{ $data->duration }}</p>
          <p class="card-text">Recruitment Process : {{ $data->recruitment }}</p>
          <p class="card-text">No. of Position(Technologies wise) : {{ $data->position }}</p>
          <p class="card-text">Mode Of Interview : {{ $data->modeofinterview }}</p>
          <p class="card-text">Working Hours : {{ $data->workinghours }}</p>
          <p class="card-text">Stipend : {{ $data->stipend }}</p>
          <p class="card-text">CTC : {{ $data->ctc }}</p>
          <p class="card-text">Bond Details : {{ $data->bond }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      @endforeach
    </section>
    <!-- /.content -->
@endsection
