@extends('student.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <div class="alert alert-info" role="alert">  
            <h1 class="m-0 text-dark">Internship Posts of Placement Drive : {{ $student->placement_drive->drive_name }}</h1>
            </div>
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

        @if(!$student->is_placed)

            @foreach($posts as $data)
            {{-- {{ $posts }} --}}
            @if(!in_array($data->id,$applied_list))
                      
            
            <div class="card">
              <div class="card-header">
                
                <img src="{{ $data->company->avatar }}" class="img-circle elevation-2" style="width:50px; height:50px;position:relative; border-radius:50%" alt="">
                {{ $data->company->name }}
                
              
                <div class="float-right">
                  @if(!$data->is_completed)
                  {{-- Internship Status :   --}}
                  <div class="alert alert-warning" role="alert">
                    {{ __('Internship Job Active') }}
                  </div>
                  @else 
                  <div class="alert alert-danger" role="alert">
                    {{ __('Internship Job Closed') }}
                  </div>
                  @endif  
                                        
                </div>
              
              </div>
              <div class="card-header">
                Action : 
                <div class="col-md-2 float-right">
                  @if(!$data->is_completed)
                  @if($data->is_active_registration)
                  
                    {{-- @if($student->) --}}
                    
                      <a href="{{ route('student.internapply', ['id' => $data->id ]) }}" class="btn btn-outline-success">Apply For Internship</a>
                  @else 
                  <div class="alert alert-danger" role="alert">
                    {{ __('Apply Disabled') }}
                  </div> 
                  @endif
                  @endif
                  {{-- {{ $applied_list }} --}}
                
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
            @endif
            @endforeach
        @else
            {{-- {{ $student_selected->internship->company->name }} --}}
            <div class="card">
              <div class="card-header">
                
                <img src="{{ $student_selected->internship->company->avatar }}" class="img-circle elevation-2" style="width:50px; height:50px;position:relative; border-radius:50%" alt="">
                {{ $student_selected->internship->company->name }}
                      
                </div>
              
              <div class="card-header">
                <div class="alert alert-success" role="alert">
                  {{ __('You have Been Selected For This Internship.') }}
                </div> 
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Contact Person : </strong><br> {{ $student_selected->internship->co_details}}</h5>
                <p class="card-text"><br><strong>Company Overview :</strong><br> {{ $student_selected->internship->overview }}</p>
                <p class="card-text"><br><strong>Internship Duration :</strong><br> {{$student_selected->internship->duration }}</p>
                <p class="card-text"><br><strong>Recruitment Process :</strong><br> {{ $student_selected->internship->recruitment }}</p>
                <p class="card-text"><br><strong>No. of Position(Technologies wise) :</strong><br> {{ $student_selected->internship->position }}</p>
                <p class="card-text"><br><strong>Mode Of Interview :</strong><br> {{ $student_selected->internship->modeofinterview }}</p>
                <p class="card-text"><br><strong>Working Hours :</strong><br> {{ $student_selected->internship->workinghours }}</p>
                <p class="card-text"><br><strong>Stipend :</strong><br> {{ $student_selected->internship->stipend }}</p>
                <p class="card-text"><br><strong>CTC :</strong><br> {{ $student_selected->internship->ctc }}</p>
                <p class="card-text"><br><strong>Bond Details :</strong><br> {{ $student_selected->internship->bond }}</p>
              </div>
            </div>
        @endif
      </div>
    </section>
    <!-- /.content -->
@endsection
