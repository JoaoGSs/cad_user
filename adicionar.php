<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Usuário </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" placeholder="Digite seu nome" id="nome" required>
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="login" placeholder="Digite seu login" id="login" required>
				<label for="login">login</label>
			</div>

			<div class="input-field col s12">
				<input type="password" name="senha" placeholder="Digite sua senha" id="senha" required>
				<label for="senha">senha</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de usuários </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
