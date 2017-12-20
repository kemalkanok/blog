<div class="container mt-5">
	<form action="/main/login" method="post">
		<div class="form-group input-group input-group-lg">
			<input type="email" class="form-control" name="email" aria-describedby="basic-addon1" placeholder="Email adresinizi giriniz" value="<?php echo set_value('email'); ?>">
			<span class="input-group-addon" id="basic-addon1"><i class="fas fa-envelope"></i></span>
		</div>
		<div class="form-group input-group input-group-lg">
			<input type="password" class="form-control" name="password" aria-describedby="basic-addon2" placeholder="Şifrenizi giriniz">
			<span class="input-group-addon" id="basic-addon2"><i class="fas fa-key"></i></span>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-block btn-lg" value="Giriş">
		</div>
		<div class="form-group">
			<?php if($this->session->flashdata('validation')): ?>
				<button type="button" class="btn btn-danger btn-lg btn-block btn-lg"><strong><?php echo $this->session->flashdata('validation'); ?></strong></button>
			<?php endif; ?>
		</div>
	</form>
</div>