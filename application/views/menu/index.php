<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  
  <?= form_error('menu','<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button></div>');   ?>
  <?= $this->session->flashdata('message'); ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <a href="" class="btn btn-primary bg-gradient-primary mb-3" data-toggle="modal" data-target="#newMenuModal"><i class="fas fa-plus"></i> Add Menu</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Menu</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($menu as $m) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $m->menu; ?></td>
                      <td>
                          <a href="<?= base_url('menu/editMenu/').$m->id;?>" class="badge badge-success bg-gradient-success px-2 py-2"><i class="fa fa-edit"></i> Edit</a>
                          <a href="<?= base_url('menu/deleteMenu/').$m->id;?>" class="badge badge-danger bg-gradient-danger px-2 py-2"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
   </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Add Menu -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Add Menu -->



