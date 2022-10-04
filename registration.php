<?php include('function.php');    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=email],input[type=password],input[type=number],input[type=date],input[type=select], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: green;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: green;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 100px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>




<?php
if(isset($_POST['register'])){

  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $add = $_POST['add'];
  $gender = $_POST['gender'];
  $birth_date = $_POST['birth_date'];
  $civil_status = $_POST['civil_status'];
  $phone  = $_POST['phone'];
  $email  = $_POST['email'];
  $degree = $_POST['degree'];
  // $user_name = $_POST['user_name'];
  $pass  = $_POST['pass'];
  

  Registration($fname,$mname,$lname,$add,$gender,$birth_date,$civil_status,$degree,$phone,$email,$pass);



}
















?>







<h2> <a href="index.php">Home</a> </h2>
<!-- <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p> -->

<div class="container">
  <form action="registration.php" method="POST">
    <div class="row">
      <div class="col-25">

        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname"  pattern="[a-zA-Z'-'\s]*"  required name="fname" placeholder="Your first Name..">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
    <label for="fname">Middel Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname"  pattern="[a-zA-Z'-'\s]*"  required name="mname" placeholder="Your middel Name..">
      </div>
    </div>


<div class="row">
      <div class="col-25">
    <label for="fname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname"  pattern="[a-zA-Z'-'\s]*"  required name="lname" placeholder="Your last Name..">
      </div>
    </div>

    

 

    <div class="row">
      <div class="col-25">
        <label for="fname">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" required name="add" placeholder="Your Address">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Gender">Gender</label>
      </div>
      <div class="col-75">
        <select id="gender" required name="gender">
          <option value="">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>





    <div class="row">
      <div class="col-25">
        <label for="fname">Birth Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="address" max="2005-1-1" min="1980-1-1" required name="birth_date" placeholder="Your Birth Date">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Gender">Civil Status:</label>
      </div>
      <div class="col-75">
        <select id="gender" required name="civil_status">
          <option value="">Select Civil Status</option>
          <option value="Single">Single</option>
			          <option value="Married">Married</option>
                <option value="Widow" >Widow</option>
        </select>
      </div>
    </div>






    <div class="row">
      <div class="col-25">
        <label for="lname">Phone</label>
      </div>
      <div class="col-75">
        <input type="number" id="lname" name="phone" required placeholder="Your Phone Number">
      </div>
    </div>


     <div class="row">
      <div class="col-25">
        <label for="fname">Email </label>
      </div>
      <div class="col-75">
        <input type="email" id="email" required name="email" placeholder="Your Email">
      </div>
    </div> 


    <div class="row">
      <div class="col-25">
        <label for="Gender">Educational Attainment:</label>
      </div>
      <div class="col-75">
        <select id="gender" required name="degree">
        <option value="">Select Educational Attainment</option>
					<option value="High School">High School</option>
					<option value="Diploma">Diploma</option>
					<option value="Bachelor">Bachelor</option>
					<option value="Master">Master</option>
					<option value="PhD">PhD</option>
        </select>
      </div>
    </div>






    <!-- <div class="row">
      <div class="col-25">
        <label for="fname">Username </label>
      </div>
      <div class="col-75">
        <input type="text" id="email" required name="user_name" placeholder="Your User Name">
      </div>
    </div>  -->





         <div class="row">
      <div class="col-25">
        <label for="fname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="fname" required name="pass" placeholder="Your Password">
      </div>
    </div> 
    <br>

<center>
    <div class="row">

      <input type="submit" style="background:green" name="register" value="Register">
      
    </div>
    </center>
    <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
  </form>
</div>

</body>
</html>
