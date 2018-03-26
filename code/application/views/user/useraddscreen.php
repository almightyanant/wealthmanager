<!-- Theme JS files -->
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/notifications/jgrowl.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/ui/moment/moment.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/pickers/daterangepicker.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/pickers/anytime.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/pickers/pickadate/picker.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/pickers/pickadate/picker.date.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/pickers/pickadate/picker.time.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/pickers/pickadate/legacy.js"); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url("assets/js/pages/picker_date.js"); ?>"></script>



	<script type="text/javascript" src="<?php echo base_url("assets/js/core/libraries/jasny_bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/inputs/autosize.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/inputs/formatter.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/inputs/passy.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/inputs/maxlength.min.js"); ?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url("assets/js/core/libraries/jquery_ui/interactions.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/pages/form_select2.js"); ?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/pickers/daterangepicker.js"); ?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/ui/moment/moment.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/pages/form_controls_extended.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/selects/select2.min.js"); ?>"></script>
	<!-- /theme JS filesfile:///C:/Users/anantsingh/Downloads/themeforest-13080328-limitless-responsive-web-application-kit/limitless_1_6/layout_3/LTR/default/user_pages_profile_tabbed.html -->
        
        
        <div class="box-margin panel panel-flat">   
    
    
    
    
    <div class="panel-body">
        
        <?php
        if(isset($flag) && $flag != ''){ 
            switch ($flag){
                case GLOBAL_FLAG_TRUE: ?>
                     <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
			<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold"><?php echo $data; ?></span> created successfully.
                    </div>
                    <?php break;
                case GLOBAL_FLAG_FALSE: ?>
                    <div class="alert alert-warning alert-styled-left">
			<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold"><?php echo SQLITE3_ERROR; ?></span>
                    </div>
                    <?php break;
            }
            
            }
        ?>
        
        <form name="adduser" action="<?php echo site_url("user/user_add"); ?>" method="post">
        <input type="hidden" name="licensekey" id="licensekey" value="<?php echo $_SESSION['licensekey']; ?>">
        <fieldset>
            <legend class="text-semibold"><i class="icon-info22 position-left"></i> User Information</legend>
                            

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Name of User</label>
                        <input type="text" value="" class="form-control" tabindex="1" name="name" id="name">
                    </div>
                    <div class="col-md-4">
                        <label>User Name</label>
                        <input type="text" value="" class="form-control" tabindex="2" name="username" id="username">
                    </div>
                    <div class="col-md-4">
                        <label>Password</label>
                        <input type="password" value="" class="form-control" tabindex="3" name="password" id="password">
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>User Role</label>
                        <select class="select" tabindex="4" name="roleid" id="roleid" data-placeholder="Select a User Role">
                            <?php
                            foreach($userrole as $k=>$v){ ?>
                            <option value="<?php echo $v['id']; ?>"><?php echo $v['childvaluename']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>
            
            <fieldset>
            <legend class="text-semibold"><i class="icon-info22 position-left"></i> Other Information</legend>
                            

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Address</label>
                        <input type="text" class="form-control" value="" tabindex="5" name="address" id="address">
                    </div>
                    <div class="col-md-4">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" value="" tabindex="6" name="mobile" id="mobile">
                    </div>
                </div>
            </div>
        </fieldset>
<div class="text-right">
    <button type="submit" class="btn btn-primary" tabindex="7">Save <i class="icon-arrow-right14 position-right"></i></button>
    <button class="btn bg-pink" tabindex="8" onclick="window.location.href = '<?php echo site_url('user/user_list'); ?>';return false;"><i class="icon-list-unordered position-left"></i>Back to List </button>
</div>
            
        
        </form>
    </div>
</div>
        
            
