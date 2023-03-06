<!DOCTYPE html>
<html><head>
<title></title>
</head><body>
<h3 align="center">DATA POSYANDU</h3>
<table border="1" align="center">
      <tr>
        <th>NO</th>
        <th>NAMA ANAK </th>
        <th>UMUR</th>
        <th>JENIS KELAMIN</th>
        <th>NAMA ORANGTUA</th>
        <th>ALAMAT</th>     
      </tr>
    <?php 
    $no=1;
    foreach ($penduduk as $pdk   ) :
     ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $pdk->nama_anak ?></td>
        <td><?php echo $pdk->umur ?></td>
        <td><?php echo $pdk->jenis_kelamin ?></td>
        <td><?php echo $pdk->nama_orangtua ?></td>
        <td><?php echo $pdk->alamat ?></td>
    <?php endforeach ?>
</table>
</body></html>
