<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row ml-1">
    <?= $this->session->flashdata('message'); ?>
  </div>

  <div class="card mb-3" style="max-width:660px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/').$user['image']; ?>" class="card-img" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <div class="card-title">Nama : <?= $employee->name; ?></div>
          <p class="card-text">NIK : <?= $employee->nik; ?></p>
          <p class="card-text">Jabatan : <?= $employee->nama_jabatan; ?></p>
          <p class="card-text">Pangkat : <?= $employee->pangkat;?></p>
          <p class="card-text"><small class="text-mutted">bergabung sejak <?= date('d F Y', $employee->date_created);?></small></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



       