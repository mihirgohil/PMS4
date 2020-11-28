<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Placed Students of Placement Drive : {{ $placement_drive->drive_name }}</title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        
      }
      td {
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
}
     
      table.center {
        margin-left: auto; 
        margin-right: auto;
      }
      </style>
</head>
<body>
    
<!-- Main content -->
    <section>
      <div >
        <div >
        </div>
        <?php date_default_timezone_set('Asia/Kolkata'); $today = date("d/m/Y"); ?>
        <div >
          <div >
          <h2> Chimanbhai Patel Post Graduate Institute of Computer Applications</h2>
          
          <h4><caption>Placed Students of Placement Drive : {{ $placement_drive->drive_name }}</caption></h4>
          </div><!-- /.col -->
          
          <div >
            Report Date : {{ $today }}
        </div><!-- /.row -->
        Total Student : {{ $students_count }} Placed : {{ $placed }}

      </div><!-- /.container-fluid -->

    
                  <table >
                  <caption>Placed Students of Placement Drive : {{ $placement_drive->drive_name }} </caption>
                    
                    <thead >
                       
                    <tr>
                        <th >#</th>
                      
                        <th >Company Name</th>
                        <th >Company Mail</th>
                        
                        <th >Student Name</th>
                        <th >Enrollment No</th>
                        <th >Student Phone No</th>
                        <th >Student Email</th>
                    </tr>
                  </thead>
                  <?php $i = 0 ?>
                    <tbody>
    
                        @foreach($students as $data)
                        <tr>
                          <?php $i += 1?> 
                        <th scope="row"><?php echo $i ?> </th>
                       
  
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
      
    
</body>
</html>