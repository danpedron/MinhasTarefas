<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<h2>Nova tarefa</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-12">
      <label for="txtDescricao">Descricao</label>
      <input type="text" class="form-control" name="tarefa['descricao']" id="txtDescricao">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Data/Hora</label>
      <input type="text" class="form-control" name="tarefa['datahora']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Concluída</label>
      <input type="text" class="form-control" name="tarefa['concluida']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Prioridade</label>
      <input type="text" class="form-control" name="tarefa['prioridade']">
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

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<?php include(FOOTER_TEMPLATE); ?>
