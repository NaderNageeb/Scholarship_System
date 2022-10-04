<?php
    if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


  $jobid = $_GET['id'];
  $job = New Jobs();
  $res = $job->single_job($jobid);

?> 
<form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

  <div class="row">
                   <div class="col-lg-12">
                      <h1 class="page-header">Update Job Scholarship</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                 </div> 

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Faculties:</label>

                      <div class="col-md-8">
                        <input type="hidden" name="JOBID" value="<?php echo $res->JOBID;?>">
                        <select class="form-control input-sm" id="COMPANYID" name="COMPANYID">
                          <option value="None">Select</option>
                          <?php 
                            $sql ="Select * From tblcompany WHERE COMPANYID=".$res->COMPANYID;
                            $mydb->setQuery($sql);
                            $result  = $mydb->loadResultList();
                            foreach ($result as $row) {
                              # code...
                              echo '<option SELECTED value='.$row->COMPANYID.'>'.$row->COMPANYNAME.'</option>';
                            }
                            $sql ="Select * From tblcompany WHERE COMPANYID!=".$res->COMPANYID;
                            $mydb->setQuery($sql);
                            $result  = $mydb->loadResultList();
                            foreach ($result as $row) {
                              # code...
                              echo '<option value='.$row->COMPANYID.'>'.$row->COMPANYNAME.'</option>';
                            }

                          ?>
                        </select>
                      </div>
                    </div>
                  </div>  
                  <input type="hidden" class="form-control input-sm" value="29" required id="CATEGORY" name="CATEGORY">

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "REQ_NO_EMPLOYEES">Scholership Name:</label> 
                      <div class="col-md-8">
                      <input class="form-control input-sm" type="text" value="<?php echo $res->OCCUPATIONTITLE ?>"  required id="OCCUPATIONTITLE" name="OCCUPATIONTITLE" placeholder="Occupation Title"   autocomplete="none"/> 
 
                      </div>
                    </div>
                  </div> 



                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "REQ_NO_EMPLOYEES">Available seats:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="REQ_NO_EMPLOYEES" name="REQ_NO_EMPLOYEES" placeholder="Required no. of Employees"   autocomplete="none" value="<?php echo $res->REQ_NO_EMPLOYEES ?>"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SALARIES">Student Salary:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="SALARIES" name="SALARIES" placeholder="Salary"   autocomplete="none" value="<?php echo $res->SALARIES; ?>"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DURATION_EMPLOYEMENT">Duration of Scholarship:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="DURATION_EMPLOYEMENT" name="DURATION_EMPLOYEMENT" placeholder="Duration of Employment"   autocomplete="none" value="<?php echo $res->DURATION_EMPLOYEMENT ?>"/> 
                      </div>
                    </div>
                  </div>

            
                  <input type="hidden" value="NON" class="form-control input-sm" required id="QUALIFICATION_WORKEXPERIENCE" name="QUALIFICATION_WORKEXPERIENCE" placeholder="Qualification/Work Experience"   autocomplete="none"></input>


                  <div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "DEGREE">Educational Attainment:</label>
			    <div class="col-md-8">
			      <input name="deptid" type="hidden" value="">
			      <select  class="form-control input-sm" id="DEGREE" name="DEGREE" 
			             onkeyup="javascript:capitalize(this.id, this.value);" required="required" autocomplete="off">
					<option value="<?php echo $res->Job_DEGREE;   ?>" SELECTED ><?php echo $res->Job_DEGREE;   ?></option>
					<option value="High School">High School</option>
					<option value="Diploma">Diploma</option>
					<option value="Bachelor">Bachelor</option>
					<option value="Master">Master</option>
					<option value="PhD">PhD</option>
					</select>
			      </div>
			  </div>
			</div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "JOBDESCRIPTION">Job Description:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="JOBDESCRIPTION" name="JOBDESCRIPTION" placeholder="Job Description"   autocomplete="none"><?php echo $res->JOBDESCRIPTION ?></textarea> 
                      </div>
                    </div>
                  </div>  

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PREFEREDSEX">Prefered Sex:</label> 
                      <div class="col-md-8">
                          <select class="form-control input-sm" id="PREFEREDSEX" name="PREFEREDSEX">
                          <option value="None">Select</option>
                           <option <?php echo ($res->PREFEREDSEX=='Male') ? "SELECTED" :"" ?>>Male</option>
                           <option <?php echo ($res->PREFEREDSEX=='Female') ? "SELECTED" :"" ?>>Female</option>
                           <option <?php echo ($res->PREFEREDSEX=='Male/Female') ? "SELECTED" :"" ?>>Male/Female</option>
                        </select>
                      </div>
                    </div>
                  </div>  

                  <input type="hidden"  value="non" class="form-control input-sm" required id="SECTOR_VACANCY" name="SECTOR_VACANCY" placeholder="Sector of Vacancy"   autocomplete="none"></input>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTOR_VACANCY">Closed Date</label> 
                      <div class="col-md-8">
                        <input type="date" value="<?php echo $res->end_date;  ?>" class="form-control input-sm" required id="" min="<?php echo date("2010-1-1");   ?>" name="closed_date" autocomplete="none"></input> 
                      </div>
                    </div>
                  </div>   
 


 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>  

                      <div class="col-md-8">
                         <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                      <!-- <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->
                     
                     </div>
                    </div>
                  </div> 



</form>
       