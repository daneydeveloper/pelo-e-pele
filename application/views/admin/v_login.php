<style type="text/css">
	h5.heading{
		font-family: 'Poppins', sans-serif;
		color: #868686;
	}
	.form-control{
		font-family: 'Poppins', sans-serif;
		color:#868686!important;
	}
	.form-control:focus {
		border: 1px solid #ff465d;
	}
	.btn-login{
		font-family: 'Poppins', sans-serif;
		width: 100%;
		background-color: #ff465d;
		color: #ffffff;
		cursor: pointer;
	}
	.lock-screen {
		position: absolute;
		top: 120px;
		left: 50%;
		width: 300px;
		margin-left: -150px;
		text-align: center;
		background-color: white;
		padding: 10px 10px 0px 10px;
		border-radius: 4px;
	}
	::placeholder{
		color:#868686!important;
		opacity:1
	}
	:-ms-input-placeholder{
		color:#868686!important;
	}
	::-ms-input-placeholder{
		color:#868686!important;
	}
</style>
<form method="POST" action="<?=base_url('login/autenticar')?>">
	<div class="lock-screen">
		<h5 class="heading" style="">PAINEL ADMINISTRATIVO</h5>
		<div class="avatar">
			<img src="<?=base_url()?>/public/admin/img/usuario_default.png" alt="Unify Admin">
		</div>
		<div class="form-group">
			<input type="text" name="email" class="form-control" placeholder="E-mail:">
		</div>
		<div class="form-group">
			<input type="password" name="senha" class="form-control" placeholder="Senha:">
		</div>
		<div class="form-group">
			<button class="btn btn-login">ENVIAR</button>
		</div>
		<?php if (@$error): ?>
			<div class="alert custom alert-danger">
				<i class="icon-warning2"></i> <?=@$msg?>
			</div>
		<?php elseif(@$success): ?>
			<div class="alert custom alert-success">
				<i class="icon-tick"></i> <?=@$msg?>
			</div>
		<?php endif ?>
	</div>
</form>