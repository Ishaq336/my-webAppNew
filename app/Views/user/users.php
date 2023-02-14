

<div class="mainbar">
				<div class="page-head">
					<h2 class="pull-left">Users</h2>
					<div class="bread-crumb pull-right">
						<a href="admin/admin_home"><i class="fa fa-home"></i> Home</a>
						<span class="divider">/</span> 
						<a href="#" class="bread-current">Users</a>
					</div>
					<div class="clearfix"></div>
				</div>
                	<div class="matter">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
    <a data-toggle="modal" data-target="#adding" class="btn btn-primary">Add New User</a> 
                            </div>    
							<div class="col-md-12">
								<div class="widget wblue">
                <h4 style="color:red; text-align:center;">
                    <?php print_r($this->session->flashdata('msg'));?>
                    <?php print_r($this->session->flashdata('del_msg'));?>
                    <?php print_r($this->session->flashdata('upd_msg'));?>
                </h4>
                <div class="widget-content">
                    <div class="table-responsive">
                    <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="/itemDelete">Delete All Selected</button>    
                        <table class="table table-bordered">
                            <thead style="background-color:#1171a3 ;color:#fff">
                        <tr>
                            <th width="50px"><input type="checkbox" id="master"></th>
                            <th><strong>S.No</strong></th>
                            <th><strong>User Name</strong></th>
                            <th><strong>Email </strong></th>
                            <th><i class="icon-edit" style="color:#fff;"></i> Update</th>
                            <th><i class="icon-trash" style="color:#fff"></i><b> Delete</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$i = 1;
foreach($result as $rec)  
{
                        ?>
        <tr class="gradeA">
            <td><input type="checkbox" class="sub_chk" data-id="<?php echo $rec->user_id; ?>"></td>
            <td><?php echo $i?></td>
            <td><?php echo $rec->user_name;?></td>
            <td><?php echo $rec->email;?></td>
            <td><a class="btn btn-primary btn-sm" href="admin/update_subject/<?php echo $rec->user_id;?>">Update</a></td>
            <td><a class="btn btn-danger btn-sm" href="admin/delete_subject/<?php echo $rec->user_id;?>" 
                                   onclick="return confirm('Are You Sure to Delete This..?')"> Delete</a></td>
        </tr>
                        <?php
                $i++;
                }
                        ?>
                    </tbody>
                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!--/ Matter ends -->
</div><!--/ Mainbar ends -->	    	
<div class="clearfix"></div>

