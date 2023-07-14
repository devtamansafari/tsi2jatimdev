<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <a href="<?= base_url('PlanYourVisit/create'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> New Post</a>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>No</th>
                <th>Title Plan</th>
                <th>Desc Plan</th>
                <th>Gambar</th>
                <th>Link Detail Plan</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($plan as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <!-- <td width="150"><?= $row->id_plan; ?></td> -->
                        <td width="100"><?= $row->title_plan; ?></td>
                        <td><?= $row->desc_plan; ?></td>
                        <td width="150"><img class="img-fluid" src="<?= base_url('assets/dist/img/homes/plan/') . $row->img_plan;?>"></td>
                        <td width="150"><?= $row->link_detail_plan; ?></td>
                        <td width="100" class="text-right">
                            <div class="btn-group ml-2">
                                <a href="<?= base_url('PlanYourVisit/edit/') . $row->id_plan;?>" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('PlanYourVisit/delete/') . $row->id_plan; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>