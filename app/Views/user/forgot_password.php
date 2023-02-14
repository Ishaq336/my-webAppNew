<style>
    body {
     background-color: #21638c; 
}   
</style>
<body>
		<div class="admin-form">
			<div class="widget wred">
				<div class="widget-head" style="text-align:center">
					  
                    My Project (Codeigniter)
				</div>
                <strong style="color:red;margin-left:50px;"><?php print_r($this->session->flashdata('message'));?></strong>  
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
                         
						<form method="post" action=''>
							<!-- Email -->
							<div class="form-group">
								 
								  <div class="col-lg-12">
									<input type="text" class="form-control" name="email" id="useremail" placeholder="User Name">
								  </div>
							</div>
							<br>
							<!-- Remember me checkbox and sign in button -->
							<div class="form-group">
								<div class="col-lg-12 col-lg-offset-5">
									<input type="submit" name="forgot_pass" class="btn btn-primary" value="Submit">
								</div>
                                
							</div>
                        </form>
                        <br>
                        
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