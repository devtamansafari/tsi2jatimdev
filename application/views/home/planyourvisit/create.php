<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('PlanYourVisit/data'); ?>" class="btn btn-default">
        <i class="fa fa-arrow-left"></i> Back
    </a>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i> Save
    </button>
</div>
<div class="row">
    <div class="col-md-8 order-last order-md-first">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Create Content Plan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title_plan">Title Plan</label>
                    <input id="title_plan" name="title_plan" class="form-control" type="text" placeholder="Post Title..." value="<?= set_value('post_title'); ?>" autocomplete="off">
                    <?= form_error('title_plan'); ?>
                </div>
                <label for="summernote">Description Plan</label>
                <textarea class="form-control" rows="6" name="desc_plan" placeholder="Desc Plan.."><?= set_value('post_body'); ?></textarea>
                <!-- <textarea id="summernote" class="form-control" rows="6" name="desc_plan" placeholder="Post Body.."><?= set_value('post_body'); ?></textarea> -->
                <?= form_error('desc_plan'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Plan Images Info</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label class="form-label" for="post_thumbnail">Image Plan</label>
                    <div class="custom-file">
                        <input accept="image/*" type="file" class="custom-file-input" id="img_plan" name="img_plan" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_plan">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>