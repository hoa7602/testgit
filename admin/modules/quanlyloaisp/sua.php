<?php
	$sql="select * from loaisp where id_loaisp=$_GET[id]";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo($dong['id_loaisp'])?>" method="post" enctype="multipart/form-data">
 <table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Sửa loại sp</div></td>
    </tr>
    <tr>
      <td>Tên loại SP</td>
      <td><input type="text" name="tenloaisp" value="<?php echo $dong['tenloaisp']?>"></td>
    </tr>
    <tr>
      <td>Số lượng còn</td>
      <td><input type="text" name="thutu"value ="<?php echo($dong['thutu'])?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
      	<input type="submit" name="sua" id="sua" value="Sửa">
      </div></td>
    </tr>
  </tbody>
</table>
</form>