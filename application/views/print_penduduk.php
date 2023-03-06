<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2 align="center">DATA POSYANDU</h2>
	 <table class="table" border="1px" align="center">
      <tr>
        <td>No</td>
        <td>Nama anak</td>
        <td>Umur</td>
        <td>Jenis kelamin</td>
        <td>Nama orangtua</td>
        <td>Alamat</td>
        
      </tr>  
      <?php 
      $no=1;
      foreach ($penduduk as $pos) :
      
       ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $pos->nama_anak; ?></td>
        <td><?php echo $pos->umur; ?></td>
        <td><?php echo $pos->jenis_kelamin; ?></td>
        <td><?php echo $pos->nama_orangtua; ?></td>
        <td><?php echo $pos->alamat; ?></td>
        
      </tr>
    <?php endforeach; ?>
    </table>
    <script type="text/javascript">
    	window.print();
    </script>

</body>
</html>