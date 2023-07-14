<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('SafariAdventure/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Edit Data Safari Adventure</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
            <div class="form-group">
                    <label for="desc_safari_adventure">Deskripsi</label>
                    <textarea rows="6" id="desc_safari_adventure" name="desc_safari_adventure" class="form-control" type="text" placeholder="desc_safari_adventure" value="<?= set_value('desc_safari_adventure', $data->desc_safari_adventure); ?>" autocomplete="off"><?= set_value('desc_safari_adventure', $data->desc_safari_adventure); ?></textarea>
                    <?= form_error('desc_safari_adventure'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_safari_adventure">Kategori</label><br>

                        <?= form_error('type_banner_home'); ?>
                        <select class="form-select form-select-lg" name="kategori_safari_adventure" id="kategori_safari_adventure" required>
                           
                            <option value="<?= set_value('kategori_safari_adventure', $data->kategori_safari_adventure); ?>"><?= set_value('kategori_safari_adventure', $data->kategori_safari_adventure); ?></option>
                            <option value=""selected disabled>- Pilih Kategori Baru -</option>
                            <option value="zona afrika">Zona Afrika</option>
                            <option value="zona amerika eropa">Zona Amerika Eropa</option>
                            <option value="zona asia"> zona asia</option>
                            <option value="zona australia">zona australia</option>
                            <option value="zona karnivora">zona karnivora</option>
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_safari_adventure">Link Safari Adventure</label>
                    <input id="link_safari_adventure" name="link_safari_adventure" class="form-control" type="text" placeholder="link_safari_adventure" value="<?= set_value('link_safari_adventure', $data->link_safari_adventure); ?>" autocomplete="off">
                    <?= form_error('link_safari_adventure'); ?>
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
                        <input accept="image/*,video/*" type="file" class="custom-file-input" id="img_safari_adventure" name="img_safari_adventure" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_safari_adventure">Choose file</label>
                    </div>
                </div>

                <label class="form-label" for="old_img_plan">Old Image</label>
                <?php if ($data->img_safari_adventure) : ?>
                    <img src="<?= base_url('assets/dist/img/safari/') . $data->img_safari_adventure; ?>" alt="Image Plan" class="img-fluid w-100">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

