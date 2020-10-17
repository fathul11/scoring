<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Personil</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800"><?= $count; ?></div>
          </div>
          <div class="col-auto">
                <i class="fas fa-user fa-4x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Collapsable Card Example -->
  <div class="card shadow mb-4 ml-3">
    <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Table Anggota Subdit 54.3</h6>
      </a>
    <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>NIK</th>
                      <th>Jabatan</th>
                      <th>pangkat</th>
                      <th>No Handphone</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($employee as $em) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $em->name; ?></td>
                      <td><?= $em->nik; ?></td>
                      <td><?= $em->nama_jabatan; ?></td>
                      <td><?= $em->pangkat; ?></td>
                      <td><?= $em->no_hp; ?></td>
                      <td>
                        <a href="" class="btn bg-gradient-info mb-3 text-white" data-toggle="modal" data-target="#newSubMenuModal"><i class="fas fa-eye"></i> View</a>
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
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



       