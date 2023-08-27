<!-- Add -->
<div class="modal fade text-dark" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Add New Donneurs</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="/add">
          <input type="hidden" class="donid" name="id">
          <div class="mb-3">
              <label for="nom" class="col-form-label col-form-label-lg">Nom complet du donneur:</label>
              <input type="text" class="form-control form-control-lg" name="nom" id="nom">
          </div>
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Sexe:</label>
              <select class="form-control form-control-lg" name="sexe">
                <option value="">Select le sexe</option>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
              </select>
          </div>
          <div class="mb-3">
              <label for="nombre" class="col-form-label col-form-label-lg">Nombre de boeux:</label>
              <input type="number" class="form-control form-control-lg" name="nombre" id="nombre">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-outline-primary btn-flat" name="add">Save</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade text-dark" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Edit Donneur</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./edit">
            <input type="hidden" class="donid" name="id">
            <div class="mb-3">
              <label for="edit_name" class="col-form-label col-form-label-lg">Nom complet du donneur:</label>
              <input type="text" class="form-control form-control-lg" name="nom" id="edit_name">
            </div>
            <div class="mb-3">
                <label class="col-form-label col-form-label-lg">Sexe:</label>
                <select class="form-control form-control-lg" name="sexe" id="edit_sexe">
                  <option value="">Select le sexe</option>
                  <option value="M">Masculin</option>
                  <option value="F">Féminin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="edit_nbre" class="col-form-label col-form-label-lg">Nombre de boeux:</label>
                <input type="number" class="form-control form-control-lg" name="nombre" id="edit_nbre">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-outline-success btn-flat" name="edit">Update</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade text-dark" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Deleting...</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./delete">
            <input type="hidden" class="donid" name="id">
            <div class="text-center">
                <p class="text-danger">DELETE DONNEUR ?</p>
                <h2 class="bold donneurname"></h2>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-outline-danger btn-flat" name="delete">Delete</button>
        </div>
        </form>
    </div>
  </div>
</div>