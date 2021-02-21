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
 

<section class="content-header">
      <h1>
        Schedules
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Employees</li>
        <li class="active">Schedules</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Department</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th >Department</th>
                  <th >Department ID</th>
                  <th >Department Head</th>
                  <th>Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                   // $sql = "SELECT *  FROM  tbl_department LEFT JOIN tbl_employee ON tbl_department.intEmpID = tbl_employee.emp_id";
                    $sql = "SELECT a.*,b.*  FROM  tbl_department a LEFT JOIN tbl_employee b ON a.intEmpID = b.emp_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                      if (empty($row['intEmpID'])) {
                        $employeename = "N/A";
                      }else{

                        $employeename = $row['firstname']." ". $row['surname'] ;
                      }

                      



                      echo "
                        <tr>
                          <td>".strtoupper($row['strDepartment'])."</td>
                           <td>".$row['id']."</td>
                          <td>".strtoupper($employeename)."</td>
                          <td><div class='btn-group'>
                          <button type='button' class='btn btn-default'> ".$row['enumstatus']. "</button>                          
                          <button type='button' class='btn btn-warning dropdown-toggle' data-toggle='dropdown'>
                            <span class='caret'></span>
                            <span class='sr-only'>Toggle Dropdown</span>
                          </button>
                          <ul class='dropdown-menu' role='menu'>
                            <li><a href='#''>Active</a></li>
                            <li><a href='#''>Deactivated</a></li>
                       
                          </ul>
                        </div></td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                      }  ?>                



                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>  
  </div>
  <!-- /.content-wrapper -->
   <?php include 'include/footer.php'; ?>
   <?php include 'modal/modal_department.php'; ?>
  </div> 
  <?php include 'include/scripts.php'; ?>

 <script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'department_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){   
      $('.deptid').val(response.id);
      $('#del_strDepartment').html(response.strDepartment);
      $('#edit_employee_val').val(response.intEmpID);
      //$('#edit_employee_val').val(response.intEmpID);
      $('#edit_employeename_val').val(response.intEmpID).html(response.firstname+' '+response.surname);
      
     
    }
  });
}
</script>

  </body>
</html>