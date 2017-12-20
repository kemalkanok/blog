<div class="container mt-4 mb-5">
	<form action="">
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="user_id">Blog yazısını oluşturan admin</label>
				<select class="form-control" id="user_id">
					<option value="-1">Seçiniz</option>
					<option value="0">Admin</option>
				</select>
			</div>
			<div class="form-group col-md-8">
				<label for="title">Başlık</label>
				<input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Blog başlığı">
				<small id="titleHelp" class="form-text text-muted">Gireceğiniz başlık 150 karakterden az olmalıdır.</small>
				<div class="invalid-feedback">
					Please provide a valid city.
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="content">İçerik</label>
			<textarea class="form-control w-100" id="content" aria-describedby="contentHelp" rows="10">Blog içeriğini buraya girebilirsiniz.</textarea>
			<small id="contentHelp" class="form-text text-muted">Gireceğiniz içerik 500 karakterden az olmalıdır.</small>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<a class="btn btn-primary btn-block" href="#" role="button">Geri</a>
			</div>
			<div class="col-md-2">
				<input class="btn btn-danger btn-block" type="submit" value="Oluştur">
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