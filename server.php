<?php 

$severname = "localhost";
$username = "root";
$password = "";
$db_name = "my_database";

$conn = mysqli_connect($severname, $username, $password, $db_name);
  
  if (!$conn){
    die("Connection to DB failed!" .mysqli_connect_error());
  }

  function insert_data(){
    global $conn;
      if(isset($_POST['name']) && ($_POST['email']) && ($_POST['password'])){
  
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
  
          $insert = mysqli_query($conn,"INSERT INTO users(name,email,password)VALUES('$name','$email','$password')");
            
          if($insert){
            echo "<script>alert('Register Successfully');window.location.href = 'index.php';</script>";
            exit;
          }else{
            echo "<script>alert('Register Failed');window.location.href = '';</script>";
          }
        }
      }
  }

    function select_data(){
      global $conn;
        if(isset($_POST['email'])){
          $email=$_POST['email'];
          $password=$_POST['password'];

          $select = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password' limit 1");
      
          if(mysqli_num_rows($select) == 1){
            echo "<script>alert('Login Success!');window.location.href = 'homepage.php';</script>";
            exit;
          }
          else{
            echo "<script>alert('Invalid login, please try again');window.location.href = '';</script>";
          }
        }
    }  
?>