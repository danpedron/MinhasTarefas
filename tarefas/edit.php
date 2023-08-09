<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<h2>Atualizar tarefa</h2>

<form action="edit.php?id=<?php echo $tarefa['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-12">
      <label for="txtDescricao">Descricao</label>
      <input type="text" class="form-control" name="tarefa['descricao']" id="txtDescricao" value="<?php echo $tarefa['descricao']; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Data/Hora</label>
      <input type="text" class="form-control" name="tarefa['datahora']" value="<?php echo $tarefa['datahora']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Concluída</label>
      <input type="text" class="form-control" name="tarefa['concluida']" value="<?php echo $tarefa['concluida']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Prioridade</label>
      <input type="text" class="form-control" name="tarefa['prioridade']" value="<?php echo $tarefa['prioridade']; ?>">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>

</form>

<script>
document.getElementById("txtDescricao").focus();
</script>

<?php include('modal_upload.php'); ?>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<?php include(FOOTER_TEMPLATE); ?>
