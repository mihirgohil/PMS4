@extends('placement-coordinator.layouts.admin')   

@section('main_content')
<link href="{{ asset('css/bootstrapcard.css') }}" rel="stylesheet">
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Company</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">      
          
                @foreach($company as $data)
                <div class="col-sm-4"> 
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{$data->avatar}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Company name : <br> {{$data->name}}</h5>
                    <p class="card-text"><a href="{{$data->website}}" target="_blank">{{$data->website}}</a></p>
                    <p class="card-text">{{$data->phone}}</p>
                    <p class="card-text">{{$data->created_at}}</p>
                    <a href="{{ route('placement-coordinator.editCompanySelect', ['id' => $data->id ]) }}" class="btn btn-primary">Edit</a>
                  </div>
                </div>
                </div>
                @endforeach
                
                
              </div>
        
      </div>
    </section>
    <!-- /.content -->
@endsection
