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
            /* background-image: url("https://t3.ftcdn.net/jpg/06/20/23/56/240_F_620235624_qpQRVYu5JBonGnkCExuogwB1pARKOhPR.jpg");  */
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
            height: 24rem;
            /* background-color: blue; */
            
            margin: auto;
            margin-top:100px;
            opacity: 1.2;
            backdrop-filter: blur(10px);
            border: 1.5px solid white;
            border-radius: 20px;
            
            
        }
        .al{
            display: flex;
            justify-content: center;
            margin-top: 90px;
        }
        .al2{
            display: flex;
            justify-content: center;
            margin-top: 20px;
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
                            
                            <div class="Email al">

                            <input type="text" placeholder="Email" name="email">
                                
                            </div>
                            <div class="Password al2">

                            <input type="password" placeholder="Password" name="password">
                                
                            </div>
                            <div class="button al2">

                            <input type="submit" class="sub" name="submit"  value="LOGIN">
                                
                            </div>
            




            </form>
        </div>


    </div>
</body>
</html>
<?php
include 'auth.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM user_table WHERE email='$email' and password='$password'";
    $quercall=mysqli_query($auth,$query);
    
    if($quercall->num_rows>0){
        $data=mysqli_fetch_array($quercall);
        echo "login successfully";
        session_start();
        $_SESSION['id']=$data['id'];
        header("location:dashboard1.php");

    }else if($quercall->num_rows<1){
        echo "sign frist";
    }


}

?>