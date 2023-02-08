<?php 
function validateUser($user){

    
    $errors=array();

    if(empty($user['username'])){
        array_push($errors,'Username is required');
    }
    
    if(empty($user['email'])){
        array_push($errors,'Email is required');
    }
    if(empty($user['password'])){
        array_push($errors,'Password is required');
    }
    if(($user['passwordConf']!==$_POST['password'])){
        array_push($errors,'Password do not match');
    }
    $existingUser=selectOne('users',['email'=>$user['email']]);
if(isset($existingUser)) {
    if(isset($user['edit-users'])&& $existingUser['id']!=$user['id']){

        array_push($errors,'email is existing');
    }
    if(isset($user['create-admin'])){
        
    array_push($errors,'Email already exist go to sighn in');

    }

}

    return $errors;

}

function validateLogin($user){

    
    $errors=array();

   
    
    if(empty($user['username'])){
        array_push($errors,'wrong password');
    }
    if(empty($user['password'])){
        array_push($errors,'wrong password');
    }
    return $errors;

}




?>