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
              <tr>
                <th scope="col">#</th>
                <th scope="col">Drive Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <?php $i = 0 ?>
            <tbody>
             @foreach($drive as $data)
              <tr>
                  <?php $i += 1?> 
                  <td> <?php echo $i ?></td>
                  <td>{{$data->drive_name}}</td>
                  <td>{{$data->created_at}}</td>  
                  @if($data->is_completed)
                     <td> {{__('Closed')}}</a> </td>
                  @else
                     <td> {{__('Currently Active')}}</a> </td>
                  @endif
                  <td> <a href="{{ route('placement-coordinator.manageStudent', ['id' => $data->id ]) }}" class="btn btn-primary">{{__('View Students')}}</a> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </section>
    <!-- /.content -->
@endsection
