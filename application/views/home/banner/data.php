<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <a href="<?= base_url('HomeBanner/create'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> New Post</a>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>No</th>
                <th>Gambar/Video</th>
                <th>Type Banner</th>
                <th>Link Tujuan</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($ban as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <td width="100"><img width="125px" src="<?= base_url('assets/dist/img/homes/banner/') ?><?= $row->img_banner_home; ?>"></td>
                        <td width="150"><?= $row->type_banner_home; ?></td>
                        <td width="150"><?= $row->link_banner_home; ?></td>
                       
                        <!-- <td width="150"><img class="img-fluid" src="<?= base_url('assets/dist/img/homes/plan/') . $row->img_plan;?>"></td> -->
                        <td width="100" class="text-right">
                            <div class="btn-group ml-2">
                                <a href="<?= base_url('HomeBanner/edit/') . $row->id_banner_home;?>" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('HomeBanner/delete/') . $row->id_banner_home; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>