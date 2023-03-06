  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Posyandu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <?php foreach ($penduduk as $pdk ): ?>
        
      
        <form action="<?php echo base_url(),'admin/update' ?>" method="post">
            
          <div class="form-group">
            <!-- <label for="nama">id</label> -->
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $pdk->id ; ?>">
          </div>
          <div class="form-group">
            <label for="nama_anak">Nama anak</label>
            <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="<?php echo $pdk->nama_anak ; ?>">
          </div>

          <div class="form-group">
            <label for="umur">umur</label>
            <input type="text" class="form-control" id="umur" name="umur" value="<?php echo $pdk->umur ; ?>">
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">jenis kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $pdk->jenis_kelamin ; ?>">
          </div>

          <div class="form-group">
            <label for="nama_orangtua">Nama orangtua</label>
            <input type="text" class="form-control" id="nama orangtua" name="nama orangtua" value="<?php echo $pdk->nama_orangtua ; ?>">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $pdk->alamat ; ?>">
          </div>
   
        <button type="reset" class="btn btn-secondary" >Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>

      <?php endforeach ?>
   

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 