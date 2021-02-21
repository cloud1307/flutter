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
              <li ><a href="edit_employee_page2.php ">PAGE2</a></li>
              <li><a href="edit_employee_page3.php ">PAGE3</a></li>
              <li class="active"><a href="edit_employee_page4.php " data-toggle="tab">PAGE4</a></li>
              <!-- <li><a href="#pds" data-toggle="tab">GENERATED PDS</a></li> -->
            </ul>
            <div class="tab-content">
             
            

              <div class="active tab-pane" id="page4">

              <h4 class="box-title">Are you related by consanguinity or affinity to any of the following:</h4>
                <form role="form" method="post" id="employee_form" action="query/update_page4_query.php">
                <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   a. Within the third degree (for National Government Employees):
                                   appointing authority, recommending authority, chief of office/bureau/department or person who
                                   has immediate supervision over you in the Office, Bureau or Department where you will be
                                   appointed?
                                  </p>                                   
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q1" id="optionsRadios1" value="No" checked="checked"  onChange="findselected1()"  <?php if($q1=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q1" id="optionsRadios2" value="Yes" onChange="findselected1()" <?php if($q1=="Yes"){?>  checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q1_remarks" class="form-control"  name="q1_remarks" value="<?php echo $emp_row['q1_remarks']; ?>" placeholder="Details" disabled="disabled">                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>  

                  <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   b. Within the fourth degree (for Local Government Employees):
                                   appointing authority or recommending authority  where you will be
                                   appointed?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q2" id="optionsRadios1" value="No" checked onChange="findselected2()" <?php if($q2=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q2" id="optionsRadios2" value="Yes" onChange="findselected2()" <?php if($q2=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q2_remarks" class="form-control"  name="q2_remarks" value="<?php echo $emp_row['q2_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>
                
                <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   a. Have you ever been formally charged?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q3" id="optionsRadios1" value="No" checked onChange="findselected3()" <?php if($q3=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q3" id="optionsRadios2" value="Yes" onChange="findselected3()" <?php if($q3=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q3_remarks" class="form-control"  name="q3_remarks" value="<?php echo $emp_row['q3_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

              <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                   b. Have you ever been guilty of any administrative offense?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q4" id="optionsRadios1" value="No" checked onChange="findselected4()" <?php if($q4=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q4" id="optionsRadios2" value="Yes" onChange="findselected4()" <?php if($q4=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q4_remarks" class="form-control"  name="q4_remarks" value="<?php echo $emp_row['q4_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                   <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                      Have you ever been convicted of any crime or violation of any law, degree, ordinance or regulation by any court or tribunal?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"  placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q5" id="optionsRadios1" value="No" checked onChange="findselected5()" <?php if($q5=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q5" id="optionsRadios2" value="Yes" onChange="findselected5()" <?php if($q5=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q5_remarks" class="form-control"  name="q5_remarks" value="<?php echo $emp_row['q5_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                   <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                      Have you ever been separated from the service in any of the following modes: resignation retirement, dropped from the rolls, dismissal, termination, end of term, 
                                      finished contract, AWOL or phased out, in the public or private sector?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q6" id="optionsRadios1" value="No" checked onChange="findselected6()" <?php if($q6=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q6" id="optionsRadios2" value="Yes" onChange="findselected6()" <?php if($q6=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q6_remarks" class="form-control"  name="q6_remarks" value="<?php echo $emp_row['q6_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                   <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                      Have you ever been separated a candidate in a national or local election (except Barangay election)?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q7" id="optionsRadios1" value="No" checked onChange="findselected7()" <?php if($q7=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q7" id="optionsRadios2" value="Yes" onChange="findselected7()" <?php if($q7=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q7_remarks" class="form-control"  name="q7_remarks" value="<?php echo $emp_row['q7_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

                    <h4 class="box-title">Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277);<br> and (c) Solo Parents Welfare Act of 2000
                                      (RA 8972), please answer the following items:</h4>
                    <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                    a. Are you a member of any indigenous group?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q8" id="optionsRadios1" value="No" checked onChange="findselected8()" <?php if($q8=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q8" id="optionsRadios2" value="Yes" onChange="findselected8()" <?php if($q8=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q8_remarks" class="form-control"  name="q8_remarks" value="<?php echo $emp_row['q8_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

                    <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                    b. Are you differently abled?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q9" id="optionsRadios1" value="No" checked onChange="findselected9()" <?php if($q9=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q9" id="optionsRadios2" value="Yes" onChange="findselected9()" <?php if($q9=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q9_remarks" class="form-control"  name="q9_remarks" value="<?php echo $emp_row['q9_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>


                    <div class="box-body">
                      <div class="row">                          
                            <div class="col-md-8">
                                <div class="form-group">                                
                                  <p>
                                    c. Are you a solo parent?
                                  </p>                                   
                                </div>
                                <!-- Hidden textbox -->
                                <div class="form-group" >
                                   <label for="exampleInputEmail1"></span></label>
                                    <input type="text" class="form-control"   placeholder="Details" style="display: none">                                  
                                </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q10" id="optionsRadios1" value="No" checked onChange="findselected10()" <?php if($q10=="No"){?> checked="true" <?php } ?> />
                                            No
                                      </label>                                   
                                    </div>              
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">                                   
                                      <label>
                                            <input type="radio" name="q10" id="optionsRadios2" value="Yes" onChange="findselected10()" <?php if($q10=="Yes"){?> checked="true" <?php } ?> />
                                            Yes
                                      </label>                                   
                                    </div>              
                                  </div> 
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">                                   
                                  <label for="exampleInputEmail1">If Yes, given details:</span></label>   
                                    <input type="text" id="q10_remarks" class="form-control"  name="q10_remarks" value="<?php echo $emp_row['q10_remarks']; ?>" placeholder="Details" disabled>                                  
                                </div>           
                              </div>
                        </div>                         
                   </div>

                   <hr>
                   <h3 class="box-title">Community Tax Certificate</h3>
                      <div class="box-body breadcrumb">
                        <div class="row">                            
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Community Tax Cerificate Number</label>   
                                    <input type="number" class="form-control" min = "0" max="999999999999999999999" value="<?php echo $emp_row['cert_num']; ?>" name="cert_num" placeholder="Enter Community Tax Cerificate Number">
                                </div>                                             
                              </div>                              

                              <div class="col-md-4">                                
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Issued AT</label>   
                                    <input type="text" class="form-control"  name="cert_issued" value="<?php echo $emp_row['cert_issued']; ?>" placeholder="Enter Issued AT" >
                                </div>                                                                                
                              </div>

                              <div class="col-md-4"> 
                                   <label for="exampleInputEmail1">Issued Date on<i>(mm/dd/yyyy)</i></label>
                                <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control"  id="datepicker3" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo $certificate_date; ?>" name="cert_date" placeholder="Enter Issued Date">
                                      </div>
                                  </div>                                                                                 
                              </div>                                                                                 
                        </div>

                        <div class="modal-footer">
                          <button type="submit" name="update_page4" class="btn btn-primary pull-left">Update Info</button>                                          
                       </div>
                     </form>

                     
                  <hr>
                  <br><br>

                  <?php
                   $result = mysqli_query($mysqli,"SELECT * FROM tbl_reference where emp_id = '$id_session' ");
                    $num_rows4 = mysqli_num_rows($result);

                    if ($num_rows4==3){
                      include ('modal/modal_ref_notif.php');                 
                   echo'<div class="box-body breadcrumb">';
                          echo'<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ref_notif">';
                            echo' Add Reference';
                        echo'</button>';                        
                  echo'</div>';

                  }else{ include ('modal/modal_add_reference.php'); 
                   echo'<div class="box-body breadcrumb">';   
                    echo'<button type="button" class="btn btn-success" data-toggle="modal" data-target="#references">';
                          echo'Add References';
                    echo'</button>';   
                  echo'</div>';
                   }?>
                


                <div class="box-body">
                        <div class="row">                          
                            <div class="col-md-12">
                                <div class="form-group">
                                   <table id="example8" class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>Name</th>                  
                                        <th>Address</th>
                                        <th>Cellphone Number</th>                                                                                                       
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                    <?php
                                    // $result= mysql_query("select * from tbl_reference where emp_id = '$ID' order by ref_id DESC ") or die (mysql_error());
                                    // while ($row= mysql_fetch_array ($result) ){
                                    // $ref_id=$row['ref_id'];
                                    
                                    ?>

                                    <?php
                                      $ref_result = mysqli_query($mysqli, "SELECT * FROM  tbl_reference where emp_id = '$id_session' order by ref_id DESC "); 
                                      while ($ref_row= mysqli_fetch_array ($ref_result) ){
                                      $ref_id=$ref_row['ref_id'];
                                      
                                      ?>
                        
                                     <tr>
                                        <td><?php echo $ref_row['reference_name']; ?></td>               
                                        <td><?php echo $ref_row['reference_address']; ?></td>
                                        <td><?php echo $ref_row['reference_number']; ?></td>

                                                                                                                                  
                                        <td>
                                            <!-- <a href="#" class="btn btn-success btn-flat"><i class="fa fa-plus"></i></a> -->
                                            <a href="edit_reference.php<?php echo '?ref_id='.$ref_id; ?>" class="btn btn-info btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="#del_ref<?php echo $ref_row['ref_id'];?>"  data-toggle="modal" class="btn btn-danger btn-flat" ><i class="fa  fa-times"></i></a>
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