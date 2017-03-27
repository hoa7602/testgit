<?php
	$sql_chitietsp="select * from chitietsp where id_sp=$_GET[id]";
	$query_chitietsp=mysql_query($sql_chitietsp);
	$dong_chitietsp=mysql_fetch_array($query_chitietsp);
	
?>

<table width="400" border="1" style="border-collapse:collapse">
  <tr>
    <td colspan="2"><div align="center">Chi tiết sản phẫm</div></td>
  </tr>
  
  <tr>
    <td rowspan="2"><img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh'] ?>" width="300" height="200" /></td>
    <td>Tên SP: <?php echo $dong_chitietsp['tensp'] ?></td>
  </tr>
  <tr>
    <td style="color:#F00" >Giá sp: <?php echo $dong_chitietsp['gia']. 'TRIỆU' ?></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Thông số kỹ thuật</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_chitietsp['mota'] ?></td>
  </tr>
  <a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp'] ?>"><img src="img/giohangg.png" height="200" width="200" style="float:right" /></a>
 
  
  </table>

