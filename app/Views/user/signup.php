<style>
    body {
     background-color: #21638c; 
}   
</style>
<body>
		<div class="admin-form">
			<div class="widget wred">
				<div class="widget-head" style="text-align:center">
					  
                    Sign Up Form
				</div>
                <br>
                <strong style="color:red;margin-left:100px;">
        <?php print_r($this->session->flashdata('message'));?></strong>  
                <?php
                    $messge = $this->session->flashdata('login_error'); 
                    if(!empty($messge)):
                                 echo '<div class="alert alert-danger alert-dismissable center">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>'.$messge.'</div>';
                    endif; ?>
				<div class="widget-content">
					<div class="padd">
				    <img src="img/logogreen.png" width="120px" height="120px" style="margin-left:150px">
                         <?php echo form_open('add_signup',array('class'=>'form-horizontal')); ?>
						
							<!-- Email -->
							<div class="form-group">
								 
								  <div class="col-lg-12">
                        <input type="text" class="form-control" name="user_name" placeholder="User Name">
								  </div>
							</div>
                        <div class="form-group">
								 
								  <div class="col-lg-12">
									<input type="text" class="form-control" name="email" id="useremail" placeholder="User Email">
								  </div>
							</div>
							<!-- Password -->
							<div class="form-group">
								  <div class="col-lg-12">
									<input type="password" name="password" class="form-control" id="password" placeholder="Password">
								  </div>
							</div>
                            <div class="form-group">
								  <div class="col-lg-12">
									<input type="password" name="cpassword" class="form-control" id="password" placeholder="Confirm Password">
								  </div>
							</div>
                            
							<div class="form-group">
								<div class="col-lg-12 col-lg-offset-5">
									<input type="submit" name="submit" class="btn btn-primary" value="Sign Up">
								</div>
							</div>
						<?php
                            echo form_close();
                            ?>
                        <p>Already have an account <a href="login" class="btn btn-success">Login</a></p>
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>  
		</div>
	
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
	</body>	
</html>