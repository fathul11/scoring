<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Profile</h6>
        </div>
        <div class="card-body">
            <?= form_open_multipart('user/edit'); ?>
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Full Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];  ?>">
                <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="nik" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik'];  ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">Picture</div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?= base_url('assets/img/profile/').$user['image'];?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label for="image" class="custom-file-label">Choose File</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-10">
              <select class="form-control" name="jabatan">
                    <?php foreach($jabatan as $jb) : ?>
                      <option value="<?= $jb['id']; ?>"><?=  $jb['nama_jabatan']; ?></option>-->
                    <?php endforeach; ?>
                  </select>
              </div>
             
            </div>
            <div class="form-group row">
              <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="pangkat" name="pangkat" value="<?= $user['pangkat'];  ?>">
                <?= form_error('pangkat','<small class="text-danger pl-3">','</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="no_hp" class="col-sm-2 col-form-label">No Handphone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $user['no_hp'];  ?>">
                <?= form_error('no_hp','<small class="text-danger pl-3">','</small>'); ?>
              </div>
            </div>
            <hr>
            <div class="form-group row justify-content-end">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary bg-gradient-primary float-right"><i class="fas fa-edit"></i> Edit</button>
              </div>
            </div>
            
            </form>
        </div>
   </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



       