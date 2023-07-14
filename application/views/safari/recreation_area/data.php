<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <a href="<?= base_url('RecreationArea/create'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create</a>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>#</th>
                <th>Gambar</th>
                <th>Desc</th>
                <th>Kategori</th>
                <th>link</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($data as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <td width="100"><img width="125px" src="<?= base_url('assets/dist/img/safari/') ?><?= $row->img_recreation_area; ?>"></td>
                        <td width="150"><?= $row->desc_recreation_area; ?></td>
                        <td width="150"><?= $row->kategori_recreation_area; ?></td>
                        <td width="150"><?= $row->link_recreation_area; ?></td>
                        <td width="100" class="text-right">
                            <div class="btn-group">
                                <a href="<?= base_url('RecreationArea/edit/') . $row->id_recreation_area; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('RecreationArea/delete/') . $row->id_recreation_area; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>