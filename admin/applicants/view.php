<?php 
global $mydb;
	$red_id = isset($_GET['id']) ? $_GET['id'] : '';

	$jobregistration = New JobRegistration();
	$jobreg = $jobregistration->single_jobregistration($red_id);
	 // `COMPANYID`, `JOBID`, `APPLICANTID`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `FILEID`, `PENDINGAPPLICATION`


	$applicant = new Applicants();
	$appl = $applicant->single_applicant($jobreg->APPLICANTID);
 // `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`,CONTACTNO

	$jobvacancy = New Jobs();
	$job = $jobvacancy->single_job($jobreg->JOBID);
 // `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`, `DATEPOSTED`

	$company = new Company();
	$comp = $company->single_company($jobreg->COMPANYID);
	 // `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`

	$sql = "SELECT * FROM `tbljobregistration` WHERE `REGISTRATIONID`= '$red_id'";
	$mydb->setQuery($sql);
	$attachmentfile = $mydb->loadSingleResult();


?> 
<style type="text/css">
.content-header {
	min-height: 50px;
	border-bottom: 1px solid #ddd;
	font-size: 15px;
	font-weight: bold;
}
.content-body {
	min-height: 350px;
	/*border-bottom: 1px solid #ddd;*/
}
.content-body >p {
	padding:10px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
.content-footer {
	min-height: 100px;
	border-top: 1px solid #ddd;

}
.content-footer > p {
	padding:5px;
	font-size: 15px;
	font-weight: bold; 
}
 
.content-footer textarea {
	width: 100%;
	height: 200px;
}
.content-footer  .submitbutton{  
	margin-top: 20px;
	/*padding: 0;*/

}
</style>




<?php
if(isset($_POST['approve'])){
$id = $_POST['JOBREGID'];
$applicantid = $_POST['APPLICANTID']; 
$date = date("Y-m-d");

$sql="UPDATE `tbljobregistration` SET admin_app_1=1,HVIEW=0,DATETIMEAPPROVED='{$date}' WHERE `REGISTRATIONID`='{$id}'";
$mydb->setQuery($sql);
$cur = $mydb->executeQuery();

if ($cur) {
	message("Approved Successfully.", "success");
	redirect("index.php?view=view&id=".$id); 
}else{
	message("cannot be Approved.", "error");
	redirect("index.php?view=view&id=".$id); 
}

}


if(isset($_POST['reject'])){
	$id = $_POST['JOBREGID'];
	$applicantid = $_POST['APPLICANTID']; 
	$date = date("Y-m-d");
	
	$sql="UPDATE `tbljobregistration` SET admin_app_1=2,HVIEW=0,DATETIMEAPPROVED='{$date}' WHERE `REGISTRATIONID`='{$id}'";
	$mydb->setQuery($sql);
	$cur = $mydb->executeQuery();
	
	if ($cur) {
		message("Rejected Successfully.", "error");
		redirect("index.php?view=view&id=".$id); 
	}else{
		message("Error !! cannot be Rejected.", "error");
		redirect("index.php?view=view&id=".$id); 
	}
	
	}
	



















?>


























<form action="" method="POST">
<div class="col-sm-12 content-header" >View Details</div>
<div class="col-sm-6 content-body" > 
	<p>Scholership Details</p> 
	<h3><?php echo $job->OCCUPATIONTITLE; ?></h3>
	<input type="hidden" name="JOBREGID" value="<?php echo $jobreg->REGISTRATIONID;?>">
	<input type="hidden" name="APPLICANTID" value="<?php echo $appl->APPLICANTID;?>">

	<div class="col-sm-6">
		<ul>
            <li><i class="fp-ht-bed"></i>Available Seats : <?php echo $job->REQ_NO_EMPLOYEES; ?></li>
            <li><i class="fp-ht-food"></i>Salary : <?php echo $job->SALARIES;  ?></li>
            <li><i class="fa fa-sun-"></i>Duration of Scholarship : <?php echo $job->DURATION_EMPLOYEMENT; ?></li>
        </ul>
	</div> 
	<div class="col-sm-6">
		<ul> 
            <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $job->PREFEREDSEX; ?></li>
            <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $job->SECTOR_VACANCY; ?></li>
        </ul>
	</div>
	<div class="col-sm-12">
		<p>Scholarship Description : </p>   
		<p style="margin-left: 15px;"><?php echo $job->JOBDESCRIPTION;?></p>
	</div>
	
	<div class="col-sm-12"> 
		<p>Faculty : </p>
		<p style="margin-left: 15px;"><?php echo $comp->COMPANYNAME ; ?></p> 
		<!-- <p style="margin-left: 15px;">@ <?php //echo $comp->COMPANYADDRESS ; ?></p> -->
	</div>
</div>
<div class="col-sm-6 content-body" >
	<p>Student Infomation</p> 
	<h3> <?php echo $appl->FNAME . ' ' . $appl->MNAME . ' ' .$appl->LNAME;?></h3>
	<ul> 
		<li>Address : <?php echo $appl->ADDRESS; ?></li>
		<li>Contact No. : <?php echo $appl->CONTACTNO;?></li>
		<li>Email Address. : <?php echo $appl->EMAILADDRESS;?></li>
		<li>Sex: <?php echo $appl->SEX;?></li>
		<!-- <li>Age : <?php //echo $appl->AGE;?></li>  -->

	</ul>
	<div class="col-sm-12"> 
		<p>Educational Attainment : </p>
		<p style="margin-left: 15px;"><?php echo $appl->DEGREE;?></p>
	</div>


</div> 
<div class="col-sm-12 content-footer">
<p><i class="fa fa-paperclip"></i>  Attachment Files</p>
	<div class="col-sm-12 slider">
		 <h3>Download Resume <a href="../../photos/<?php echo $attachmentfile->FILE_NAME_LOCATION;    ?>">Here</a></h3>
	</div> 

	<!-- <div class="col-sm-12">
		<p>Feedback</p>
		<textarea class="input-group" readonly required name="REMARKS"><?php echo isset($jobreg->REMARKS) ? $jobreg->REMARKS : ""; ?></textarea>
	</div> -->
	<div class="col-sm-12  submitbutton "> 
		<button type="submit" name="approve" class="btn btn-success">Approve</button>
		<button type="submit" name="reject" class="btn btn-danger">Reject</button>
	</div> 
</div>
</form>