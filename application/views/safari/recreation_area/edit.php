<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('RecreationArea/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Edit Data Recreation Area</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
            <div class="form-group">
                    <label for="desc_recreation_area">Deskripsi</label>
                    <textarea rows="6" id="desc_recreation_area" name="desc_recreation_area" class="form-control" type="text" placeholder="desc_recreation_area" value="<?= set_value('desc_recreation_area', $data->desc_recreation_area); ?>" autocomplete="off"><?= set_value('desc_recreation_area', $data->desc_recreation_area); ?></textarea>
                    <?= form_error('desc_recreation_area'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_recreation_area">Kategori</label><br>

                        <?= form_error('type_banner_home'); ?>
                        <select class="form-select form-select-lg" name="kategori_recreation_area" id="kategori_recreation_area" required>
                           
                            <option value="<?= set_value('kategori_recreation_area', $data->kategori_recreation_area); ?>"><?= set_value('kategori_recreation_area', $data->kategori_recreation_area); ?></option>
                            <option value=""selected disabled>- Pilih Kategori Baru -</option>
                            <option value="amusement park">Amusement Park</option>
                            <option value="safari water world">Safari Water World</option>
                            <option value="elephant story">Elephant Story</option>
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_recreation_area">Link Recreation Area</label>
                    <input id="link_recreation_area" name="link_recreation_area" class="form-control" type="text" placeholder="link_recreation_area" value="<?= set_value('link_recreation_area', $data->link_recreation_area); ?>" autocomplete="off">
                    <?= form_error('link_recreation_area'); ?>
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
                        <input accept="image/*,video/*" type="file" class="custom-file-input" id="img_recreation_area" name="img_recreation_area" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_recreation_area">Choose file</label>
                    </div>
                </div>

                <label class="form-label" for="old_img_plan">Old Image</label>
                <?php if ($data->img_recreation_area) : ?>
                    <img src="<?= base_url('assets/dist/img/safari/') . $data->img_recreation_area; ?>" alt="Image Plan" class="img-fluid w-100">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

