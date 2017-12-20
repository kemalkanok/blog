<?php $this->load->view('/admin/templates/header'); ?>
<?php $this->load->view('/admin/templates/navbar'); ?>
<?php $this->load->view('/admin/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
    <h1>Category Page</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/category">Listele</a></li>
            <li class="breadcrumb-item"><a href="#">Ekle</a></li>
        </ol>
    </nav>
    <table id="config_table" class="table table-hover table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
        <thead class="table-info">
            <tr>
                <th>İşlemler</th>
                <th>İsim</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($category as $row): ?>
            <tr>
                <td>Ekle-Sil</td>
                <td><?= $row->name;  ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('/admin/templates/footer'); ?>