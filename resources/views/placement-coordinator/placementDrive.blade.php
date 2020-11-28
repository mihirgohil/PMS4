@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Placement Drive</h1>
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
                      <td>
                  <a href="{{ route('placement-coordinator.addNewDrive') }}" class="btn btn-primary" >Add New Placement Drive</a>
                      </td>
                  </tr>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Drive Name</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Status</th>
                      <th></th>
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
                        <td> <a class="btn btn-primary" href="{{ route('placement-coordinator.report_menu',['drive_id' => $data->id ]) }}" >{{__('View Reports')}}</a> </td>
                        @if(!$data->is_completed)
                           <td> <button class="btn btn-danger" onclick="myFunction({{$data->id}})">{{__('Close Drive')}}</button> </td>
                        @else
                          <td></td>   
                        @endif
                          
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              <form method="POST" name="formClose" id="formClose" action="{{ route('placement-coordinator.closePlacementDrive') }}" aria-label="{{ __('Register') }}">
                        @csrf
                       <input type="hidden" id="drid" name="drid" value="">

               </form>
      </div>
    </section>

<script>
function myFunction(id) {
  var txt;
  if (confirm("Do you want to close the drive?\n Closing the Drive will Close Student Account and Internship Job Post.")) {
    document.getElementById("drid").value = id;
    document.getElementById("formClose").submit();  
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

    <!-- /.content -->
@endsection
