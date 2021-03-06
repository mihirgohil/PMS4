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
          <h2 class="m-0 text-dark">Unplaced Students of Placement Drive : {{ $placement_drive->drive_name }}</h2>
          </div><!-- /.col -->
          <a href="{{ route('placement-coordinator.print_student_unplaced_report',['drive_id' => $placement_drive->id ]) }}" class="btn btn-success" target="_blank">print</a>
          <div class="col-sm-1">
          <a href="{{ route('placement-coordinator.report_menu',['drive_id' => $placement_drive->id ]) }}" class="btn btn-primary">Go back</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    
                  <table class="table">
                    <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">profile pic</th>
                      <th scope="col">Name</th>
                      <th scope="col">Enrollment No</th>
                      <th scope="col">Phone No</th>
                      <th scope="col">Email</th>
                      <th scope="col">S.S.C(%)</th>
                      <th scope="col">H.S.C(%)</th>
                      <th scope="col">Ug Stream</th>
                      <th scope="col">U.G(%)</th>
                      <th scope="col">CPI</th>
                    </tr>
                  </thead>
                  <?php $i = 0 ?>
                    <tbody>
    
                        @foreach($students as $data)
                      <tr>
                        <?php $i += 1?> 
                            <th scope="row"><?php echo $i ?> </th>
                      <td><img src="{{ $data->avatar}}" class="img-circle elevation-2" width="82" height="82"></td>
                      <td>{{ $data->studentname }}</td>
                      <td>{{ $data->enrollment_no }}</td>
                      <td>{{ $data->phone }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->ssc }}</td>
                      <td>{{ $data->hsc }}</td>
                      <td>{{ $data->stream }}</td>
                      <td>{{ $data->ug }}</td>
                      <td>{{ $data->cpi }}</td>
    
    
                         
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
    
        </div>
      </section>  <!-- /.content -->
        
@endsection









