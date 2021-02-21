<?php include 'include/session.php'; ?>
<?php include 'include/header.php'; ?>

<?php 
    if($userlevel=="Employee"){
    echo "<body class='hold-transition skin-green sidebar-mini'>";
    }elseif($userlevel=="Super Admin"){
    echo "<body class='hold-transition skin-red sidebar-mini'>";
    }elseif($userlevel=="HR Manager"){
    echo "<body class='hold-transition skin-yellow sidebar-mini'>";
    }else{
    echo "<body class='hold-transition skin-purple sidebar-mini'>";
    }
?>

<div class="wrapper">
	<?php include 'include/navbar.php'; ?>
  	<?php include 'include/menubar.php'; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Personal Data Sheet
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee Information</a></li>
        <li class="active">Edit profile</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">

      <div class="row">   
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="edit_employee_page1.php" >PAGE1</a></li>
              <li class="active"><a href="edit_employee_page2.php">PAGE2</a></li>
              <li><a href="edit_employee_page3.php ">PAGE3</a></li>
              <li><a href="edit_employee_page4.php">PAGE4</a></li>
              <!-- <li><a href="#pds" data-toggle="tab">GENERATED PDS</a></li> -->
            </ul>
            <div class="tab-content">
             
              <div class="active tab-pane" id="page2">

                <h3 class="box-title">IV. Civil Service Eligibility</h3>

                <div class="box-body breadcrumb">             
                       <?php include ('modal/modal_add_civil_service.php') ?>
                        
                </div>


                <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example6" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Career Service/ RA 1080(Board/Bar) <br>Under Special Laws/ CES/ CSEE</th>                  
                                        <th>Rating</th>
                                        <th>Date Examination / Conferment</th>
                                        <th>Place of Examination / Conferment</th>
                                        <th>License Number</th>
                                        <th>Date Release</th>                                        
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                    

                                    <?php
                                      $civil_result = mysqli_query($mysqli, "SELECT * FROM  tbl_civil_service WHERE emp_id = '$id_session' order by date_release DESC "); 
                                      while ($civil_row= mysqli_fetch_array ($civil_result) ){
                                      $civil_id=$civil_row['civil_id'];
                                      
                                      ?>
                        
                                     <tr>
                                        <td><?php echo $civil_row['career_service']; ?></td>               
                                        <td><?php echo $civil_row['rating']; ?></td>
                                        <td><?php echo date("M d, Y ",strtotime($civil_row['date_exam'])); ?></td>
                                        <td><?php echo $civil_row['place_exam']; ?></td>                 
                                        <td><?php echo $civil_row['license_num']; ?></td>
                                        <td><?php echo date("M d, Y ",strtotime($civil_row['date_release'])); ?></td> 

                                                                                        
                                        <td>
                                           
                                            <a href="edit_civil_service.php<?php echo '?civil_id='.$civil_id; ?>" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_civil_service<?php echo $civil_row['civil_id'];?>"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
                                           <?php include('modal/modal_delete.php'); ?>
                                        </td>
                                      </tr>
                                          <?php } ?>
                                      </tfoot>
                                    </table>
                                </div>                                                                                 
                              </div>
                        </div>         
                      </div>

                     <hr>
                
                      <h3 class="box-title">V. Work Experience <i>(include private employment. Start from your current work)</i></h3>               

                <div class="box-body breadcrumb"> 
                    <?php include ('modal/modal_add_work_experience.php') ?>     

                </div>


                <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example2" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th colspan="2">Inclusive Dates</th>                  
                                        <th>Position Title</th>
                                        <th>Department / Agency / Office / Company</th>
                                        <th>Monthly Salary</th>
                                        <th>Salary Grade</th>
                                        <th>Status</th>
                                        <th>Gov'y Service</th>                                        
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                   

                                    <?php
                                      $work_result = mysqli_query($mysqli, "SELECT * FROM  tbl_work_experience where emp_id = '$id_session' order by date_to  DESC"); 
                                      while ($work_row= mysqli_fetch_array ($work_result) ){
                                      $work_id=$work_row['work_id'];

                                    

                                      if($work_row['salary_grade'] == ""){

                                        $intSalaryGrade ="N/A";
                                      }else
                                      {


                                        $intSalaryGrade =$work_row['salary_grade'];

                                      }


                                      if($work_row['monthly_salary']=="")
                                      {

                                        $salary="N/A";

                                      }else{
                                        $salary=number_format($work_row['monthly_salary'],2);

                                      }
                                      
                                      ?>
                        
                                     <tr>
                                      <td ><input type="hidden" value="<?php echo  $work_id; ?>"></td>
                                       <td><?php echo date("M d, Y ",strtotime($work_row['date_from']))."-".date("M d, Y ",strtotime($work_row['date_to'])); ?></td>               
                                        <td><?php echo $work_row['position_title']; ?></td>
                                        <td><?php echo $work_row['company']; ?></td>               
                                        <td><?php echo $salary; ?></td>
                                        <td><?php echo  $intSalaryGrade; ?></td>
                                        <td><?php echo $work_row['status_of_appointment']; ?></td>
                                        <td><?php echo $work_row['gov_service']; ?></td> 
                                                                                               
                                        <td>

                                           <a href="edit_work_experience.php<?php echo '?work_id='.$work_id; ?>" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_work<?php echo $work_row['work_id'];?>"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
                                           <?php include('modal/modal_delete.php'); ?>
                                            
                                           

                                        </td>
                                      </tr>
                                          <?php } ?>
                                      </tfoot>
                                    </table>
                                </div>                                                                                 
                              </div>
                        </div>         
                      </div>


                <!-- for content -->




              </div>
              <!-- /.tab-pane -->

             

              

                <div class="tab-pane" id="pds">
                


                <!-- for content -->

              

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include 'include/footer.php'; ?>
  </div> 
  <?php include 'include/scripts.php'; ?>
  </body>
</html>