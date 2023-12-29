<?php
include 'Auth.php';
    session_start();
    $id=$_SESSION['id'];
    
    
    $final_array=$_POST['name'];
    echo $final_array;
    $decoded_json=json_decode($final_array);
    // print_r($decoded_json);
    $query="SELECT * FROM `eventss` WHERE id=$id";
    $querycall=mysqli_query($auth,$query);
    $data=mysqli_fetch_array($querycall);
    $jason_data=json_encode($data);
   

?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
    <style>
    
  </style>
    <script>
      
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events:[
        <?php echo $jason_data;?>

            
          ],
          eventLimit:true
        });
        
        calendar.render();
      });

    </script>
  </head>
  
  <body>
    <div id='calendar'></div>
    <a href="dashboard.php">Dashboard</a>
  </body>
</html>