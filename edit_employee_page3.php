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
              <li ><a href="edit_employee_page2.php">PAGE2</a></li>
              <li class="active"><a href="edit_employee_page3.php">PAGE3</a></li>
              <li><a href="edit_employee_page4.php">PAGE4</a></li>
              <!-- <li><a href="#pds" data-toggle="tab">GENERATED PDS</a></li> -->
            </ul>
            <div class="tab-content">
             
              
              <!-- /.tab-pane -->

              <div class=" active tab-pane" id="page3">
                
                <h3 class="box-title">VI. Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization/s</h3>

                <div class="box-body breadcrumb">             
                        <?php include ('modal/modal_add_volunteer_work.php') ?>

                </div>


                <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example5" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Name & Address of Organization</th>                  
                                        <th>Inclusive Dates</th>
                                        <th>Number of hours</th>
                                        <th>Position / Nature of Work</th>                                                                    
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                    
                                    <?php
                                      $vol_result = mysqli_query($mysqli, "SELECT * FROM  tbl_voluntary_work where emp_id = '$id_session' order by vol_date_to DESC "); 
                                      while ($vol_row= mysqli_fetch_array ($vol_result) ){
                                      $vol_id=$vol_row['vol_id'];
                                      
                                      ?>
                        
                                     <tr>
                                        <td><?php echo $vol_row['organization_name']; ?></td>               
                                        <td><?php echo date("M d, Y ",strtotime($vol_row['vol_date_from']))."-" .date("M d, Y ",strtotime($vol_row['vol_date_to'])); ?></td>
                                        <td><?php echo $vol_row['vol_num_hour']." hours"; ?></td>               
                                        <td><?php echo $vol_row['vol_position']; ?></td> 

                                                                                                                                    
                                        <td>
                                            
                                            <a href="edit_voluntary_work.php<?php echo '?vol_id='.$vol_id; ?>" data-toggle="modal" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_vol<?php echo $vol_row['vol_id'];?>"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
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

                      <!-- II. Training Programs <i>(Start fromthe most recent training.) -->
                <h3 class="box-title">VII. Training Programs <i>(Start fromthe most recent training.)</i></h3>

                <div class="box-body breadcrumb">             
                        <?php include ('modal/modal_add_training_program.php') ?>

                </div>


                <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example2" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th colspan="2">Title of Seminar/Conference/<br>Workshop/ShortCourses</th>                  
                                        <th>Inclusive Dates</th>
                                        <th>Number of hours</th>
                                        <th>Conducted/Sponsored by</th>                                                                    
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                    

                                    <?php
                                      $prog_result = mysqli_query($mysqli, "SELECT * FROM  tbl_training_program where emp_id = '$id_session' order by sem_date_to DESC "); 
                                      while ($prog_row= mysqli_fetch_array ($prog_result) ){
                                      $prog_id=$prog_row['prog_id'];

                                    

                                      $position=20; // Define how many character you want to display.
                                      $message=$prog_row['seminar_title'];
                                      $post = substr($message, 0, $position); 
                                      ?>
                        
                                     <tr>
                                          <td ><input type="hidden" value="<?php echo  $prog_id; ?>"></td>
                                        <td><?php echo wordwrap($prog_row['seminar_title'],40,"<br>\n",TRUE); ?></td>               
                                        <td><?php echo date("M d, Y ",strtotime($prog_row['sem_date_from']))."-" .date("M d, Y ",strtotime($prog_row['sem_date_to'])); ?></td>
                                        <td><?php echo $prog_row['sem_num_hour']." hours"; ?></td>               
                                        <td><?php echo $prog_row['sem_sponsored_by']; ?></td>

                                                                                                                                    
                                        <td>

                                            <a href="edit_training_program.php<?php echo '?prog_id='.$prog_id; ?>" data-toggle="modal" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_prog<?php echo $prog_row['prog_id'];?>"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
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

                <!-- Other Information -->

                <h3 class="box-title">VIII. Other Information</h3>

                <div class="box-body breadcrumb">             
                       <?php include ('modal/modal_add_other_information.php') ?>
                </div>


                


                <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example7" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Special Skills / Hobbies</th>                  
                                        <th>Non-Academic Distinctions / Recognition</th>
                                        <th>Membership in Association/Orgtanization</th>                                                                                                       
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                    
                                    <?php
                                      $other_result = mysqli_query($mysqli, "SELECT * FROM  tbl_other_info where emp_id = '$id_session' order by other_id DESC "); 
                                      while ($other_row= mysqli_fetch_array ($other_result) ){
                                      $other_id=$other_row['other_id'];

                                       $otherDistinction = $other_row['distinction'];
                                      $otherAssociation = $other_row['association'];

                                      if(empty($other_row['distinction'])){
                                        $otherDistinction = "N/A";

                                      }else{

                                        $otherDistinction = $other_row['distinction'];
                                      }

                                      if(empty($other_row['association'])){
                                        $otherAssociation = "N/A";

                                      }else{

                                        $otherAssociation = $other_row['association'];
                                      }
                                      
                                      ?>
                        
                                     <tr>
                                        <td><?php echo $other_row['special_skill']; ?></td>               
                                        <td><?php echo $otherDistinction; ?></td>
                                        <td><?php echo $otherAssociation; ?></td> 

                                                                                                                                
                                        <td>
                                            <!-- <a href="#" class="btn btn-success btn-flat"><i class="fa fa-plus"></i></a> -->
                                            <a href="edit_other_information.php<?php echo '?other_id='.$other_id; ?>" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_other<?php echo $other_row['other_id'];?>"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
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

                      <!--  End Training Programs <i>(Start fromthe most recent training.) -->
                

              </div>

              

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