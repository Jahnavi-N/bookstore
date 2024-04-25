

<?php
require 'connection1.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $book = $_POST["book"];
 
  $query = "INSERT INTO tb_data VALUES('', '$name', '$email', '$book')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully, take your book after 1 week.....'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
    body{
      background-color:"blue";
    }
  </style>
  <body>
    <center>
    <h4><b><i>Student's book store</i></b></h4>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Email</label>
      <input type="email" name="email" required value="">
     <label for="">Book</label>
     <input type="text" name="book" required value="">
      <br>
      <button type="submit" name="submit">Submit</button>
      <p><b>NOTE:</b>If you want any other book that is not in our website, please fill out this form.</p>
      <h3>CONTACT US</h3>
            
           
            <h5><b>DETAILS[if u have any queries pls dm us]</b></h5>
            <p style="font-size:20px;"><b><i>Phone No-+91 97018034865<br>
                                Phone No-+91 6303038060<br>
                           
                            E-mail: bookstore123@gmail.com</i></b></p>
      <p>if u have any queries pls contact those numbers</p>
    </form>
  </center>
  <div class="back">
            <a href="project.php">BACK TO HOME</a>
        </div>
    
  </body>
</html>
