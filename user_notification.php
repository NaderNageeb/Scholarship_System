<?php  

if (isset($_SESSION['user_id'])) {
	$user_id =$_SESSION['user_id'];
    $conn = mysqli_connect("localhost", "root", "", "africa");
  $sql = "SELECT COUNT(REGISTRATIONID) As c from `tbljobregistration` where `APPLICANTID` = $user_id and `admin_app_1` !=0  and `HVIEW` = 1 ";
    $query = mysqli_query($conn, $sql);
    $values = mysqli_fetch_assoc($query);
   echo $num_rows = $values['c'];

     
//      if($num_rows==0)echo ""; else echo "$num_rows <script>alert('You Have $num_rows Notification');   </script>  "  ;

 }
	?>
