<?php 


// initializing variables
$password_1="";
$password_2="";
$email    = "";
$errors = array(); 

// connect to the database
include ('includes/dbconnect.php');

// REGISTER USER
if (isset($_POST['reg_user']))
 {
$name=$_POST['name'];
$reg=$_POST['reg'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$course=$_POST['course'];
$email=$_POST['email'];



      // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Confirm password"); }
  if (empty($course)) { array_push($errors, "course required"); }
   if (empty($reg)) { array_push($errors, "Reg No required"); }


  if ($password_1 != $password_2)
   {
  array_push($errors, "The two passwords do not match");
  }

// first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE  RegNo='$reg'  LIMIT 1";
  $statement=$db->prepare($user_check_query);
  $statement->execute();
  $user = $statement->fetchAll();
  $output='';
foreach ($user as $row ) 
{
      $reg = $row ['RegNo'];

    if ($row['RegNo'] === $reg) 
    {
      array_push($errors, "Registration number already exists");
    }

}
    if (count($errors) == 0) 
  {
    $password_1= md5($password_1);//encrypt the password before saving in the database

// Finally, register user if there are no errors in the form
  
  $query = "INSERT INTO user (userName, email, Password,RegNo,Course) 
          VALUES('$name', '$email', '$password_1','$reg','$course')";
    $statement=$db->prepare($query);
    $statement->execute();
    $results=$statement->fetchAll();    
      
    $_SESSION['username'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: log.php');
  

}
  } 
  



//LOG IN 

		if (isset($_POST['login_user'])) {
  $reg = $_POST['reg'];
  $password =  $_POST['password'];

  if (empty($reg)) {
    array_push($errors, "Registration number is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user WHERE RegNo='$reg' AND Password='$password'";
    $statement=$db->prepare($query);
    $statement->execute();
    $results =$statement-> fetchAll();
    foreach ($results as $row )    
    {
      $_SESSION['username'] = $reg;
      $_SESSION['success'] = "Successfully logged in";
      header('location: index.php');
    }
   
    {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
















 ?>