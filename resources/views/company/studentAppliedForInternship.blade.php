@extends('company.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Applied For Internship</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-2">
          <div class="col-sm-6">     
              {{-- <ul>
                <li>Internship Posts Will be Published To student By Cpi Placement Coordinator. </li>
                <li>Internship Posts Details can Edited Until their are UnPublised. </li>

              </ul>  --}}
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
        {{-- @foreach($posts as $data) --}}
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
             
            <div class="colfloat-left">
              Actions : Select Student Which are Placed for Internship
            </div>  
            
        </div>
        <div class="card-body">
            {{-- {{ $studentApplied }} --}}
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Enrollment No</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Email</th>
                    <th scope="col">S.S.C(%)</th>
                    <th scope="col">H.S.C(%)</th>
                    <th scope="col">Ug Stream</th>
                    <th scope="col">U.G(%)</th>
                    <th scope="col">CPI</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php $i = 0 ?>
                
                <tbody>
                    @foreach($studentApplied as $data)
                  <tr>
                   @if(!$data->student->is_placed)
                    <?php $i += 1?> 
                    <th scope="row"><?php echo $i ?></th>
                    <td><img src="{{ $data->student->avatar }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        width="82" height="82">
                    </td>
                    <td>{{ $data->student->studentname }}</td>
                   <td>{{$data->student->enrollment_no}}</td>
                   <td>{{$data->student->phone}}</td>
                   <td> {{$data->student->email}}</td>
                   <td> {{$data->student->ssc}}</td>
                   <td> {{$data->student->hsc}}</td>
                   <td>{{$data->student->stream}}</td>
                   <td>{{$data->student->ug}}</td>
                   <td>{{$data->student->cpi}}</td>
                   <td> <a href="{{ route('company.studentSelected', ['student_id' => $data->student->id,'internship_id'=>$data->internship->id,'student_name'=>$data->student->studentname ]) }}" class="btn btn-warning">Select</a> </td>
                  </tr>
                  @elseif($data->student->is_placed)
                  @if($data->is_selected)
                  <?php $i += 1?> 
                   <th scope="row"><?php echo $i ?></th>
                    <td><img src="{{ $data->student->avatar }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        width="82" height="82"></td>
                    <td>{{ $data->student->studentname }}</td>
                   <td>{{$data->student->enrollment_no}}</td>
                   <td>{{$data->student->phone}}</td>
                   <td> {{$data->student->email}}</td>
                   <td> {{$data->student->ssc}}</td>
                   <td> {{$data->student->hsc}}</td>
                   <td>{{$data->student->stream}}</td>
                   <td>{{$data->student->ug}}</td>
                   <td>{{$data->student->cpi}}</td>
                   <td><div class="alert alert-success" role="alert">Selected</div></td>
                  </tr>
                  @endif
                  @endif
                  @endforeach
                </tbody>
              </table>
         </div>
        {{-- @endforeach --}}
      </div>
    </section>
    <!-- /.content -->
@endsection
