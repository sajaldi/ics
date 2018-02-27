<div class="modal fade" aria-hidden="true" role="dialog"  id="modal-delete-permission-{{$p->id}}">
  {{Form::open(array('action'=>array('RolesController@delete_permission',$p->id),'method'=>'delete'))}}
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header no-padding">
          <div class="table-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <span class="white">&times;</span>
            </button>
            Borrar Permisos
          </div>

        </div>
        <div class="modal-body">
          <p>Desea eliminar el permiso: <b>{{$p->name}}</b>?</p>
        </div>

        <div class="modal-footer no-margin-top">
          <button type="submit" class="btn btn-sm btn-success pull-left">
            <i class="ace-icon fa fa-check"></i>
            Borrar
          </button>
          <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Cerrar
          </button>
        </div>

      </div>
    </div>
  {{Form::Close()}}
</div>
