<?php
session_start();
///LocalConnectionz//////
$conn = mysqli_connect("localhost","root","","africa");

mysqli_set_charset($conn,'UTF8');
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET CHARACTER SET utf8');
if($conn){
  //  echo  "connection done";
  
}
else
{
	echo "Error,".mysqli_connect_error($conn);
	die;
}


function Get_scholerships(){

    global $conn;

$sql = "SELECT * FROM `tbljob`";

    if($query = mysqli_query($conn,$sql))
	{
	return $query;	
	}
else
	{
	echo $sql;die;
	}

}



function Login($email, $pass)
{
    global $conn;

     $sql = "SELECT * FROM `tblapplicants` where `EMAILADDRESS` = '$email' and `PASS` = '$pass'";
    if ($query = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($query)) {
            $row = mysqli_fetch_array($query);

            $_SESSION['user_id'] = $row['APPLICANTID'];
            $_SESSION['user_name'] = $row['FNAME'] .' '. $row['MNAME'] ;
			$user_name = $row['FNAME'] .' '. $row['MNAME'] ;
            echo "<script>
			alert('Welcome $user_name '); window.location = 'index.php';
            </script>";

        } else {
            echo "<script>alert('Wrong User Name Or Password');window.location = 'index.php';</script>";
            }
        }
        
    }


function Registration($fname,$mname,$lname,$add,$gender,$birth_date,$civil_status,$degree,$phone,$email,$pass){
	
	global $conn;

	$query_check = "SELECT * FROM tblapplicants where EMAILADDRESS = '$email'  ";
	if($query_check = mysqli_query($conn,$query_check))
	If(mysqli_num_rows($query_check))
	{
	echo "<script>alert('You Already Have Account');window.location = 'registration.php';</script>";
	}else{
	 $query = "insert into tblapplicants(FNAME,MNAME,LNAME,ADDRESS,SEX,CIVILSTATUS,BIRTHDATE,USERNAME,PASS,EMAILADDRESS,CONTACTNO,DEGREE)
	 values ('$fname','$mname','$lname','$add','$gender','$civil_status','{$birth_date}','$email','$pass','$email','$phone','$degree')";
	 if(mysqli_query($conn,$query)){
		 
		 echo "<script>alert('Registration Successfully');window.location = 'index.php';</script>";
	 }else{
		  echo "<script>alert('Registration Faild');window.location = 'registration.php';</script>";
	 }
	}

}



function Get_scholership_detils($job_id){
	global $conn;
 $sql = "SELECT * FROM `tbljob`j , `tblcompany` c where j.COMPANYID = c.COMPANYID and j.JOBID = '$job_id' ";
	if($query = mysqli_query($conn,$sql))
	{  
	$res  = mysqli_fetch_array($query);
	return $res;	
	}
else
	{
	echo $sql;die;
	}
}


function My_scholership($user_id){
	global $conn;
	$sql = "SELECT * FROM  `tbljobregistration` r,`tbljob`j , `tblcompany`c , `tblapplicants`a where r.JOBID = j.JOBID and r.APPLICANTID = a.APPLICANTID and r.COMPANYID = c.COMPANYID  and j.COMPANYID = c.COMPANYID and r.APPLICANTID = '$user_id' ";
	   if($query = mysqli_query($conn,$sql))
	   {  
	   return $query;	
	   }
   else
	   {
	   echo $sql;die;
	   }

}


function Get_view($reg_id){
	global $conn;

	$sqli = "UPDATE tbljobregistration SET 	HVIEW = 0  where REGISTRATIONID = $reg_id";
	$query_1 = mysqli_query($conn,$sqli);

	 $sql = "SELECT * FROM  `tbljobregistration` r,`tbljob`j , `tblcompany`c , `tblapplicants`a 
	where r.JOBID = j.JOBID 
	and r.APPLICANTID = a.APPLICANTID 
	and r.COMPANYID = c.COMPANYID 
	and j.COMPANYID = c.COMPANYID 
	and r.REGISTRATIONID = $reg_id ";
	
	   if($query = mysqli_query($conn,$sql))
	   {  
	   $res  = mysqli_fetch_array($query);
	   return $res;	
	   }
   else
	   {
	   echo $sql;die;
	   }
	
}

















































































































































?>