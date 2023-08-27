<!-- Add -->
<div class="modal fade text-dark" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Add New Donneurs-Receveur</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="./add_home">
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Nom complet du donneur:</label>
              <select class="form-control form-control-lg" name="nom_don">
                <option value="">Select nom du donneur</option>
                <?php foreach($donneurs as $donneur): ?>
                  <option value="<?= $donneur['id'] ?>"><?= $donneur['nomDon'] ?></option>
                <?php endforeach; ?>
              </select>
          </div>
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Nom complet du receveur:</label>
              <select class="form-control form-control-lg" name="nom_re">
                <option value="">Select nom du receveur</option>
                <?php foreach($receveurs as $receveur): ?>
                  <option value="<?= $receveur['id'] ?>"><?= $receveur['nomRe'] ?></option>
                <?php endforeach; ?>
              </select>
          </div>
          <div class="mb-3">
              <label class="col-form-label col-form-label-lg">Nombre de boeux à recevoir:</label>
              <input type="number" class="form-control form-control-lg" name="nombre">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn -outline-secondary" data-bs-dismiss="modal">Cancel</button>
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
      <h4 class="modal-title"><b>Edit Donneur & Receveur</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="./edit_home">
            <input type="hidden" class="don_re_id" name="id">
            <div class="mb-3">
              <label for="edit_nom_d" class="col-form-label col-form-label-lg">Nom complet du donneur:</label>
              <select class="form-control form-control-lg" name="nom_don" id="edit_nom_d">
                  <option value="">Select nom du donneur</option>
                  <?php foreach($donnes as $donne): ?>
                    <option value="<?= $donne['id'] ?>"><?= $donne['nomDon'] ?></option>
                  <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="col-form-label col-form-label-lg">Nom complet du receveur:</label>
                <select class="form-control form-control-lg" name="nom_re" id="edit_nom_r">
                  <option value="">Select nom du receveur</option>
                  <?php foreach($receves as $receve): ?>
                    <option value="<?= $receve['id'] ?>"><?= $receve['nomRe'] ?></option>
                  <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="nbr_r" class="col-form-label col-form-label-lg">Nombre de boeux à recevoir:</label>
                <input type="number" class="form-control form-control-lg" name="nombre" id="nbr_r">
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
            <form class="form-horizontal" method="POST" action="./delete_home">
            <input type="hidden" class="don_re_id" name="id">
            <div class="text-center">
                <p class="text-danger">DELETE DONNEUR & RECEVEUR ?</p>
                <h2 class="bold don_re_name"></h2>
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


<!-- <div class="mb-3">
              <label for="edit_nom_d" class="col-form-label col-form-label-lg">Nom complet du donneur:</label>
              <select class="form-control form-control-lg edit_nom_d" name="nom_don" id="select_don">
              </select>
            </div>
            <div class="mb-3">
                <label class="col-form-label col-form-label-lg">Nom complet du receveur:</label>
                <select class="form-control form-control-lg edit_nom_r" name="nom_re" id="select_re">
                </select>
            </div> 
          //selecteur
          <div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="donneur">
          <option selected>Open this select menu</option>
          <?php foreach($donnes as $donne): ?>
            <option value="<?= $donne['id'] ?>"><?= $donne['nomDon'] ?></option>
          <?php endforeach; ?>
        </select>
        
      </div>
      <div class="modal-body">
        
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

-->