
<!-- Theme JS files

file:///C:/Users/anantsingh/Downloads/themeforest-13080328-limitless-responsive-web-application-kit/limitless_1_6/layout_2/LTR/default/datatable_api.html
-->
<!-- /theme JS files -->

<!-- Individual column searching (text inputs) -->
<div class="box-margin panel panel-flat" >
    <div class="panel-heading">
        <h5 class="panel-title">List of All Users</h5>
            <div class="heading-elements">
                <button type="button" class="btn bg-teal" onclick="window.location.href = '<?php echo site_url('user/user_add_screen'); ?>';return false;"><i class="icon-add position-left"></i> Add User</button>
                <button type="button" class="btn bg-teal"><i class="icon-file-excel position-left"></i> Export to .csv</button>
                
            </div>
    </div>

    <table class="dataTables_wrapper_wealthmanager table datatable-column-search-inputs">
        <thead>
            <tr>
                <th>Name of User</th>
                <th>Role of User</th>
                <th>User Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th class="text-center nosort">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
            if(is_array($userlist) && count($userlist) > 0){
                foreach ($userlist as $key=>$value){ ?>
            <tr>
                <td><?php echo $value['name']; ?></td>
                <td><span class="label label-flat border-pink text-pink-600"><?php echo $value['childvaluename']; ?></span></td>
                <td><?php echo $value['username']; ?></td>
                <td><?php echo $value['address']; ?></td>
                <td><?php echo $value['mobile']; ?></td>
                <td class="text-center">
                    <div class="btn-group heading-btn">
                        <button type="button" class="btn bg-grey btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-menu6"></i> 
                            <span class="caret" style=""></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated line</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
                <?php }
            } else { ?>
            <tr>
                <td colspan="5"><h6 class="no-margin text-light text-warning text-center">No User Created</h6></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Name</td>
                <td>Role</td>
                <td>User Name</td>
                <td>Address</td>
                <td>Mobile</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>
<!-- /individual column searching (text inputs) -->
