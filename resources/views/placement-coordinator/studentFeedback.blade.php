@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Student Feedback</h3>
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
                      <th scope="col">Student id</th>
                      <th scope="col">Title</th>
                      <th scope="col">Details</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</>
                    </tr>
                  </thead>
                  <!-- <?php $i = 0 ?> -->
                  <tbody>
                   @foreach($stufeedback as $data)
                    <tr>
                        <!-- <?php $i += 1?>  -->
                        <td>{{$data->student_id}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->details}}</td>
                        <td>{{$data->created_at}}</td>  
                           <td><button class="btn btn-primary">Response</button></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
      </div>
    </section>
    <!-- /.content -->
@endsection
