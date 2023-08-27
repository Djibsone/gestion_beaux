<!-- Add -->
<div class="modal fade text-dark" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Add New Utilisateur</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="./add_user">
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Nom complet :</label>
				      <input type="text" class="form-control form-control-lg" name="nom" placeholder="nom complet">
          </div>
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Email :</label>
				      <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@gmail.com">
          </div>
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Mot de paase :</label>
				      <input type="password" class="form-control form-control-lg" name="password" placeholder="***********">
          </div>
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Comfirmer mot de passe :</label>
				      <input type="password" class="form-control form-control-lg" name="c_password" placeholder="***********">
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
<div class="modal fade text-dark" id="user_edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title"><b>Edit Utilisateur</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./edit_user">
            <input type="hidden" class="user_id" name="id">
            <div class="mb-3">
              <label for="" class="col-form-label col-form-label-lg">Nom complet :</label>
				      <input type="text" class="form-control form-control-lg" name="nom" id="user_nom">
          </div>
          <div class="mb-3">
              <label for="" class="col-form-label col-form-label-lg">Email :</label>
				      <input type="email" class="form-control form-control-lg" id="user_email" disabled>
          </div>
          <div class="mb-3">
              <label for="" class="col-form-label col-form-label-lg">Mot de paase :</label>
				      <input type="password" class="form-control form-control-lg" name="password" id="user_password">
          </div>
          <div class="mb-3">
              <label for="" class="col-form-label col-form-label-lg">Comfirmer mot de passe :</label>
				      <input type="password" class="form-control form-control-lg" name="c_password" placeholder="***********">
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
<div class="modal fade text-dark" id="user_delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Deleting...</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./delete_user">
            <input type="hidden" class="user_id" name="id">
            <div class="text-center">
                <p class="text-danger">DELETE UTILISATEUR ?</p>
                <h2 class="bold user_name"></h2>
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

<!-- Active -->
<div class="modal fade text-dark" id="user_active">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Activing...</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./active">
            <input type="hidden" class="active_id" name="id">
            <div class="text-center">
                <p class="text-danger">ACTIVE UTILISATEUR ?</p>
                <h2 class="bold user_name"></h2>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-outline-success btn-flat" name="active">Active</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!-- Desactive -->
<div class="modal fade text-dark" id="user_desactive">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Desactiving...</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./desactive">
            <input type="hidden" class="desactive_id" name="id">
            <div class="text-center">
                <p class="text-danger">DESACTIVE UTILISATEUR ?</p>
                <h2 class="bold user_name"></h2>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-outline-danger btn-flat" name="desactive">Desactive</button>
        </div>
        </form>
    </div>
  </div>
</div>