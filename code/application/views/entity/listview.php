
<!-- Theme JS files

file:///C:/Users/anantsingh/Downloads/themeforest-13080328-limitless-responsive-web-application-kit/limitless_1_6/layout_2/LTR/default/datatable_api.html
-->
<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/tables/datatables/datatables.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/selects/select2.min.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/pages/datatables_api.js"); ?>"></script>
<!-- /theme JS files -->

<!-- Individual column searching (text inputs) -->
<div class="box-margin panel panel-flat" >
    <div class="panel-heading">
        <h5 class="panel-title">List of All Entities</h5>
            <div class="heading-elements">
                <button type="button" class="btn btn-primary"><i class="icon-add position-left"></i> Add Entity</button>
                <button type="button" class="btn btn-primary"><i class="icon-file-excel position-left"></i> Export to .csv</button>
                
            </div>
    </div>

    <table id="entitylistview" class="dataTables_wrapper_wealthmanager table datatable-column-search-inputs">
        <thead>
            <tr>
                <th>Entity</th>
                <th>PAN Card</th>
                <th>Book Start date</th>
                <th>No. of Positions</th>
                <th class="text-center nosort">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
            if(is_array($entitylist) && count($entitylist) > 0){
                foreach ($entitylist as $key=>$value){ ?>
            <tr>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['pancard']; ?></td>
                <td><?php echo $value['bookstartdate']; ?></td>
                <td><?php echo '0'; ?></td>
                <td class="text-center">
                    <div class="btn-group heading-btn">
                        <button type="button" class="btn btn-success btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
                <td colspan="5"><h6 class="no-margin text-light text-warning text-center">No Entity Created</h6></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Entity</td>
                <td>PAN Card</td>
                <td>Start date</td>
                <td>Positions</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>
<!-- /individual column searching (text inputs) -->
