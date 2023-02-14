<?= base_url(); ?>
<body>
		<div class="admin-form">
			<div class="widget wred">
				<div class="widget-head" style="text-align:center">
					  
                    My Project (Codeigniter)
				</div>
                <strong style="color:red;margin-left:50px;"></strong>  
                <div class="alert alert-danger alert-dismissable center">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <strong></div>
				<div class="widget-content">
					<div class="padd">
				    <img src="<?= base_url(); ?>/public/img/logogreen.png" width="120px" height="120px" style="margin-left:150px">
                        
						
							<!-- Email -->
							<div class="form-group">
								 
								  <div class="col-lg-12">
									<input type="text" class="form-control" name="useremail" id="useremail" placeholder="User Name">
								  </div>
							</div>
							<!-- Password -->
							<div class="form-group">
								  
								  <div class="col-lg-12">
									<input type="password" name="password" class="form-control" id="password" placeholder="Password">
								  </div>
							</div>
							<!-- Remember me checkbox and sign in button -->
							<div class="form-group">
								<div class="col-lg-12 col-lg-offset-5">
									<input type="submit" name="submit" class="btn btn-primary" value="Login">
								</div>
                                
							</div>
						
                        <br>
                        <p>If Not Registered Then <a href="signup" class="btn btn-success">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <a href="forgot_password" class="btn btn-primary">Forgot Password</a></p>
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>  
		</div>
	
		<script src="<?= base_url(); ?>/public/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?= base_url(); ?>/public/js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="<?= base_url(); ?>/public/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="<?= base_url(); ?>/public/js/html5shiv.js"></script>
	</body>	
</html>