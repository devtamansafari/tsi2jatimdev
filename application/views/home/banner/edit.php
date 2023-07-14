<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('HomeBanner/data'); ?>" class="btn btn-default">
        <i class="fa fa-arrow-left"></i> Back
    </a>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i> Save Changes
    </button>
</div>
<div class="row">
    <div class="col-md-8 order-last order-md-first">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Edit Banner Home</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="type_banner_home">Type Banner</label>
                    <input id="type_banner_home" name="type_banner_home" class="form-control" type="text" placeholder="type_banner_home" value="<?= set_value('type_banner_home', $banner->type_banner_home); ?>" autocomplete="off">
                    <?= form_error('type_banner_home'); ?>
                </div>
                <div class="form-group">
                    <label for="link_banner_home">Link Tujuan Banner | Jika kosong isi # saja</label>
                    <input id="link_banner_home" name="link_banner_home" class="form-control" type="text" placeholder="link_banner_home" value="<?= set_value('link_banner_home', $banner->link_banner_home); ?>" autocomplete="off">
                    <?= form_error('link_banner_home'); ?>
                </div>
              
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Plan Info</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
              
                <div class="form-group">
                    <label class="form-label" for="img_plan">New Images/video Banner Home</label>
                    <div class="custom-file">
                        <input accept="image/*,video/*" type="file" class="custom-file-input" id="img_banner_home" name="img_banner_home" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_banner_home">Choose file</label>
                    </div>
                </div>

                <label class="form-label" for="old_img_plan">Old Image / Video</label>


                     <?php if($banner->type_banner_home == "Video"){?>
                            <h5>Videonya ada namun tidak saya tampilkan :p</h5>
                            <?php }else{ ?>
    
                <?php if ($banner->img_banner_home) : ?>
                    <img src="<?= base_url('assets/dist/img/homes/banner/') . $banner->img_banner_home; ?>" alt="Image Plan" class="img-fluid w-100">
                <?php endif; ?>

                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>