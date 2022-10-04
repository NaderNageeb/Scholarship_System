
<?php
     if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

                <div class="row">
                   <div class="col-lg-12">
                      <h1 class="page-header">Add New Scholarship</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                 </div> 

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Faculties:</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm"  required id="COMPANYID" name="COMPANYID">
                          <option value="">Select</option>
                          <?php 
                            $sql ="Select * From tblcompany";
                            $mydb->setQuery($sql);
                            $res  = $mydb->loadResultList();
                            foreach ($res as $row) {
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
                      <input class="form-control input-sm" type="text"  required id="OCCUPATIONTITLE" name="OCCUPATIONTITLE" placeholder="Occupation Title"   autocomplete="none"/> 
 
                      </div>
                    </div>
                  </div> 





                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "REQ_NO_EMPLOYEES">Available seats:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" type="number" min="1" max="65465465645" required id="REQ_NO_EMPLOYEES" name="REQ_NO_EMPLOYEES" placeholder="Available seats"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SALARIES">Student Salary:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" required id="SALARIES"  name="SALARIES" placeholder="Salary"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DURATION_EMPLOYEMENT">Duration of Scholarship:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" required id="DURATION_EMPLOYEMENT" name="DURATION_EMPLOYEMENT" placeholder="Duration of Scholarship"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
			  <div class="col-md-8">
			    <label class="col-md-4 control-label" for=
			    "DEGREE">Educational Degree:</label>

			    <div class="col-md-8">
			      <input name="deptid" type="hidden" value="">
			      <select  class="form-control input-sm"  name="DEGREE" 
			              required="required" autocomplete="off">
					<option value="">Select Educational Degree</option>
					<!-- <option value="High School">High School</option> -->
					<option value="Diploma">Diploma</option>
					<option value="Bachelor">Bachelor</option>
					<option value="Master">Master</option>
					<option value="PhD">PhD</option>
					</select>
			      </div>
			  </div>
			</div>

              
                        <input type="hidden" value="NON" class="form-control input-sm" required id="QUALIFICATION_WORKEXPERIENCE" name="QUALIFICATION_WORKEXPERIENCE" placeholder="Qualification/Work Experience"   autocomplete="none"></input> 
                

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "JOBDESCRIPTION">Scholarship Description:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" required id="JOBDESCRIPTION" name="JOBDESCRIPTION" placeholder="Scholarship Description"   autocomplete="none"></textarea> 
                      </div>
                    </div>
                  </div>  

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PREFEREDSEX">Prefered Sex:</label> 
                      <div class="col-md-8">
                          <select class="form-control input-sm" required id="PREFEREDSEX" name="PREFEREDSEX">
                          <option value="None">Select</option>
                           <option>Male</option>
                           <option>Female</option>
                           <option>Male/Female</option>
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
                        <input type="date" class="form-control input-sm" required id="" min="<?php echo date("Y-m-d");   ?>" name="closed_date" autocomplete="none"></input> 
                      </div>
                    </div>
                  </div>   




                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>  

                      <div class="col-md-8">
                         <button class="btn btn-primary btn-sm" required name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                      <!-- <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->
                     
                     </div>
                    </div>
                  </div> 
 

                  
          
        </form>
      
 