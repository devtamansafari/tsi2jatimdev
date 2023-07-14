<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('Package/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Edit Data Package</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
            <div class="form-group">
                    <label for="desc_package">Deskripsi</label>
                    <textarea rows="6" id="desc_package" name="desc_package" class="form-control" type="text" placeholder="desc_package" value="<?= set_value('desc_package', $data->desc_package); ?>" autocomplete="off"><?= set_value('desc_package', $data->desc_package); ?></textarea>
                    <?= form_error('desc_package'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_package">Kategori</label><br>

                        <?= form_error('type_banner_home'); ?>
                        <select class="form-select form-select-lg" name="kategori_package" id="kategori_package" required>
                           
                            <option value="<?= set_value('kategori_package', $data->kategori_package); ?>"><?= set_value('kategori_package', $data->kategori_package); ?></option>
                            <option value=""selected disabled>- Pilih Kategori Baru -</option>
                            <option value="harga tiket">Harga Tiket</option>
                          
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_package">Link Package</label>
                    <input id="link_package" name="link_package" class="form-control" type="text" placeholder="link_package" value="<?= set_value('link_package', $data->link_package); ?>" autocomplete="off">
                    <?= form_error('link_package'); ?>
                </div>
              
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Info Gambar</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
              
                <div class="form-group">
                    <label class="form-label" for="img_plan">New Images Upload</label>
                    <div class="custom-file">
                        <input accept="image/*,video/*" type="file" class="custom-file-input" id="img_package" name="img_package" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_package">Choose file</label>
                    </div>
                </div>

                <label class="form-label" for="old_img_plan">Old Image</label>
                <?php if ($data->img_package) : ?>
                    <img src="<?= base_url('assets/dist/img/safari/') . $data->img_package; ?>" alt="Image Plan" class="img-fluid w-100">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

