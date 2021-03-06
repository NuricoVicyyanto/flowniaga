<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item li-dash"><i class="fas fa-tachometer-alt m-1"></i><a href="<?=base?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$data['judul']?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-12">
                <?php
                    Flash::getFlash();
                ?>
            </div>
            <div class="col-lg-12">
                <div class="shadow p-3 mb-4 bg-white rounded">
                    <div class="pb-3">
                    <a type="button" href="<?=base?>pengguna/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1; 
                                foreach ($data['user'] as $x ): ?>
                                <?php
                                    if ($x == 0) {
                                       echo "Data Tidak ada";
                                    }else {
                                        ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td class="w-25">
                                                    
                                                    <img src="<?=base?>public/img/<?=$x['foto_user']?>" class="img-thumbnail w-50" alt="...">
                                                </td>
                                                <td><?=$x['nama_lengkap']?></td>
                                                <td><?=$x['username']?></td>
                                                <td><?=$x['status']?></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a type="button" class="btn btn-warning"  data-toggle="edit-bawah" data-placement="bottom" title="Edit data" ><i class="fas fa-edit"></i></a>
                                                        <a type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                ?>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
  <!-- /#wrapper -->
