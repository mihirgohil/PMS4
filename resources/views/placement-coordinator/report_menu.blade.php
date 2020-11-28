@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->

<link rel="stylesheet" href="{{ asset('css/report_menu.css') }}">
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
          <h2 class="m-0 text-dark">Placement Drive : {{ $placement_drive->drive_name }}</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
     <div class="row">
        <div class="col-lg-3 col-sm-6">
            <h3>Student Options : </h3>
        </div>
     </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">

                    <h3> Student Registered </h3>
                <h3> {{ $student_count }}</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <a href="{{ route('placement-coordinator.report_student_list',['drive_id' => $placement_drive->id ]) }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> Student Placed </h3>
                    <h3> {{ $student_placed }} </h3>

                </div>
                <div class="icon">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                </div>
                <a href="{{ route('placement-coordinator.report_placed_student_list',['drive_id' => $placement_drive->id ]) }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

          <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3> Student Unplaced </h3>
                    <h3>  {{ $student_unplaced }}  </h3>
                </div>
                <div class="icon">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <a href="{{ route('placement-coordinator.report_unplaced_student_list',['drive_id' => $placement_drive->id ]) }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> Student OptOut </h3>
                    <h3> {{ $student_optout }} </h3>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{ route('placement-coordinator.report_optout_student_list',['drive_id' => $placement_drive->id ]) }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <h3>Company Options : </h3>
        </div>
     </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">

                    <h3> Total Internship </h3>
                    <h3> {{ $total_internship }} </h3>
                </div>
                <div class="icon">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                </div>
                <a href="{{ route('placement-coordinator.report_internship_list',['drive_id' => $placement_drive->id ]) }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

         <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> Total Published </h3>
                    <h3>  {{ $total_published }} </h3>

                </div>
                <div class="icon">
                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                </div>
                <a href="{{ route('placement-coordinator.report_published_internship_list',['drive_id' => $placement_drive->id ]) }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> Total Unpublished </h3>
                <h3> {{ $total_unpublished }}</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
                <a href="{{ route('placement-coordinator.report_unpublished_internship_list',['drive_id' => $placement_drive->id ]) }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>



    </div>

</div>


      </div>
    </section>
    <!-- /.content -->
        
@endsection
