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
        
        <form name="addentity" action="<?php echo site_url("entity/entity_add"); ?>" method="post">
        <fieldset>
            <legend class="text-semibold"><i class="icon-info22 position-left"></i> Entity Information</legend>
                            

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Entity Name</label>
                        <input type="text" value="" class="form-control text-uppercase" tabindex="1" name="entityname" id="entityname">
                    </div>
                    <div class="col-md-4">
                        <label>Entity Type</label>
                        <select class="select" tabindex="2" name="entitytypeid" id="entitytypeid" data-placeholder="Select an Entity Type">
                            <?php
                            foreach($entitytypes as $k=>$v){ ?>
                            <option value="<?php echo $v['id']; ?>"><?php echo $v['childvaluename']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Tax Reference Number</label>
                        <input type="text" value="" class="form-control text-uppercase" tabindex="3" name="taxreference" id="taxreference">
                    </div>
                </div>
            </div>
        </fieldset>
            
            <fieldset>
            <legend class="text-semibold"><i class="icon-info22 position-left"></i> Accounting Information</legend>
                            

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Book Start Date</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                            <input type="text" class="form-control pickadate-format" value="" tabindex="4" name="bookstartdate" id="bookstartdate">                        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Accounting Year</label>
                        <select class="select" tabindex="5" name="accountingyear" id="accountingyear">
                            <option value="1st Jan - 31st Dec">1st Jan - 31st Dec</option>
                            <option value="1st Feb - 31st Jan">1st Feb - 31st Jan</option>
                            <option value="1st Mar - 28th Feb">1st Mar - 28th Feb</option>
                            <option value="1st Apr - 31st Mar">1st Apr - 31st Mar</option>
                            <option value="1st May - 30th Apr">1st May - 30th Apr</option>
                            <option value="1st Jun - 31st May">1st Jun - 31st May</option>
                            <option value="1st Jul - 30th Jun">1st Jul - 30th Jun</option>
                            <option value="1st Aug - 31st Jul">1st Aug - 31st Jul</option>
                            <option value="1st Sept - 31st Aug">1st Sept - 31st Aug</option>
                            <option value="1st Oct - 30th Sept">1st Oct - 30th Sept</option>
                            <option value="1st Nov - 31st Oct">1st Nov - 31st Oct</option>
                            <option value="1st Dec - 30th Nov">1st Dec - 30th Nov</option>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>
<div class="text-right">
    <button type="submit" class="btn btn-primary" tabindex="6">Save <i class="icon-arrow-right14 position-right"></i></button>
    <button class="btn bg-pink" tabindex="8" onclick="window.location.href = '<?php echo site_url('entity/entity_list'); ?>';return false;"><i class="icon-list-unordered position-left"></i>Back to List </button>
</div>
            
        
        </form>
    </div>
</div>
        
            
