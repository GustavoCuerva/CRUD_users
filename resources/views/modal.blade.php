<div class="modal fade" tabindex="-1" role="dialog" id="delete-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tem certeza que deseja exclui o usuário <b>{{ $user['name'] }}</b>?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Essa ação não poderá ser desfeita</p>
        </div>
        <div class="modal-footer">
            <form action="{{ route('user.destroy', ['id' => $user['id']]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
</div>