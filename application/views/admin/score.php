<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-3">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" id="date" class="form-control" placeholder="Masukkan Tanggal" aria-label="search">
                </div>
                <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Masukkan nama" aria-label="search">
            </div>
            <div class="form-group">
                <input type="text" id="kegiatan" class="form-control" placeholder="Masukkan Kegiatan" aria-label="search">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
            </form>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Penilaian</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jabatan</th>
                        <th>Kegiatan</th>
                        <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                </div>
            </div>

  </div>
    
 
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



       