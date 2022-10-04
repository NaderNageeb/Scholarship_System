<?php 
	  if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     } 
?>
	<div class="row">
       	 <div class="col-lg-12">
            <h1 class="page-header">List of Scholarships  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add Job Vacancy</a>  </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  	
			     <div class="table-responsive">					
				<table id="dash-table" class="table table-striped table-bordered table-hover"  style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>

				  		<!-- <th>No.</th> -->
				  		<th>Faculties:</th> 
				  		<!-- <th>Occupation Title</th>  -->
				  		<th>Available seats</th> 
				  		<th>Students Salaries</th> 
				  		<th>Duration of  Scholarship:</th> 
				  		<!-- <th>Qualification/Work experience</th>  -->
				  		<th>Job Description</th> 
				  		<th>Prefered Sex</th>  
				  		<th>Closed Date</th> 
				  		 <th width="10%" align="center">Action</th>
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  	 // `COMPANYID`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`
				  		$mydb->setQuery("SELECT * FROM `tbljob` j, `tblcompany` c WHERE j.COMPANYID=c.COMPANYID");
				  		$cur = $mydb->loadResultList(); 
						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		// echo '<td>
				  		//      <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CATEGORYID. '"/>
				  		// 		' . $result->CATEGORIES.'</a></td>';
				  			echo '<td>' . $result->COMPANYNAME.'</td>';
				  			//echo '<td>' . $result->OCCUPATIONTITLE.'</td>';
				  			echo '<td>' . $result->REQ_NO_EMPLOYEES.'</td>';
				  			echo '<td>' . $result->SALARIES.'</td>';
				  			echo '<td>' . $result->DURATION_EMPLOYEMENT.'</td>';
				  			//echo '<td>' . $result->QUALIFICATION_WORKEXPERIENCE.'</td>';
				  			echo '<td>' . $result->JOBDESCRIPTION.'</td>';
				  			echo '<td>' . $result->PREFEREDSEX.'</td>';
				  	
							?>
				  			<td width="10%"> 
							<?php
							$job_id = $result->JOBID;
							$today = date("Y-m-d");  
							$end_date = $result->end_date;

							if($today >= $end_date){
							echo '<div style = "color:red;">'.  $end_date  .'</div>';  
							$sqli_2 = "UPDATE `tbljob` SET `JOBSTATUS` = 'Closed' where `JOBID` = $job_id  ";
                            $query_2 = mysqli_query($conn,$sqli_2);
						}

						if($today <= $end_date){
						   echo '<div style = "color:green;">'.  $end_date  .'</div>'; 
					       $sqli_3 = "UPDATE `tbljob` SET `JOBSTATUS` = 'Open' where `JOBID` = $job_id  ";
                           $query_3 = mysqli_query($conn,$sqli_3); 
						}		
												
							?>
							</td>
							<?php
				  		echo '<td align="center"><a title="Edit" href="index.php?view=edit&id='.$result->JOBID.'" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
				  		     <a title="Delete" href="controller.php?action=delete&id='.$result->JOBID.'" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>';
				  		// echo '<td></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
						<div class="btn-group">
				 <!--  <a href="index.php?view=add" class="btn btn-default">New</a> -->
					<?php
					if($_SESSION['ADMIN_ROLE']=='Administrator'){
					// echo '<button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button'
					; }?>
				</div>
			
			
				</form>
	
 <div class="table-responsive">	 