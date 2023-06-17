<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Create User Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=BASEURL;?>/Dasboard">Home</a></li>
              <li class="breadcrumb-item"><a href="<?=BASEURL;?>/User">User List</a></li>
              <li class="breadcrumb-item active">Form Create</li>
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
          <h3 class="card-title">Form Create User</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form action="<?=BASEURL;?>/User/insert" method="POST">
            <div class="form-group">
                <label for="noinduk">Nomor Induk</label>
                <input type="text" class="form-control" name="nominduk" placeholder="nomor induk">
            </div>
            <div class="form-group">
                <label for="namauser">Nama Lengkap</label>
                <input type="text" class="form-control" name="namauser" placeholder="nama user">
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="JK" value="Laki-laki">
                <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="JK" value="Perempuan">
                <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tptlahir" placeholder="tempat lahir">
            </div>
            <div class="form-group">
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukan alamat...."></textarea>
            </div>
            <div class="form-group">
                <label for="Email">Email User</label>
                <input type="text" class="form-control" name="email" placeholder="masukan email">
            </div>
            <div class="form-group">
                <label for="nomorhp">Nomor Handphone</label>
                <input type="text" name="nohp" class="form-control" placeholder="ex:08766998">
            </div>
            <div class="form-group">
                <label for="password">Password Account</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Status User</label>
                <select name="level" id="" class="form-control">
                    <option value="0">Pilih status</option>
                    <option value="1">Admin</option>
                    <option value="2">Guru</option>
                    <option value="3">Siswa</option>
                    <option value="4">Pelatih</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create User</button>
            
        </div>
        </form>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->