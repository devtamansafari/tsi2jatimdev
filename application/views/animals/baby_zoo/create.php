<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('BabyZoo/data'); ?>" class="btn btn-default">
        <i class="fa fa-arrow-left"></i> Back
    </a>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i> Save
    </button>
</div>`
<div class="row">
    <div class="col-md-8 order-last order-md-first">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Create Data Baby Zoo</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="desc_baby_zoo">Deskripsi | Tidak Wajib</label>
                    <textarea rows="6" id="desc_baby_zoo" name="desc_baby_zoo" class="form-control" type="text" placeholder="desc_baby_zoo" value="<?= set_value('desc_baby_zoo'); ?>" autocomplete="off"></textarea>
                    <?= form_error('desc_baby_zoo'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_baby_zoo">Kategori</label><br>

                        <?= form_error('type_banner_home'); ?>
                        <select class="form-select form-select-lg" name="kategori_baby_zoo" id="kategori_baby_zoo" required>
                            <option value="" selected disabled>Pilih Tipe Kategori</option>
                            <option value="foto satwa">foto satwa</option>
                            <option value="satwa tunggang">satwa tunggang</option>
                            <option value="aquatic land">aquatic land</option>
                           
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_baby_zoo">Link Baby Zoo | Tidak wajib</label>
                    <input id="link_baby_zoo" name="link_baby_zoo" class="form-control" type="text" placeholder="link_baby_zoo" value="<?= set_value('link_baby_zoo'); ?>" autocomplete="off">
                    <?= form_error('link_baby_zoo'); ?>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Upload Image</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label class="form-label" for="">Image Upload</label>
                    <div class="custom-file">
                        <input accept="image/*" type="file" class="custom-file-input" id="img_baby_zoo" name="img_baby_zoo" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_baby_zoo">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>


