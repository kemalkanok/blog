<?php $this->load->view('/admin/templates/header'); ?>
<?php $this->load->view('/admin/templates/navbar'); ?>
<?php $this->load->view('/admin/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
    <h1>Blog Page</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/blog">Listele</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog/create">Ekle</a></li>
        </ol>
    </nav>
    <table id="config_table" class="table table-hover table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
        <thead class="table-info">
            <tr>
                <th>İşlemler</th>
                <th>Ekleyen</th>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>İçerik</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blog as $row): ?>
            <tr>
                <td>Ekle-Sil</td>
                <td><?= $row->admin;  ?></td>
                <td><?= $row->title;  ?></td>
                <td><?= $row->category;  ?></td>
                <td><?= $row->content;  ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('/admin/templates/footer'); ?>