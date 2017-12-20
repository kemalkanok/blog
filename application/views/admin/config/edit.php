<?php $this->load->view('/admin/templates/header'); ?>
<?php $this->load->view('/admin/templates/navbar'); ?>
<?php $this->load->view('/admin/templates/sidebar'); ?>
<div class="container-fluid mt-4 mb-5">
	<h1>Edit Sayfası</h1>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/ayarlar">Listele</a></li>
            <li class="breadcrumb-item"><a href="/ayar/olustur">Ekle</a></li>
        </ol>
    </nav>
	<?php echo form_open('ayar/<?= $config->id; ?>/duzenle'); ?>
		<div class="form-row">
	    	<input type="hidden" name="id" value="<?= $config->id; ?>">
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="name">İsim</label>
       			<input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Ayar için isim giriniz" value="<?= $config->name; ?>">
				<small id="nameHelp" class="form-text text-muted"><?= form_error('name', '<div class="error text-danger small text-danger small">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="value">Değer</label>
       			<input type="text" class="form-control" name="value" id="value" aria-describedby="valueHelp" placeholder="Ayar için isim giriniz" value="<?= $config->value; ?>">
				<small id="valueHelp" class="form-text text-muted"><?= form_error('value', '<div class="error text-danger small text-danger small">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/ayar/<?= $config->id; ?>/detay" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="/ayar/<?= $config->id; ?>/duzenle" role="button">Düzenle</a>
			</div>
		</div>
	</form>
</div>
<script>
(function() {
	'use strict';
	window.addEventListener('load', function() {
		var form = document.getElementById('needs-validation');
		form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		}, false);
	}, false);
})();
</script>
<?php $this->load->view('/admin/templates/footer'); ?>