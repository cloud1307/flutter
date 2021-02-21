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
              <li class="active"><a href="edit_employee_page1.php">PAGE1</a></li>
              <li ><a href="edit_employee_page2.php" >PAGE2</a></li>
              <li><a href="edit_employee_page3.php" >PAGE3</a></li>
              <li><a href="edit_employee_page4.php">PAGE4</a></li>
              <!-- <li><a href="#pds" data-toggle="tab">GENERATED PDS</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="page1">  
                  <h3 class="box-title">User Account</h3>
                      <div class="box-body breadcrumb">
                        <div class="row">
                            <form role="form" method="post" id="employee_form" action="query/update_employee_query.php">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">User Name <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?php echo $emp_user['username']; ?>" required>
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Password <span class="mb-0 text-primary">*</span></label>   
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="<?php echo $emp_user['password']; ?>"  required="">              
                                </div>              
                              </div>
                        </div>              
                      </div>
                      <hr>
                  <h3 class="box-title">I. Personal Information</h3>
                      <hr>
                        <div class="box-body breadcrumb">
                          <div class="row">

                              <!-- <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Position</label>   
                                    <input type="text" class="form-control" id="strPosition" name="strPosition" value="<?php echo $emp_user['strPosition']; ?>" placeholder="" hidden>              
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Department</label>
                                  <select class="form-control select2" style="width: 100%;" name="intDeptID" style="display: none">

                                     <option value="<?php echo $emp_user['intDeptID']; ?>"><?php echo $emp_user['strDepartment']; ?></option>

                                    <?php
                                     
                                      $results = mysqli_query($mysqli, "SELECT * from tbl_department order by intDeptID desc");
                                      // $row=mysql_fetch_array($query);                  
                                      // $id = $row['kiosk_id'];
                                     
                                     
                      
                                    while ($row=mysqli_fetch_array($results)){ ?>
                                    
                                    <option  value="<?php echo $row['intDeptID']; ?>"><?php echo $row['strDepartment']; ?></option>

                                    <?php } ?>

                                  </select> 
                                </div>            
                              </div> -->

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Surname <span class="mb-0 text-primary">*</span></label>   
                                    <input  type="text" class="form-control" id="surname" name="surname" placeholder="Enter Last Name" value="<?php echo $emp_user['surname']; ?>"  required="">                                    
                                  <label for="exampleInputEmail1">First Name <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" value="<?php echo $emp_user['firstname']; ?>"  required="">
                                </div>              
                              </div>

                               <div class="col-md-8">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Middle Name <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Middle Name" value="<?php echo $emp_user['middlename']; ?>">
                                </div>              
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name Extension <i>(eg. Jr., Sr.)</i></label>   
                                    <input type="text" class="form-control" id="extension" name="extension" placeholder="Enter Extension Name" value="<?php echo $emp_user['extension']; ?>">
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Date of Birth</label>   
                                    <input type="text" class="form-control" id="datepicker1" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask name="date_of_birth" placeholder="Enter Date of Birth" value="<?php echo date('m/d/Y',strtotime($emp_user['date_of_birth'])); ?>">
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Place of Birth</label>   
                                    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="Enter Place of Birth" value="<?php echo $emp_user['place_of_birth']; ?>">              
                                </div>              
                              </div> 

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Sex</label>
                                </div>              
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label>
                                        <input type="radio" name="sex" id="optionsRadios1" value="Male" <?php if($gender=="Male"){?> checked="true" <?php } ?> />
                                        Male
                                  </label>                                   
                                </div>              
                              </div>

                              <div class="col-md-9">
                                <div class="form-group">                                   
                                  <label>
                                        <input type="radio" name="sex" id="optionsRadios2" value="Female" <?php if($gender=="Female"){?> checked="true" <?php } ?> />
                                        Female
                                  </label>                                   
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Civil Status</label>
                                    <select class="form-control" style="width: 100%;" name="civil_status" onchange="showhideOtherSpecify(this.value)" id="civil_status">
                                        <option value="<?php echo $emp_user['civil_status']; ?>"><?php echo $emp_user['civil_status']; ?></option>                                    
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Annulled">Annulled</option>
                                        <option value="Other Specify">Other Specify</option>                                        
                                    </select>
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Other</label>   
                                    <input type="text" class="form-control" id="strOtherStatus" name="strOtherStatus" value="<?php echo $emp_user['strOtherStatus']; ?>"  disabled>              
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Citizenship</label>   
                                    <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Enter Citizenship" value="<?php echo $emp_user['citizenship']; ?>">
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Height <i>(m)</i></label>
                                    <input type="number" step="0.01" class="form-control" id="height" min = "0" max="99999999" name="height" placeholder="Enter Height" value="<?php echo $emp_user['height']; ?>">              
                                </div>              
                              </div> 

                               <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Weight <i>(kg)</i></label>   
                                    <input type="number" step="0.01" class="form-control" id="weight" min = "0" max="99999" name="weight" placeholder="Enter Weight" value="<?php echo $emp_user['weight']; ?>">  
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Blood Type</label>
                                    <input type="text" class="form-control" id="weight" name="blood_type" placeholder="Enter Blood Type" value="<?php echo $emp_user['blood_type']; ?>">              
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">GSIS ID Number</label>   
                                     <input type="text" class="form-control" id="gsis_id" name="gsis_num" placeholder="Enter GSIS ID Number" value="<?php echo $emp_user['gsis_num']; ?>">  
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">PAG-IBIG ID Number</label>
                                    <input type="text" class="form-control" id="pagibig" name="pagibig_num" placeholder="Enter Pag-ibig Number" value="<?php echo $emp_user['pagibig_num']; ?>">              
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Philhealth Number</label>   
                                     <input type="text" class="form-control" id="gsis_id" name="philhealth_num" placeholder="Enter Philhealth Number" value="<?php echo $emp_user['philhealth_num']; ?>">  
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">SSS Number</label>
                                    <input type="text" class="form-control" id="ss" name="sss_num" placeholder="Enter SSS Number" value="<?php echo $emp_user['sss_num']; ?>">              
                                </div>              
                              </div>

                               <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">TIN Number</label>
                                    <input type="text" class="form-control" id="tin" name="tin_num" placeholder="Enter Tin Number" value="<?php echo $emp_user['tin_num']; ?>">   
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address<i>(if any)</i></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email_address" placeholder="Enter Email Address" value="<?php echo $emp_user['email_address']; ?>">          
                                </div>              
                              </div>

                               <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Contact Number <i>(if any)</i></label>
                                    <input type="text" class="form-control"  name="contact_number"  placeholder="Enter Cellphone Number" value="<?php echo $emp_user['contact_number']; ?>" data-inputmask='"mask": "(9999) 9999-999"' data-mask >   
                                </div>              
                              </div>

                              <div class="col-md-6">                                
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Agency Employee Number</label>
                                      <input type="number" class="form-control" min = "0" max="99999999" name="agency_num"  placeholder="Enter Agency Employee Number" value="<?php echo $emp_user['agency_num']; ?>">   
                                  </div>              
                                </div>

                              <div class="col-md-6 breadcrumb">

                                  <div class="form-group">
                                     <label for="exampleInputPassword1">Residential Address</label>
                                      <textarea class="form-control"  rows="5"  name="resident_add" value="<?php echo $emp_user['resident_add']; ?>"><?php echo $emp_user['resident_add']; ?></textarea>    
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Zip Code</label>
                                      <input type="number" class="form-control" min = "0" max="99999999" name="ra_zipcode"  placeholder="Enter Zipcode" value="<?php echo $emp_user['ra_zipcode']; ?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Telephone Number</label>
                                      <input type="number" class="form-control" min = "0" max="99999999999999999" name="ra_telephone_num"  placeholder="Enter Telephone Number" value="<?php echo $emp_user['ra_telephone_num']; ?>">
                                  </div>  
                            </div>

                            <div class="col-md-6 breadcrumb" >

                                  <div class="form-group">
                                     <label for="exampleInputPassword1">Permanent Address</label>
                                      <textarea class="form-control"  rows="5"  name="permanent_add" value="<?php echo $emp_user['permanent_add']; ?>"><?php echo $emp_user['permanent_add']; ?></textarea>    
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Zip Code</label>
                                      <input type="number" class="form-control" min = "0" max="99999999" name="pa_zipcode"  placeholder="Enter Zipcode" value="<?php echo $emp_user['pa_zipcode']; ?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Telephone Number</label>
                                      <input type="number" class="form-control" min = "0" max="99999999999999999" name="pa_telephone_num"  placeholder="Enter Telephone Number" value="<?php echo $emp_user['pa_telephone_num']; ?>">
                                  </div>  
                            </div>
                                                
                        </div>         
                      </div>
                   <hr>

                   <h3 class="box-title">II. Family Background</h3>
                      <div class="box-body breadcrumb">
                        <div class="row">

                            <hr>
                            
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Spouse's Surname</span></label>   
                                    <input type="text" class="form-control"  name="spouse_surname" placeholder="Enter Spouse's Surname" value="<?php echo $emp_user['spouse_surname']; ?>">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>   
                                    <input type="text" class="form-control"  name="spouse_firstname" placeholder="Enter Spouse First Name" value="<?php echo $emp_user['spouse_firstname']; ?>">              
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Middle Name</label>   
                                    <input type="text" class="form-control"  name="spouse_middlename" placeholder="Enter Spouse Middle Name" value="<?php echo $emp_user['spouse_middlename']; ?>">              
                                </div>              
                              </div> 

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Occupation</label>   
                                    <input type="text" class="form-control"  name="spouse_occupation" placeholder="Enter Spouse Occupation" value="<?php echo $emp_user['spouse_occupation']; ?>">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Employer/Bus. Name</label>   
                                    <input type="text" class="form-control"  name="spouse_employers" placeholder="Enter Employer/ Bus. Name" value="<?php echo $emp_user['spouse_employers']; ?>">
                                </div>                                                 
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Business Address</label>   
                                    <input type="text" class="form-control"  name="spouse_buss_add" placeholder="Enter Business Address" value="<?php echo $emp_user['spouse_buss_add']; ?>">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Telephone Number</label>   
                                    <input type="number" class="form-control"  name="spouse_buss_num" placeholder="Enter Telephone Number" value="<?php echo $emp_user['spouse_buss_num']; ?>">
                                </div>                                                 
                              </div>                                                  
                        </div>              
                      </div>
                <hr>

                    <div class="box-body breadcrumb">
                        <div class="row">
                                                       
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Surname</span></label>   
                                    <input type="text" class="form-control"  name="fathers_surname" placeholder="Enter Father's Surname" value="<?php echo $emp_user['fathers_surname']; ?>">
                                </div>
            
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Name Extension <i>(eg. Jr., Sr.)</i></label>   
                                    <input type="text" class="form-control" id="fathers_extension_name" name="fathers_extension_name" placeholder="Enter Extension Name" value="<?php echo $emp_user['fathers_extension_name']; ?>">
                                </div>
                              </div>                              
                              <div class="col-md-12">                                  
                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>   
                                    <input type="text" class="form-control"  name="fathers_firstname" placeholder="Enter Spouse First Name" value="<?php echo $emp_user['fathers_firstname']; ?>">              
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Middle Name</label>   
                                    <input type="text" class="form-control"  name="fathers_middlename" placeholder="Enter Spouse Middle Name" value="<?php echo $emp_user['fathers_middlename']; ?>">              
                                </div>            
                              </div>   
                        
                          <div class="col-md-12">                                
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Surname <i>(Mother's Maiden Name)</i></label>   
                                    <input type="text" class="form-control"  name="mothers_surname" placeholder="Enter Surname" value="<?php echo $emp_user['mothers_surname']; ?>">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">First Name</label>   
                                    <input type="text" class="form-control"  name="mothers_firstname" placeholder="Enter First Name" value="<?php echo $emp_user['mothers_firstname']; ?>">
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Middle Name</label>   
                                    <input type="text" class="form-control"  name="mothers_middlename" placeholder="Enter Middle Name" value="<?php echo $emp_user['mothers_middlename']; ?>">
                                </div>                                                 
                              </div>                                                                                      
                        </div>              
                      </div>


                  <hr>
                            

                  <div class="modal-footer">
                          <button type="submit" name="update" class="btn btn-primary pull-left">Update Info</button>                                          
                  </div>
                </form>


                <hr>

                   <h3 class="box-title">Name of Children</h3><i>(Write full name and list all</i>
                <hr>      
                      <div class="box-body breadcrumb " >             
                        <?php include ('modal/modal_add_child.php') ?>
                      </div>
                      <br>


                      
                   <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example1" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Name of Child</th>                  
                                        <th>Date of Birth</th>                                        
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                   
                                     <?php
                                         $sql = "SELECT * FROM tbl_child where emp_id = '".$_SESSION['id']."' ";
                                          $query = $conn->query($sql);
                                          while($row = $query->fetch_assoc()){                                      
                                      // echo "
                                      //     <tr>
                                      //       <td>".$row['child_name']."</td>
                                      //       <td>".date("M d, Y ",strtotime($row['child_birthday']))."</td>
                                      //       <td>
                                      //         <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                                      //         <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                                      //       </td>
                                      //     </tr>
                                      //   ";
                                          ?>     
                        
                                     <tr>
                                        <td><?php echo $row['child_name']; ?></td>               
                                        <td><?php echo date("M d, Y ",strtotime($row['child_birthday'])); ?></td>                                                    
                                        <td>
                                         
                                            <a href="#" data-toggle="modal"  class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>                                                                                                                              
                                            <a href="#" data-toggle="modal" class="btn btn-danger btn-flat"><i class="fa fa-times"></i></a>
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


                    <h3 class="box-title">III. Educational Background</h3>

                      <div class="box-body breadcrumb">             
                       <?php include ('modal/modal_add_educational_background.php') ?>                        
                      </div>


                <hr>

                    <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example2" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th colspan="2">Level</th>                  
                                        <th>Name of School</th>
                                        <th>Degree Type</th>
                                        <th>Degree Course</th>
                                        <th>Year Graduated</th>
                                        <th>Inclusive Dates</th>                                         
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                   

                                    <?php
                                      $educ_result = mysqli_query($mysqli, "SELECT * FROM  tbl_educational_background where emp_id = '$id_session' ORDER BY to_date DESC"); 
                                      while ($educ_row= mysqli_fetch_array ($educ_result) ){
                                      $educ_id=$educ_row['educ_id'];
                                      
                                      ?>
                        
                                     <tr>
                                        <td ><input type="hidden" value="<?php echo  $educ_id; ?>"></td>
                                        <td><?php echo $educ_row['level']; ?></td>               
                                        <td><?php echo $educ_row['name_of_school']; ?></td>
                                        <td><?php echo $educ_row['degree_type']; ?></td>               
                                        <td><?php echo $educ_row['degree_course']; ?></td>
                                        <td><?php echo $educ_row['year_graduated']; ?></td>
                                        <td><?php echo $educ_row['from_date']. "-".$educ_row['to_date']; ?></td>                                                                                            
                                        <td>
                                            <!-- <a href="#" class="btn btn-success btn-flat"><i class="fa fa-plus"></i></a> -->
                                            <a href="edit_educational_background.php<?php echo '?educ_id='.$educ_id; ?>" data-toggle="modal" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_educ<?php echo $educ_row['educ_id'];?>"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
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