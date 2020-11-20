@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Student</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <table class="table">
                  <thead class="thead-dark">
                  <!-- <tr>
                      <td>
                  <a href="#" class="btn btn-primary" ></a>
                      </td>
                  </tr> -->
                    <tr>
                      <th scope="col">Enrollment No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone No</th>
                      <th scope="col">Is Placed</th>
                      <th scope="col">Is OptOut</th>
                      <th scope="col">Created at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <!-- <?php $i = 0 ?> -->
                  <tbody>
                   @foreach($student as $data)
                    <tr>
                        <!-- <?php $i += 1?>  -->
                        <td>{{$data->enrollment_no}}</td>
                        <td>{{$data->studentname}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->is_placed}}</td>
                        <td>{{$data->is_optout}}</td>
                        <td>{{$data->created_at}}</td>  
                           <td><a href="#"><button class="btn btn-primary">Edit</button></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
      </div>
    </section>
    <!-- /.content -->
@endsection
