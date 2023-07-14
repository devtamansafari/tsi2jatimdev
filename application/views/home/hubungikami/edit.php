<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('HubungiKami/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Edit Hub Kami</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title_hub">Title Hub</label>
                    <input id="title_hub" name="title_hub" class="form-control" type="text" placeholder="Title Hub..." value="<?= set_value('title_hub', $hub->title_hub); ?>" autocomplete="off">
                    <?= form_error('title_hub'); ?>
                </div>
                <div class="form-group">
                    <label for="alamat_hub">Alamat Hub</label>
                    <textarea id="summernote" class="form-control" rows="4" name="alamat_hub" placeholder="Alamat Hub"><?= set_value('alamat_hub', $hub->alamat_hub); ?></textarea>
                    <!-- <input id="alamat_hub" name="alamat_hub" class="form-control" type="text" placeholder="alamat_hub..." value="<?= set_value('alamat_hub', $hub->alamat_hub); ?>" autocomplete="off"> -->
                    <?= form_error('alamat_hub'); ?>
                </div>
                <div class="form-group">
                    <label for="title_hub_telp">Title Hub Telp</label>
                    <input id="title_hub_telp" name="title_hub_telp" class="form-control" type="text" placeholder="title_hub_telp..." value="<?= set_value('title_hub_telp', $hub->title_hub_telp); ?>" autocomplete="off" readonly>
                    <?= form_error('title_hub_telp'); ?>
                </div>
                <div class="form-group">
                    <label for="isi_hub_telp">Isi Hub Telp</label>
                    <textarea id="summernote" class="form-control" rows="4" name="isi_hub_telp" placeholder="isi_hub_telp"><?= set_value('isi_hub_telp', $hub->isi_hub_telp); ?></textarea>
                    <?= form_error('isi_hub_telp'); ?>
                </div>
                <div class="form-group">
                    <label for="title_hub_email">Title Hub Email</label>
                    <input id="title_hub_email" name="title_hub_email" class="form-control" type="text" placeholder="title_hub_email..." value="<?= set_value('title_hub_email', $hub->title_hub_email); ?>" autocomplete="off" readonly>
                    <?= form_error('title_hub_email'); ?>
                </div>
                <div class="form-group">
                    <label for="isi_hub_email">Isi Hub Email</label>
                    <textarea id="summernote" class="form-control" rows="4" name="isi_hub_email" placeholder="isi_hub_email"><?= set_value('isi_hub_email', $hub->isi_hub_email); ?></textarea>
                    <?= form_error('isi_hub_email'); ?>
                </div>
             
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Other Hub</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                
                <div class="form-group">
                    <label for="title_hub_ikuti">Title Hub Ikuti</label>
                    <input id="title_hub_ikuti" name="title_hub_ikuti" class="form-control" type="text" placeholder="title_hub_ikuti..." value="<?= set_value('title_hub_ikuti', $hub->title_hub_ikuti); ?>" autocomplete="off" readonly>
                    <?= form_error('title_hub_ikuti'); ?>
                </div>
                <div class="form-group">
                    <label for="link_gmap">Link Google Map</label>
                    <input id="link_gmap" name="link_gmap" class="form-control" type="text" placeholder="link_gmap..." value="<?= set_value('link_gmap', $hub->link_gmap); ?>" autocomplete="off">
                    <?= form_error('link_gmap'); ?>
                </div>
                <div class="form-group">
                    <label for="link_ig">Link Instagram</label>
                    <input id="link_ig" name="link_ig" class="form-control" type="text" placeholder="link_ig..." value="<?= set_value('link_ig', $hub->link_ig); ?>" autocomplete="off">
                    <?= form_error('link_ig'); ?>
                </div>
                <div class="form-group">
                    <label for="link_ig">Link Facebook</label>
                    <input id="link_fb" name="link_fb" class="form-control" type="text" placeholder="link_fb..." value="<?= set_value('link_fb', $hub->link_fb); ?>" autocomplete="off">
                    <?= form_error('link_fb'); ?>
                </div>

                <!-- <div class="form-group">
                    <label class="form-label" for="img_plan">New Images Plan</label>
                    <div class="custom-file">
                        <input accept="image/*" type="file" class="custom-file-input" id="img_plan" name="img_plan" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_plan">Choose file</label>
                    </div>
                </div> -->

               
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>