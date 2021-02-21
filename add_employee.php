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
       Add New Employee
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee</a></li>
        <li class="active">Add Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    

      <!-- Default box -->
      <div class="box">
        
        <div class="box-body">
                <h3 class="box-title">User Account</h3>
                      <div class="box-body">
                        <div class="row">
                            <form role="form" method="post" id="register_form" action="query/add_employee_query.php" enctype="multipart/form-data">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">User Name <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Password <span class="mb-0 text-primary">*</span></label>   
                                    <input type="password" class="form-control" id="password" name="password" value="1234" placeholder="Password" required="">              
                                </div>              
                              </div> 
                        
                        </div>         
                      </div>
                  <h3 class="box-title">I. Personal Information</h3>
                      <div class="box-body">
                        <div class="row">

                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Surname <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Last Name"  required="">                                    
                                  <label for="exampleInputEmail1">First Name <span class="mb-0 text-primary">*</span></label>   
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name"  required="">
                                </div>              
                              </div>

                               <div class="col-md-8">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Middle Name </label>   
                                    <input type="text" class="form-control" id="middlename" name="middlename"  placeholder="Enter Middle Name">
                                </div>              
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name Extension (eg. Jr., Sr.)</label>   
                                    <input type="text" class="form-control" id="extension" name="extension"  placeholder="Enter Extension Name">
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Date of Birth (mm/dd/yyyy</label>   
                                    <input type="text" class="form-control" id="datepicker"  name="date_of_birth" placeholder="Enter Date of Birth" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>              
                              </div>                          
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Place of Birth</label>   
                                    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="Enter Place of Birth">              
                                </div>              
                              </div> 

                              <div class="col-md-12">
                                <div class="col-md-6">
	                                <div class="form-group">
	                                  <label for="exampleInputEmail1">Sex</label>
	                                </div>
                                </div>
                                <div class="col-md-6">
	                                <div class="form-group">
	                                  <label for="exampleInputEmail1">User Level</label>
	                                </div>
                                </div>
                                <!-- <div class="col-md-4">
	                                <div class="form-group">
	                                  <label for="exampleInputEmail1">Photo</label>
	                                </div>
                                </div> -->              
                              </div> 

                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label>
                                        <input type="radio" name="sex" id="optionsRadios1" value="Male" >
                                        Male
                                  </label>                                   
                                </div>              
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label>
                                        <input type="radio" name="sex" id="optionsRadios2" value="Female" >
                                        Female
                                  </label>                                   
                                </div>              
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  
                                    <select class="form-control" style="width: 100%;" name="enumUserLevel"  id="enumUserLevel" required>
                                        <option value="">Select a State</option>                                    
                                        <option value="Employee">Employee</option>
                                        <option value="HR-Staff">HR-Staff</option>
                                        <option value="HR Manager">HR Manager</option>
                                        <option value="Super Admin">Super Admin</option>
                                                                     
                                    </select>
                                </div>              
                              </div>

                              <!-- <div class="col-md-4">
                                <div class="form-group">
                                  <input class="form-control" type="file" name="photo" id="photo">                                   
                                </div>              
                              </div> -->                          
                               
                               <!-- add button -->
                              <div class="box-footer">
                                <button type="submit" name="add_employee" class="btn btn-primary">Submit</button>
                                <a href="view_employee.php" class="btn btn-default ">Cancel</a>
                              </div>

                            </form>
                        </div>  

        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'include/footer.php'; ?>
  
</div>
<?php include 'include/scripts.php'; ?>