<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('Australiana/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Create Data Australiana</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="desc_australiana">Deskripsi | Tidak Wajib</label>
                    <textarea rows="6" id="desc_australiana" name="desc_australiana" class="form-control" type="text" placeholder="desc_australiana" value="<?= set_value('desc_australiana'); ?>" autocomplete="off"></textarea>
                    <?= form_error('desc_australiana'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_australiana">Kategori</label><br>

                        <?= form_error('type_banner_home'); ?>
                        <select class="form-select form-select-lg" name="kategori_australiana" id="kategori_australiana" required>
                            <option value="" selected disabled>Pilih Tipe Kategori</option>
                            <option value="australiana zone">Australiana Zone</option>
                          
                           
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_australiana">Link Australiana | Tidak wajib</label>
                    <input id="link_australiana" name="link_australiana" class="form-control" type="text" placeholder="link_australiana" value="<?= set_value('link_australiana'); ?>" autocomplete="off">
                    <?= form_error('link_australiana'); ?>
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
                        <input accept="image/*" type="file" class="custom-file-input" id="img_australiana" name="img_australiana" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_australiana">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>


