<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="">
        <input type="text" name="age" id="">
        <input type="text" name="email" id="">
        <input type="text" name="phone" id="">
        <input type="text" name="password" id="">
        <input type="submit" name="submit">
        


    </form>

</body>
</html>
<?php
include 'auth.php';
if(isset($_POST['submit'])){
    // $name=$_POST['name'];
    // $email=$_POST['email'];
    // $phone=$_POST['phone'];
    // $password=$_POST['password'];
    // $age=$_POST['age'];
    $connect = new PDO('mysql:host=localhost;dbname=calender', 'root', 'root');
    $query="INSERT INTO user_table(name,age,email,phone,password) 
    VALUES(:name,:age,:email,:phone,:password)";
     $statement = $connect->prepare($query);
     $statement->execute(
      array(
       ':name'  => $_POST['name'],
       ':age'=>$_POST['age'],
       ':email' => $_POST['email'],
       ':phone' => $_POST['phone'],
       ':password'=>$_POST['password']

      )
     );
}
?>