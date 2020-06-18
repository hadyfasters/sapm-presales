<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <!-- <div class="row" style="display: inline-block;" >
        <div class="tile_count">
            <div class="col-md-12 col-sm-12 tile_stats_count">
                <div class="count">Form Input User</div>
            </div>
        </div>
    </div> -->

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel" style="border-radius: 8px">
            <div class="x_title">
                <h2 class="font-weight-bold" style="font-size: 2em">Form Create User</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="formInputUser" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="npp">NPP</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="npp" name="npp" class="form-control" style="border-radius: 6px" placeholder="NPP" data-error=".errorTxt1">
                            <div class="errorTxt1" style="color:red"></div>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="nama" name="nama" class="form-control" style="border-radius: 6px" placeholder="Nama" data-error=".errorTxt2">
                            <div class="errorTxt2" style="color:red"></div>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="wilayah">Wilayah</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select style="border-radius: 6px; color: #495057;" id="wilayah" name="wilayah" class="form-control" data-error=".errorTxt3">
                                <option value="">Pilih Wilayah..</option>
                                <?php 
                                if(isset($region_list)) : 
                                    foreach ($region_list as $wil) {
                                        echo '<option value="'.$wil->id_region.'">'.$wil->name.'</option>';
                                    }
                                endif 
                                ?>
                            </select>
                            <div class="errorTxt3" style="color:red"></div>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cabang">Cabang</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select style="border-radius: 6px; color: #495057;" id="cabang" name="cabang" class="form-control" data-error=".errorTxt4">
                                <option value="">Pilih Cabang..</option>
                                <?php 
                                if(isset($branch_list)) : 
                                    foreach ($branch_list as $branch) {
                                        echo '<option value="'.$branch->id_branch.'">'.$branch->name.'</option>';
                                    }
                                endif 
                                ?>
                            </select>
                            <div class="errorTxt4" style="color:red"></div>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="jabatan">Jabatan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select style="border-radius: 6px; color: #495057;" id="jabatan" name="jabatan" class="form-control" data-error=".errorTxt5">
                                <option value="">Pilih Jabatan..</option>
                                <?php 
                                if(isset($userposition_list)) : 
                                    foreach ($userposition_list as $userpos) {
                                        echo '<option value="'.$userpos->up_id.'">'.$userpos->up_name.'</option>';
                                    }
                                endif 
                                ?>
                            </select>
                            <div class="errorTxt5" style="color:red"></div>
                        </div>
                    </div>
                    <div id="salesSelected"></div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-secondary" type="button" value="Cancel" id="btnCancel" form="formInputUser">Cancel</button>
                            <button class="btn btn-success" type="submit" value="Submit" form="formInputUser">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- /top tiles -->
    <br />
</div>
<!-- /page content-->       