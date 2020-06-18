<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: inline-block;" >
    <div class="tile_count">
        <div class="col-md-12 col-sm-12 tile_stats_count">
            <div class="count">User Management</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel" style="border-radius: 8px">
            <div class="x_title">
                <button style="border-radius: 6px" type="submit" class="btn btn-primary mb-1 mt-2"><i class="fa fa-plus-circle "></i><a style="color: white;" href="<?php echo site_url('user/add') ?>"> New Data</a></button>   
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="dataUser" class="table table-striped table-bordered text-center" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NPP</th>
                                        <th>Nama</th>
                                        <th>Wilayah</th>
                                        <th>Cabang/Divisi</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>	  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>89956</td>
                                        <td><a href="<?php echo site_url('user/detail')?>" title="User Detail">Ramadhan Nugraha</a></td>
                                        <td>Jabodetabek</td>
                                        <td>KC Fatmawati</td>
                                        <td>Back Office Head</td>
                                        <td>
                                            <div class="row">
                                                <div class="offset-sm-1 col-sm-3 col-md-3 ">
                                                    <a href="<?php echo site_url('user/edit') ?>"><i class="fa fa-pencil" title="Edit"></i></a>
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                    <a href=""><i id="deleteBtn" class="fa fa-trash" title="Delete"></i></a>
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                    <a href=""><i class="fa fa-key" title="Reset Password"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>87335</td>
                                        <td><a href="<?php echo site_url('user/detail')?>" title="User Detail">Annisa Hapsari</a></td>
                                        <td>Jabodetabek</td>
                                        <td>KCP Tanah Sareal</td>
                                        <td>Sales Assistant</td>
                                        <td>
                                            <div class="row">
                                                <div class="offset-sm-1 col-sm-3 col-md-3 ">
                                                    <a href="<?php echo site_url('user/edit') ?>"><i class="fa fa-pencil" title="Edit"></i></a>
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                    <a href=""><i id="deleteBtn" class="fa fa-trash" title="Delete"></i></a>
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                    <a href=""><i class="fa fa-key" title="Reset Password"></i></a>
                                                </div>
                                            </div>
                                        </td>	
                                    </tr>
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
