<?php
// session_start();
// $id=$_SESSION['id'];
// $id=11;
// include 'Auth.php';
// if(isset($_POST['json'])){
//     print_r($_POST);
//     $final_array=$_POST['json'];
//     $id=$_POST['id'];
//     $encoded_json=json_encode($final_array);
    
//     $query="UPDATE `user_table`
//     SET json = ?
//     WHERE id=?";
    
//     $querycall=mysqli_prepare($auth,$query);
    
//     if($querycall){
//         $querycall->bind_param("si",$encoded_json,$id);
//         if($querycall->execute()){

//             echo "updated successfully";
//         }
//         else{

//             echo "Error in updating the database";
//             $querycall->close();
//         }
    
//     }
//     else{
//         echo "Error in prepared statement";
//     }
// }
// else{
//     echo "invalid request" ;
//     print_r($_POST);
// }

// $data = json_encode(file_get_contents("php://input"));
// echo $data;

// ===========================================normal javascript ajax==============================================================================
include 'Auth.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $json=json_decode(file_get_contents("php://input"),true);
    $id=$json['id'];
    $task_in_json=$json['json'];
    $last_modified= date(DATE_RFC822);
    // $no=sizeof($task_in_json);
    // $current_status=$task_in_json[$no-1]['title'];
    // $current_status=
    // $last_modified=$jason['json']['title'];

    // $arrayy()=array(
    //     "title"=>$task_in_json,
        

    // );

    
    $query = "UPDATE user_table SET json = '$task_in_json',last_modified='$last_modified' WHERE id = $id";
    mysqli_query($auth,$query);
    $response = $task_in_json;
    
    // echo json_encode($response);
    echo $id."valid request";


}
else{

echo "invalid response";
}

?>