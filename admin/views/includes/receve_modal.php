<!-- Add -->
<div class="modal fade text-dark" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Add New Receveurs</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="./add_receve">
          <div class="mb-3">
              <label for="nom" class="col-form-label col-form-label-lg">Nom complet du receveur:</label>
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
              <label for="localite" class="col-form-label col-form-label-lg">Localité du receveur:</label>
              <input type="text" class="form-control form-control-lg" name="localite" id="localite">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-flat" name="add">Save</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade text-dark" id="edit_receve">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Edit Receveur</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./edit_receve">
            <input type="hidden" class="receveid" name="id">
            <div class="mb-3">
              <label for="edit_nom" class="col-form-label col-form-label-lg">Nom complet du receveur:</label>
              <input type="text" class="form-control form-control-lg" name="nom" id="edit_nom">
            </div>
            <div class="mb-3">
                <label class="col-form-label col-form-label-lg">Sexe:</label>
                <select class="form-control form-control-lg" name="sexe" id="edit_sexe_re">
                  <option value="">Select le sexe</option>
                  <option value="M">Masculin</option>
                  <option value="F">Féminin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="edit_localite" class="col-form-label col-form-label-lg">Localité du receveur:</label>
                <input type="text" class="form-control form-control-lg" name="localite" id="edit_localite">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-flat" name="edit">Update</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade text-dark" id="delete_receve">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Deleting...</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./delete_receve">
            <input type="hidden" class="receveid" name="id">
            <div class="text-center">
                <p class="">DELETE RECEVEUR</p>
                <h2 class="bold receveurname"></h2>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger btn-flat" name="delete">Delete</button>
        </div>
        </form>
    </div>
  </div>
</div>