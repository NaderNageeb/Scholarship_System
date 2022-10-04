<?php include('header.php');   ?>

<?php

if(!isset($_GET['job_id'])){

    echo "<script>
  window.location = 'index.php';
    </script>";

}else{

$job_id = $_GET['job_id'];

$get_detils = Get_scholership_detils($job_id);

}


?>
<?php

if(isset($_POST['applay'])){

//   move_uploaded_file($_FILES['cv']['tmp_name'], "./photos/".$_FILES['cv']['name']);
   
  $user_name = $_POST['user_name'];
  $job_id = $_POST['job_id'];
  $user_id = $_POST['user_id'];
  $company_id = $_POST['COMPANYID'];
  $date = date("Y-m-d");

//     $_FILES['cv']['name'];

$query_check = "SELECT * FROM `tbljobregistration` where `COMPANYID` = '$company_id' and `JOBID`='$job_id' and `APPLICANTID`='$user_id' and `admin_approve` = 0 ";
if($query_check = mysqli_query($conn,$query_check))
If(mysqli_num_rows($query_check))
{
    echo "<script>alert('You Already Applied For This Scholarship');</script>";
}else{
$query = "insert into tbljobregistration(`COMPANYID`,`JOBID`,`APPLICANTID`,`APPLICANT`,`REGISTRATIONDATE`,`FILE_NAME_LOCATION`) 
value ('$company_id','$job_id','$user_id','$user_name','{$date}','{$_FILES['cv']['name']}')";
if(mysqli_query($conn,$query)){
     
    move_uploaded_file($_FILES['cv']['tmp_name'], "./photos/".$_FILES['cv']['name']);
     echo "<script>alert('Applied Successfully');window.location = 'courses.php';</script>";
  
   }else{
       echo "<script>alert('Error !!! Applied Faild');window.location = 'course-details.php?job_id= $job_id';</script>";
  }
}




}



















?>







    <!-- header area end -->
    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Sarch here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Single</span> Course DeatilS</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- course area start -->
    <div class="course-area ptb--120">
        <div class="container">
            <div class="row">
                <!-- course details start -->
                <div class="col-lg-8 col-md-8">
                    <div class="course-details">
                        <div class="cs-thumb mb-5">
                        <!-- <img src="assets/images/course/course-details.jpg" alt="image"> -->
                            
                        <img src="assets/images/course/course-details.jpg" alt="image">
                            <!-- assets/images/teacher/201614.png -->
                            <span class="cs-price">For <?php echo $get_detils['SALARIES']; ?></span>
                            <div class="csd-hv-info has-color align-items-center">
                                <div class="course-dt-info">
                                    <ul class="course-meta-details list-inline  w-100">
                                        <li> 
                                         <p>Faculty Of</p>
                                        

                                         <span><?php echo $get_detils['COMPANYNAME']; ?></span>
                                        </li>
                                        <li>
                                         <p>Available Seats:</p>
                                          <span><?php echo $get_detils['REQ_NO_EMPLOYEES']; ?></span>
                                        </li> 
                                        <li>
                                         <p>Duration</p>
                                          <span><?php echo $get_detils['DURATION_EMPLOYEMENT']; ?></span>
                                        </li>      
                                    </ul> 
                                </div>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cs-content"> 
                            <h3 class="mb-4"><a href="#"> <?php  echo $get_detils['OCCUPATIONTITLE'];        ?> </a></h3> 
                            <p><?php   echo $get_detils['JOBDESCRIPTION']; ?></p>
                            <div class="cs-post-share">
                                <div class="row align-items-center">
                                
                                </div>
                            </div>
                            <!-- post autohr info -->
                      
                        </div>
                    </div>
                    <!-- comments area end -->

                    <!-- comments area end -->
                    <!-- leave comment area start -->
                    <div class="leave-comment-area">
                        <h4 class="comment-title">Uploade Cover letter and previous certificates</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" required="required" name="cv" placeholder="Uploade Your File Here">
                                </div>
                                <input type="hidden" name="job_id" value="<?php echo $get_detils['JOBID']; ?>">
                                <input type="hidden" name="COMPANYID" value="<?php echo $get_detils['COMPANYID']; ?>">
                                <?php  $user_id = $_SESSION['user_id'];   ?>
                                <input type="hidden" name="user_id"  value = "<?php echo $user_id; ?>">
                                <?php  $user_name = $_SESSION['user_name'];   ?>
                                <input type="hidden" name="user_name" value = "<?php echo $user_name; ?>">
   
                                <br>
                                <br>
                            <button class="btn btn-primary" name="applay" type="submit">Submit</button>
                        </form>
                    </div>
                    <!-- leave comment area end -->
                </div>
                <!-- course details end -->
                <!-- sidebar start -->







          
            </div>
        </div>
    </div>

<br>
<br>
<br>
<br>
<br>
    <?php include("footer.php");  ?>
