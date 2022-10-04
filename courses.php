<?php include('header.php');   ?>


    <!-- offset search area start -->
    <!-- <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Sarch here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> -->
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Our</span> Scholarships</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- course area start -->
    <div class="course-area  pt--120 pb--70">
        <div class="container">
            <div class="row">  
                <!-- course single start -->



                <?php
            $get_scholerships = Get_scholerships();
 while ($row =  mysqli_fetch_array($get_scholerships)) {
    # code...
            ?>
                <div class="col-lg-4 col-md-6">

 

              <div class="card mb-5">
                    <div class="course-thumb">

                    </div>
                    <div class="card-body  p-25"> 
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                            <img src="assets/images/teacher/201614.png" height="50px" width="50px" alt="image"> 

                            <?php  if(isset($_SESSION['user_id'])){             ?>
                                <h4><a href="course-details.php?job_id=<?php echo $row['JOBID'];      ?>"><?php   echo $row['OCCUPATIONTITLE'];             ?></a></h4>
                                <?php }else{ ?>
                                  <h4><a href="#" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('You must be logged in to be able to apply')"><?php   echo $row['OCCUPATIONTITLE']; ?></a></h4>
                                  <?php } ?>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div> 
                            <a href="course-details.php"> </a>
                         
                           
                        </div>
                        <p><?php   echo $row['JOBDESCRIPTION']; ?></p> 
                        <ul class="course-meta-details list-inline  w-100">
                            <!-- <li> 
                             <p><?php   //echo $row['DURATION_EMPLOYEMENT']; ?></p>
                             <span></span>
                            </li> -->
                            <li>
                             <p>Available seats:</p>
                              <span><?php   echo $row['REQ_NO_EMPLOYEES']; ?></span>
                            </li> 
                            <li>
                             <p>Duration</p>
                              <span><?php   echo $row['DURATION_EMPLOYEMENT']; ?></span>
                            </li>      
                        </ul>  
                 </div>  
                </div><!-- card -->

                </div>
                <?php } ?>
<!-- course single end --> 

            </div>
        </div>
    </div>

    <?php include("footer.php")  ?>
