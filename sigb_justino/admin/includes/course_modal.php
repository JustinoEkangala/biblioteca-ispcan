
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Adicionar novo curso</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="course_add.php">
                <div class="form-group">
                    <label for="code" class="col-sm-3 control-label">Código</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="code" name="code" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Título</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fechar</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Enviar</button>
              </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Editar curso</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="course_edit.php">
                <input type="hidden" class="corid" name="id">
                <div class="form-group">
                    <label for="edit_code" class="col-sm-3 control-label">Código</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_code" name="code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_title" class="col-sm-3 control-label">Título</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_title" name="title">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fechar</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Atualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Excluindo...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="course_delete.php">
                <input type="hidden" class="corid" name="id">
                <div class="text-center">
                    <p>APAGAR LIVRO</p>
                    <h2 id="del_code" class="bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fechar</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Excluir</button>
              </form>
            </div>
        </div>
    </div>
</div>


     