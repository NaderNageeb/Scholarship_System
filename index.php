<?php include('header.php');   ?>


    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Sarch here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="body_overlay"></div>

    <div class="hero-area has-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="hero-content">
                        <h3>SCHOLARSHIPS</h3>
                        <h1 class="mb-5"><span class="primary-color">Build your Successful</span><b class="line-break"></b>International University of Africa </h1>
                        <p class="text-white-50">Find Your Preferred scholarships </p>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="course-area  ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-title-style2 black-title title-tb text-center">
                        <span>build your career</span>
                        <h2 class="primary-color">Featured scholarships</h2>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class="commn-carousel owl-carousel card-deck"> 

            <?php
            $get_scholerships = Get_scholerships();
 while ($row =  mysqli_fetch_array($get_scholerships)) {
    # code...
            ?>

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
                         
                            <!-- <a href="course-details.php"> </a> -->
                         
                           
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
                </div>  
 <?php
}
 ?>



            </div> 
        </div>
    </div>


    <!-- take toure area end -->

    <!-- course area start -->
    <div class="teacher-area pb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-title-style2 black-title title-tb text-center">
                        <span>Learn from the best</span>
                        <h2 class="primary-color">Our teachers</h2>
                    </div>
                </div>
            </div>
            <div class="commn-carousel owl-carousel card-deck">   
              <div class="card mb-5"> 
                <img src="assets/images/teacher/teacher-member1.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"><a href="teacher-details.php">Patrick Garner Dony</a></h4>
                  <span class="primary-color d-block mb-4">Economist</span>
                  <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/teacher/teacher-member2.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"><a href="teacher-details.php">Cameron Brown</a></h4>
                  <span class="primary-color  d-block mb-4">Financier</span>
                  <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/teacher/teacher-member3.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"><a href="teacher-details.php">Joseph Mack Monika</a></h4>
                  <span class="primary-color d-block mb-4">Languages</span>
                  <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->  
              <div class="card mb-5"> 
                <img src="assets/images/teacher/teacher-member4.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"><a href="teacher-details.php">Patrick Garner Dony</a></h4>
                  <span class="primary-color d-block mb-4">Economist</span>
                  <p class="card-text">We’re a philosophical bunch here at School site and we have thought long and hard about.</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->         
            </div>
        </div>
    </div>

    

<?php include("footer.php");  ?>