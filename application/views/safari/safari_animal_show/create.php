<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('SafariAnimalShow/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Create Data Safari Animal Show</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="desc_safari_animal_show">Deskripsi | Tidak Wajib</label>
                    <textarea rows="6" id="desc_safari_animal_show" name="desc_safari_animal_show" class="form-control" type="text" placeholder="desc_safari_animal_show" value="<?= set_value('desc_safari_animal_show'); ?>" autocomplete="off"></textarea>
                    <?= form_error('desc_safari_animal_show'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_safari_animal_show">Kategori</label><br>

                        <?= form_error('type_banner_home'); ?>
                        <select class="form-select form-select-lg" name="kategori_safari_animal_show" id="kategori_safari_animal_show" required>
                            <option value="" selected disabled>Pilih Tipe Kategori</option>
                            <option value="elephant story">Elephant Story</option>
                            <option value="Dolphin and Friend">Dolphin and Friend</option>
                            <option value="mysterious jungle">Mysterious Jungle</option>
                            <option value="tiger show">Tiger Show</option>
                            <option value="dog horse show">Dog Horse Show</option>
                            <option value="bird show">Bird Show</option>
                            <option value="temple of terror">Temple of Terror</option>
                        
                           
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_safari_animal_show">Link Safari Animal Show | Tidak wajib</label>
                    <input id="link_safari_animal_show" name="link_safari_animal_show" class="form-control" type="text" placeholder="link_safari_animal_show" value="<?= set_value('link_safari_animal_show'); ?>" autocomplete="off">
                    <?= form_error('link_safari_animal_show'); ?>
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
                        <input accept="image/*" type="file" class="custom-file-input" id="img_safari_animal_show" name="img_safari_animal_show" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_safari_animal_show">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>


