<!-- Add -->
<div class="modal fade text-dark" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Add New Donneurs-Receveur</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="../controllers/cart_delete.php">
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Nom complet du donneur:</label>
              <select class="form-control form-control-lg" name="filiere">
                <option value="">Select nom du donneur</option>
                <option value="M">Masculin</option>
              </select>
          </div>
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Nom complet du receveur:</label>
              <select class="form-control form-control-lg" name="filiere">
                <option value="">Select nom du receveur</option>
                <option value="M">Masculin</option>
              </select>
          </div>
          <div class="mb-3">
              <label for="nombre" class="col-form-label col-form-label-lg">Nombre de boeux à recevoir:</label>
              <input type="number" class="form-control form-control-lg" name="nombre" id="nombre">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-flat" name="edit">Save</button>
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
        <h4 class="modal-title"><b><span class="productname"></span></b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="../controllers/cart_delete.php">
            <input type="hidden" class="cartid" name="cartid">
            <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Nom complet du donneur:</label>
              <select class="form-control form-control-lg" name="filiere">
                <option value="">Select nom du donneur</option>
                <option value="M">Masculin</option>
              </select>
            </div>
            <div class="mb-3">
                <label class="col-form-label col-form-label-lg">Nom complet du receveur:</label>
                <select class="form-control form-control-lg" name="filiere">
                  <option value="">Select nom du receveur</option>
                  <option value="M">Masculin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nombre" class="col-form-label col-form-label-lg">Nombre de boeux à recevoir:</label>
                <input type="number" class="form-control form-control-lg" name="nombre" id="nombre">
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
<div class="modal fade text-dark" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Deleting...</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="../controllers/cart_delete.php">
            <input type="hidden" class="cartid" name="cartid">
            <input type="hidden" class="userid" name="userid">
            <div class="text-center">
                <p class="">DELETE PRODUCT</p>
                <h2 class="bold productname"></h2>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger btn-flat">Delete</button>
        </div>
        </form>
    </div>
  </div>
</div>