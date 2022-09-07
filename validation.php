<?php
// define variable and set to empty string //
$firstnameErr=  $surnameErr=  $orderingdaterr=  $deliverydateErr=  $flavourErr= $cakesizeERR = "";
$firstname= $surname= $orderingdate= $deliverydate= $flavour= $cakesize = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = test_input($_POST["firstname"]);
    $sur_name = test_input($_POST["surname"]);
    $orderingdate = test_input($_POST["orderingdate"]);
    $deliverydate = test_input($_POST["deliverydate"]);
    $flavour = test_input($_POST["flavour"]);
    $cakesize = test_input($_POST["cakesize"]);
  }

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;    
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ////////////////first_name validation/////////////
    if(empty($_POST["firs_tname"])){
        $first_nameErr ="first name is reqired";
    }else{
     $first_name =test_input($_POST["first_name"]);
    //////  check if pregmatch ///////  
    if(!prg_match("/^[a-zA-Z-']*/",$first_name)){
        $first_nameErr = "only letters and whitespace allowed";
        
    }
    }
    ///////////for surname/////
    if(empty($_POST["surname"])){
        $sur_nameErr = "surname is required";
    }else{
        $sur_name = test_input($_POST["surname"]);
        if (!preg_match("/^[a-zA-Z-']*/",$sur_name)){
            $sur_nameErr = "only letters and whitespace allowed";

        }
    }
    if(empty($_POST["orderingdate"])){
        $ordering_dateErr = "date is required";
    }else{
       $ordering_date = test_input($POST_["orderingdate"]);
       if(!preg_match("/^[a-zA-Z-']*/",$ordering_date)){
        $ordering_dateErr = "please choose correct date";
       }

       
    }


    if(empty($_POST["deliverydate"])){
        $ordering_dateErr = "date is required";
    }else{
       $ordering_date = test_input($POST_["orderingdate"]);
       if(!preg_match("/^[a-zA-Z-']*/",$delivery_date)){
        $ordering_dateErr = "please choose correct date";
       }

       
    }



    if(empty($_POST["flavour"])){
        $ordering_dateErr = "flavour is required";
    }else{
       $ordering_date = test_input($_POST_["flavour"]);
       if(!preg_match("/^[a-zA-Z-']*/",$delivery_date)){
        $ordering_dateErr = "please choose your favourite flavor ";
       }
}



if(empty($_POST["cakesize"])){
    $ordering_dateErr = "size is required";
}else{
   $ordering_date = test_input($POST_["cakesize"]);
   if(!preg_match("/^[a-zA-Z-']*/",$delivery_date)){
    $ordering_dateErr = "please choose correct size";
   }
}
 }

?>