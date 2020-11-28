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
          <h2 class="m-0 text-dark">Placed Students of Placement Drive : {{ $placement_drive->drive_name }}</h2>
          </div><!-- /.col -->
          <div class="col-sm-1">
            <a href="{{ route('placement-coordinator.print_student_placed_report',['drive_id' => $placement_drive->id ]) }}" class="btn btn-success" target="_blank">print</a>
           
            

            </div>
          <div class="col-sm-1">
          <a href="{{ route('placement-coordinator.report_menu',['drive_id' => $placement_drive->id ]) }}" class="btn btn-primary">Go back</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Logo</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Company Mail</th>
                        <th scope="col">Student Profile Picture</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Enrollment No</th>
                        <th scope="col">Student Phone No</th>
                        <th scope="col">Student Email</th>
                      </tr>
                  </thead>
                  <?php $i = 0 ?>
                    <tbody>
    
                        @foreach($students as $data)
                      <tr>
                        <?php $i += 1?> 
                      <th scope="row"><?php echo $i ?> </th>
                      <td><img src="@foreach($data->internshipApplied as $applied)
                        @if($applied->is_selected)
                            {{ $applied->internship->company->avatar }}
                        @endif
                     @endforeach" class="img-circle elevation-2" width="82" height="82"></td>

                      <td>@foreach($data->internshipApplied as $applied)
                        @if($applied->is_selected)
                            {{ $applied->internship->company->name }}
                        @endif
                     @endforeach</td>
                     <td>@foreach($data->internshipApplied as $applied)
                      @if($applied->is_selected)
                          {{ $applied->internship->company->email }}
                      @endif
                   @endforeach</td>
                     
                      <td><img src="{{ $data->avatar}}" class="img-circle elevation-2" width="82" height="82"></td>
                      <td>{{ $data->studentname }}</td>
                      <td>{{ $data->enrollment_no }}</td>
                      <td>{{ $data->phone }}</td>
                      <td>{{ $data->email }}</td>
                    
    
    
                         
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
    
        </div>
      </section>  <!-- /.content -->
        
@endsection









