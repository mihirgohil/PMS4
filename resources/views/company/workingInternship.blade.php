@extends('company.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Running Internships</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-2">
          <div class="col-sm-6">     
              <ul>
                <li>Internship Posts Will be Published To student By Cpi Placement Coordinator. </li>
                <li>Internship Posts Details can Edited Until their are UnPublised. </li>

              </ul> 
              @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @foreach($posts as $data)
        <div class="card">
          <div class="card-header">
            <div class="alert alert-info" role="alert">
              Placement Drive : {{ $data->placement_drive->drive_name }}
            </div>
            
            <img src="{{ $data->company->avatar }}" class="img-circle elevation-2" style="width:50px; height:50px;position:relative; border-radius:50%" alt="">
            {{ $data->company->name }}
            
           
            <div class="float-right">
              @if($data->is_posted)
              Internship Status :  
              <div class="alert alert-success" role="alert">
                {{ __('Published') }}
              </div>
                
              @else
              Internship Status :    
              <div class="alert alert-warning" role="alert">
                {{ __('UnPublished') }}
              </div>  
              @endif           
            </div>
          </div>
          <div class="card-header">
             
            <div class="col-md-1 float-left">
              Actions :
            </div>
            @if($data->is_posted)
            <div class="col-md-2 float-left">
              <a href="#" class="btn btn-primary">Student Applied</a>
            </div>
            <div class="col-md-2 float-right">
            <a href="{{ route('company.DoCloseInternship', ['id' => $data->id ]) }}" class="btn btn-danger">Close Internship Post</a>
            </div>
          @else
          <div class="col-md-2 float-left">
            <a href="{{ route('company.editInternship', ['id' => $data->id ]) }}" class="btn btn-primary">Edit</a>
          </div>
          @endif  
            
            
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
