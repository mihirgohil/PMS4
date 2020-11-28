<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>optout Students of Placement Drive : {{ $placement_drive->drive_name }}</title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        
      }
      tr {
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 2px;
    padding-right: 2px;
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
          
          <h4><caption>Optout Students of Placement Drive : {{ $placement_drive->drive_name }}</caption></h4>
          </div><!-- /.col -->
          
          <div >
            Report Date : {{ $today }}
        </div><!-- /.row -->
        Total Students : {{ $students_count }} Optout Students : {{ $unplaced }}

      </div><!-- /.container-fluid -->

    
                  <table >
                  <caption>Optout Students of Placement Drive : {{ $placement_drive->drive_name }} </caption>
                    
                    <thead >
                       
                    <tr>
                        <th >#</th>
                        
                        <th >Enrollment No</th>
                        <th >Student Last Name</th>
                       
                        <th >Title</th>
                          <th >Reason</th>
                    </tr>
                  </thead>
                  <?php $i = 0 ?>
                    <tbody>
    
                        @foreach($students as $data)
                      <tr>
                        <?php $i += 1?> 
                        <tr>
                                <th scope="row"><?php echo $i ?> </th>
                        
                          <td>{{ $data->enrollment_no }}</td>
                          <td>{{ $data->studentname }}</td>
                         
                          <td>{{ $data->optout->title }}</td>
                          <td>{{ $data->optout->optout }}</td>
                         
        
        
                             
                          </tr>
                     @endforeach
                    </tbody>
                  </table>
    
        </div>
        
      </section>  <!-- /.content -->
      
    
</body>
</html>