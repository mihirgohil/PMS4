@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->

<link rel="stylesheet" href="{{ asset('css/report_menu.css') }}">
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-3">
        </div>
        <div class="row mb-3">
          <div class="col-sm-10">
          <h2 class="m-0 text-dark">All Internships of Placement Drive : {{ $placement_drive->drive_name }}</h2>
          </div><!-- /.col -->
          <div class="col-sm-1">
           
            

            </div>
          <div class="col-sm-1">
          <a href="{{ route('placement-coordinator.report_menu',['drive_id' => $placement_drive->id ]) }}" class="btn btn-primary">Go back</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    
      @foreach($posts as $data)
      <div class="card">
        <div class="card-header">
          <img src="{{ $data->company->avatar }}" class="img-circle elevation-2" style="width:50px; height:50px;position:relative; border-radius:50%" alt="">
          {{ $data->company->name }}
          <div class="col-md-2 float-right">
            @if($data->is_posted)
            Internship publish Status :  
            <div class="alert alert-success" role="alert">
              {{ __('Published') }}
            </div>
              
            @else
            Internship publish Status :    
            <div class="alert alert-warning" role="alert">
              {{ __('UnPublished') }}
            </div>  
            @endif       
            @if($data->is_completed)
            Internship Status :  
            <div class="alert alert-danger" role="alert">
              {{ __('Closed') }}
            </div> 
            @endif  
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
      </section>  <!-- /.content -->
        
@endsection









