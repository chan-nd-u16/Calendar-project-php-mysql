<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <style>
        body{
            /* width: 100%;
            height: 100vh; */
             background-image: url("https://media.istockphoto.com/id/1299730469/photo/fingerprint-biometric-authentication-button-digital-security-concept.jpg?s=612x612&w=0&k=20&c=5N69O1YqbcAw2ZHV1oVeItoagXth9YNxF_Dnfn_pwUI="); 
            background-repeat: no-repeat;
            background-size: cover;
            /* margin: auto; */
            


        }
        .box{
            width: 30rem;
            height: 70vh;
            /* background-color: red; */
            margin: auto;
            
        }
        .center{
            width: 24rem;
            height: 30rem;
            /* background-color: blue; */
            
            margin: auto;
            margin-top:70px;
            opacity: 1.2;
            backdrop-filter: blur(10px);
            border: 1.5px solid white;
            border-radius: 20px;
            
            
        }
        .al{
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        input{
            padding: 10px;
            border-radius: 25px;
            /* font-size: 19px; */
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
            background-color: transparent;
            color: white;
            border: 1px solid white;
        }
        .sub{
            padding: 10px;
            border-radius: 15px;
            width: 30%;
            background-color: white;
            color: black;
           
            border:1px solid white;
        }
        .sub:hover{
            
            background-color:transparent;
            color: white;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="center">
            <form  action="" method="post">
                            <div class="name al">

                                <input type="text" placeholder="Name" name="name">
                                
                            </div>
                            <div class="Email al">

                            <input type="text" placeholder="Email" name="email">
                                
                            </div>
                            <div class="Phone al">

                            <input type="number" placeholder="Phone" name="phone">
                                
                            </div>
                            <div class="Age al">

                            <input type="number" placeholder="Age" name="age">
                                
                            </div>
                            <div class="Password al">

                            <input type="text" placeholder="Password" name="password">
                                
                            </div>
                            <div class="button al">

                            <input type="submit" class="sub" name="submit"  value="SUBMIT">
                                
                            </div>
            




            </form>
        </div>


    </div>
</body>
</html>
<?php

include 'Auth.php';
if(isset($_POST['submit'])){
    
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$age=$_POST['age'];
    $query="INSERT INTO `user_table`(name,age,email,phone,password) 
    VALUES('$name','$age','$email','$phone','$password')";
    $quercall=mysqli_query($auth,$query);
    
    if($quercall){
        // echo"inserted successfully";
        header('location:login.php');
    }

}



?>