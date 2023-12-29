<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
        .parent{
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        img{
            height: 150px;
            width: 150px;
            border-radius: 20px;
        }
        .bor{
            height: 150px;
            width: 150px;
            border: 2px solid black;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<div class="parent">

    <div class="bor" onclick="update_task('START')"><img src="https://www.freepnglogos.com/uploads/rocket-png/rocket-space-ship-vector-graphic-pixabay-9.png" alt=""></div>
    <div class="bor" onclick="update_task('MONITOR')"><img src="https://www.freepnglogos.com/uploads/advertising-png/computer-download-marketing-transparent-image-advertising-13.png" alt=""></div>
    <div class="bor" onclick="update_task('EXIT')"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYrVQ1U522wNAL73d_Z4cymxe7Wybr8rUORA&usqp=CAU" alt=""></div>
</div>
<div id='calendar'></div>
<a href="calender.php">calendar</a>
    
</body>
</html>

<script>
    let json_array=[];
    
    function update_task(task){
        let date= new Date()
        console.log(date);
        let array={
            title:task,
            start:date,
            allDay:true
        }
        
        json_array.push(array);
        document.cookie = "final = " + final_array;
        <?php
             $arrayy= $_COOKIE['final'];
             
            $_SESSION['some']=$arrayy;
?>
        
    // $.ajax({
    //   type: "POST",
    //   url: "calender.php",
    //   data:{id:final_array}
    // })
    console.log(json_array);
    // for(i of json_array){
    //     console.log(i);
    // }
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events:[
            {title: 'EXIT', start: 'Wed Dec 27 2023 14:50:36 GMT+0530 (India Standard Time)', allDay: true}
          ],
          eventLimit:true
        });
        
        calendar.render();
      });
    }
    var final_array=JSON.stringify(json_array);
    // $('.bor').click(function(e){
    //     e.preventDefault()
    //     $.ajax({
    //         url:'http://localhost/phpprograms/calender/calender.php',
    //         type:'POST',
    //         data:{name:final_array},
    //         success:function(response){
                
    //         }
    //     })


    // });
    
   
</script>
<!-- <script>document.cookie = "final = " + final_array</script> -->


