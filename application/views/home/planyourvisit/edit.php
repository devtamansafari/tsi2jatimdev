<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('PlanYourVisit/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Edit Plan</h3>

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
                    <input id="title_plan" name="title_plan" class="form-control" type="text" placeholder="Title Plan..." value="<?= set_value('title_plan', $plan->title_plan); ?>" autocomplete="off">
                    <?= form_error('title_plan'); ?>
                </div>
                <label for="summernote">Desc Plan</label>
                <textarea class="form-control" rows="6" name="desc_plan" placeholder="Post Body.."><?= set_value('desc_plan', $plan->desc_plan); ?></textarea>
                <!-- <textarea id="summernote" class="form-control" rows="6" name="post_body" placeholder="Post Body.."><?= set_value('desc_plan', $plan->desc_plan); ?></textarea> -->
                <?= form_error('desc_plan'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Plan Info</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
              
                <div class="form-group">
                    <label class="form-label" for="img_plan">New Images Plan</label>
                    <div class="custom-file">
                        <input accept="image/*" type="file" class="custom-file-input" id="img_plan" name="img_plan" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="img_plan">Choose file</label>
                    </div>
                </div>

                <label class="form-label" for="old_img_plan">Old Image</label>
                <?php if ($plan->img_plan) : ?>
                    <img src="<?= base_url('assets/dist/img/homes/plan/') . $plan->img_plan; ?>" alt="Image Plan" class="img-fluid w-100">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>