<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <a href="<?= base_url('HubungiKami/create'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> New Post</a>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>No</th>
                <th>Title Hub Unit</th>
                <th>Alamat Hub Unit</th>
                <th>Title Hub Telp</th>
                <th>Isi Hub Telp</th>
                <th>Title Hub Email</th>
                <th>Isi Hub email</th>
                <th>Link Gmaps</th>
                <th>Title Hub Ikuti</th>
                <th>Link IG</th>
                <th>Link FB</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($hub as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <td width="100"><?= $row->title_hub; ?></td>
                        <td width="150"><?= $row->alamat_hub; ?></td>
                        <td width="100"><?= $row->title_hub_telp; ?></td>
                        <td width="100"><?= $row->isi_hub_telp; ?></td>
                        <td width="100"><?= $row->title_hub_email; ?></td>
                        <td width="100"><?= $row->isi_hub_email; ?></td>
                        <td width="100"><?= $row->link_gmap; ?></td>
                        <td width="100"><?= $row->title_hub_ikuti; ?></td>
                        <td width="100"><?= $row->link_ig; ?></td>
                        <td width="100"><?= $row->link_fb; ?></td>
                        <!-- <td width="150"><img class="img-fluid" src="<?= base_url('assets/dist/img/homes/plan/') . $row->img_plan;?>"></td> -->
                        <td width="100" class="text-right">
                            <div class="btn-group ml-2">
                                <a href="<?= base_url('HubungiKami/edit/') . $row->id_hub;?>" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('HubungiKami/delete/') . $row->id_hub; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>