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

<div class="content-wrapper">
	
    
    <section class="content-header">
      <h1>
        Welcome To Human Resource Information System
        <small>Start Updating Your information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Dashboard</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <!-- <section class="content"> 
      <div class="box">
        <div class="box-header with-border">
          
          
        

          
        
        </div>   
      </div> 
    </section> -->
    <!-- /.content -->
    </div> 
	
    <?php include 'include/footer.php'; ?>
  </div> 
  <?php include 'include/scripts.php'; ?>
  </body>
</html>