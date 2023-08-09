<!-- Modal de upload -->
<div class="modal fade" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modaluploadLabel">Enviar arquivo</h4>
      </div>
      <div class="modal-body">
          <form enctype="multipart/form-data" action="upload.php" method="POST">
            <!-- MAX_FILE_SIZE deve preceder o campo input -->
            <input type="hidden" name="MAX_FILE_SIZE" value="8388608" />
            <!-- O Nome do elemento input determina o nome da array $_FILES -->
            <input name="userfile" type="file" />
          </form>
      </div>
      <div class="modal-footer">
        <a id="confirmupload" class="btn btn-primary" href="#">Enviar</a>
        <a id="cancelupload" class="btn btn-default" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->
