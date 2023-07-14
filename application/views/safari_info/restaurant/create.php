<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('Restaurant/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Create Data Restaurant</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="desc_restaurant">Deskripsi | Tidak Wajib</label>
                    <textarea rows="6" id="desc_restaurant" name="desc_restaurant" class="form-control" type="text" placeholder="desc_restaurant" value="<?= set_value('desc_restaurant'); ?>" autocomplete="off"></textarea>
                    <?= form_error('desc_restaurant'); ?>
                </div>
                <div class="form-group">
                        <label for="desc_restaurant">Kategori</label><br>

                        <?= form_error('kategori_restaurant'); ?>
                        <select class="form-select form-select-lg" name="kategori_restaurant" id="kategori_restaurant" required>
                            <option value="" selected disabled>Pilih Tipe Kategori</option>
                            <option value="captain crocs">Captain Croc's</option>
                            <option value="gading restaurant">Gading Restaurant</option>
                            <option value="safari fried chicken">Safari Fried Chicken</option>
                            <option value="tiger cave restaurant">tiger cave restaurant</option>
                            <option value="warung ndeso">Warung Ndeso</option>
                           
                          
                           
                        </select>
                    </div>
                  
                <div class="form-group">
                    <label for="link_restaurant">Link Restaurant | Tidak wajib</label>
                    <input id="link_restaurant" name="link_restaurant" class="form-control" type="text" placeholder="link_restaurant" value="<?= set_value('link_restaurant'); ?>" autocomplete="off">
                    <?= form_error('link_restaurant'); ?>
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
                        <input accept="image/*" type="file" class="custom-file-input" id="img_restaurant" name="img_restaurant" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_restaurant">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>


