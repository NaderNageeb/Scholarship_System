<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 

<?php

if(isset($_GET['id'])){
	$id = 	$_GET['id'];

global $conn;


$sqli = "DELETE FROM `tbljobregistration` where REGISTRATIONID =$id ";
if($query = mysqli_query($conn,$sqli)){

	 message("Deleted!","success");
	 redirect('index.php');


}else{
	message("Deleted!","Faield");
}
}









?>










	<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header">List of Student's   </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
                
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
									<th>Student</th>
									<th>Degree</th>
									<th>Faculty:</th>
									<th>Applied Date</th> 
									<th>Status</th>
									<th width="14%" >Action</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery("SELECT * FROM `tblcompany` c  , `tbljobregistration` j, `tbljob` j2, `tblapplicants` a WHERE c.`COMPANYID`=j.`COMPANYID` AND  j.`JOBID`=j2.`JOBID` AND j.`APPLICANTID`=a.`APPLICANTID` ");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 



										
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>'. $result->APPLICANT.'</td>';
							  		echo '<td>' . $result->Job_DEGREE.'</a></td>';
							  		echo '<td>' . $result->COMPANYNAME.'</a></td>'; 
							  		echo '<td>'. $result->REGISTRATIONDATE.'</td>';
									?>
							  		<td><?php if($result->admin_app_1 == 0)echo "Pending"; if($result->admin_app_1 == 1)echo "Approved"; if($result->admin_app_1 == 2)echo "<div class='btn btn-danger btn-xs'>Rejected</div>";  if($result->admin_app_1 == 1 )echo ""; ?>  </td>
									<?php  
					  				echo '<td align="center" >    
					  		             <a title="View" href="index.php?view=view&id='.$result->REGISTRATIONID.'"  class="btn btn-info btn-xs" target="_blank">
					  		             <span class="fa fa-info fw-fa"></span> View</a> 
					  		             <a title="Remove" href="index.php?view=delete&id='.$result->REGISTRATIONID.'"  class="btn btn-danger btn-xs  ">
					  		             <span class="fa fa-trash-o fw-fa"></span> Remove</a> 
					  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>
 
							 
							</form>
       
                 
 