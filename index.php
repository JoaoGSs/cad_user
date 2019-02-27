<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Cadastro Usuário </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Login</th>
					<th>Senha</th>
					<th>Situação</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM tb_usuario";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['login']; ?></td>
					<td>***********</td>
					<td><?php echo $dados['situacao']; ?></td>
				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar usuário</a>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

