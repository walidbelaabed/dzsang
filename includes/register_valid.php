<?php
    require 'connection.php';
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
     $full_name = $_POST['full_name']; 
     $email =  $_POST['email'];
     $phone =  $_POST['phone'];
     $password =  $_POST['pass_one'];
     $blood =  $_POST['blood_type'];
     $state =  $_POST['agent_state'];
     $town =  $_POST['agent_town'];
     $gender =  $_POST['gender'];
     if ($full_name != "" && $email != "" && $phone != "" && $password != "" && $blood !="" && $state != "" && $town != "" && $gender != ""){
         $query = "INSERT INTO volunteer (full_name,email,phone,state,town,bloodType,gender,wilaya_id) VALUES ('$full_name','$email','$password','$blood','$state','$town','$gender','$state')";
        $data = mysqli_query($connection,$query);
        if($data){
            echo "data inserted sucssesfull !";
        }else{
            echo "data Not inserted !";
        }
     }

     
 }

?>


