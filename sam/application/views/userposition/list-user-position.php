<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: inline-block;" >
    <div class="tile_count">
        <div class="col-md-12 col-sm-12 tile_stats_count">
            <div class="count">User Position</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel" style="border-radius: 8px">
            <div class="x_title">
                <button style="border-radius: 6px" type="submit" class="btn btn-primary mb-1 mt-2"><i class="fa fa-plus-circle "></i><a style="color: white;" href="<?php echo site_url('userposition/add') ?>"> New Data</a></button>   
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?php if (isset($error_message)): ?>
                    <p class="text-center" style="color: red;"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="dataUserPosition" class="table table-striped table-bordered text-center" width="100%">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Default Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(isset($userposition_list) && !empty($userposition_list)) : 
                                        $no = 1;
                                        foreach ($userposition_list as $up) {
                                            echo '<tr>';
                                            echo '<td>'.ucwords($up->up_name).'</td>';
                                            echo '<td>'.$up->up_default.'</td>';
                                            echo '<td>';
                                            echo '<div class="row">';
                                            echo '<div class="offset-sm-3 col-sm-3 col-md-3 ">';
                                            echo '<a href="'.site_url('userposition/edit/'.$up->up_id).'" ><i class="fa fa-pencil" title="Edit"></i></a>';
                                            echo '</div>';
                                            if($up->up_level <> 99 || ($up->up_level<>$userdata['level'])){
                                            echo '<div class="col-sm-3 col-md-3">';
                                            echo '<a href="'.site_url('userposition/remove/'.$up->up_id).'" onclick="return confirm(\'Are you sure to remove this?\')"><i id="deleteBtn" class="fa fa-trash" title="Hapus"></i></a>';
                                            echo '</div>';
                                            }
                                            echo '</div>';
                                            echo '</td>';

                                            $no++;
                                        }
                                    endif;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /top tiles -->
    <br />
</div>
<!-- /page content-->