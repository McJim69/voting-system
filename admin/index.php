<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
		<img src="../images/vote0.png" height="120"/><br>
  		<x class="text-primary">Online Voting System</x>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg" style="margin-top:-40px">Sign in to start your session as Admin</p>

    	<form action="login.php" method="POST">
      		<div class="input-group mb-3">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="input-group-text"><i class="fas fa-user"></i></span>
      		</div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
          </div>
      		<div class="row">
    			<div class="col-12 text-center">
          			<button type="submit" class="btn btn-primary w-100" name="login"><i class="fas fa-sign-in-alt"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
	<a class="btn btn-link w-100 mt-3" href="../">Click here to Login as <b>VOTER</b></a>
</div>
	
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='alert alert-danger text-center mt-3'>
			  		<p class='mb-0'>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>


<?php include 'includes/scripts.php' ?>
</body>
</html>