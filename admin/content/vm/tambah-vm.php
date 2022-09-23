<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Visi - Misi</h3>
            </div>

            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                    <div class="x_title">
                        <!-- <h2>Form Design <small>different form elements</small></h2> -->
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-minus"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="simpan-vm.php" method="POST" class="form-horizontal form-label-left">
                            <div class="item form-group">
                                <label class="col-form-label col-md-1">Visi</label>
                                <div class="col-md-11 col-sm-12 ">
                                    <textarea name="visi" id="isi"></textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-1">Misi</label>
                                <div class="col-md-11 col-sm-12 ">
                                    <textarea name="misi" id="isi2"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12">
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <input type="submit" name="" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('../footer.php');?>
