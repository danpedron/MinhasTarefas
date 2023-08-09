<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Tarefa ID #<?php echo $tarefa['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Descricao:</dt>
	<dd><?php echo $tarefa['descricao']; ?></dd>

	<dt>Data/Hora:</dt>
	<dd><?php echo $tarefa['datahora']; ?></dd>

	<dt>Concluída:</dt>
	<dd><?php echo $tarefa['concluida']; ?></dd>

	<dt>Prioridade:</dt>
	<dd><?php echo $tarefa['prioridade']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $tarefa['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
