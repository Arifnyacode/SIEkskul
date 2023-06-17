
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php Flasher::flash(); ?>
      <div class="container-fluid">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage User Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=BASEURL;?>/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Manage User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Manage User</h3>

          <div class="card-tools">
          <a href="<?=BASEURL;?>/User/formcreate">  
          <button type="button" class="btn btn-block btn-primary btn-sm">
              
              <i class="fas fa-plus"> Create</i>
            </button>
            </a>
          </div>
        </div>
        <div class="card-body">
        
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nomor Induk</th>
                    <th>Nama User</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat & tanggal lahir</th>
                    <th>Alamat</th>
                    <th>E-mail</th>
                    <th>Nomor HP</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=0;
                    foreach($data['users'] as $u):
                    $no++;
                    $ttl = $u['tpt_lahir'].", ".$u['tgl_lahir'];
                    ?>
                  <tr>
                    <td><?=$no?></td>
                    <td><?=$u['no_induk'];?></td>
                    <td><?=$u['nama'];?></td>
                    <td><?=$u['jk'];?></td>
                    <td><?=$ttl;?></td>
                    <td><?=$u['alamat'];?></td>
                    <td><?=$u['email'];?></td>
                    <td><?=$u['nohp'];?></td>
                    <td>
                    <div class="btn-group">
                    <button type="button" class="btn btn-success">Action</button>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="<?=BASEURL;?>/user/update">Update</a>
                      <a class="dropdown-item" href="<?=BASEURL;?>/user/delete/<?=$u['IdUser'];?>">Delete</a>
                      <a class="dropdown-item" href="<?=BASEURL;?>/user/detail/<?=$u['IdUser'];?>">Detail</a>
                    </div>
                  </div>
                    </td>
                  </tr>
                  <?php
                  endforeach;
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nomor Induk</th>
                    <th>Nama User</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat & tanggal lahir</th>
                    <th>Alamat</th>
                    <th>E-mail</th>
                    <th>Nomor HP</th>
                    <th>aksi</th>
                  </tr>
                  </tfoot>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
