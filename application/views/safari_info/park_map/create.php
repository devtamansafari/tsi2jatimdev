<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('ParkMap/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Create Data Park Map</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="desc_park_map">Deskripsi | Tidak Wajib</label>
                    <textarea rows="6" id="desc_park_map" name="desc_park_map" class="form-control" type="text" placeholder="desc_park_map" value="<?= set_value('desc_park_map'); ?>" autocomplete="off"></textarea>
                    <?= form_error('desc_park_map'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_park_map">Kategori</label><br>

                        <?= form_error('type_banner_home'); ?>
                        <select class="form-select form-select-lg" name="kategori_park_map" id="kategori_park_map" required>
                            <option value="" selected disabled>Pilih Tipe Kategori</option>
                            <option value="the park map">The Park Map</option>
                           
                          
                           
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_park_map">Link Park Map | Tidak wajib</label>
                    <input id="link_park_map" name="link_park_map" class="form-control" type="text" placeholder="link_park_map" value="<?= set_value('link_park_map'); ?>" autocomplete="off">
                    <?= form_error('link_park_map'); ?>
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
                        <input accept="image/*" type="file" class="custom-file-input" id="img_park_map" name="img_park_map" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_park_map">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>


