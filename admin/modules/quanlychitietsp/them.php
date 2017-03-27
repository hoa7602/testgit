<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm chi tiết sp</div></td>
  </tr>
  <tr>
    <td>Tên sp</td>
    <td><input type="text" name="tensp" ></td>
  </tr>
  <tr>
    <td>Giá sp</td>
    <td><input type="text" name="gia" ></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" ></td>
  </tr>
  <tr>
    <td>Mô tả sp</td>
    <td><textarea name="motasp" cols="40" rows="15"></textarea></td>
  </tr>
  <?php
  	$sql="select * from loaisp";
	$run=mysql_query($sql);
	
  ?>
  
  <tr>
    <td>Loại sp</td>
    <td><select name="loaisp">
    <?php
    while($dong=mysql_fetch_array($run)){
		?>
    	<option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp']?></option>
        <?php
	}
		?>
    </select></td>
  </tr>
  <tr>
    <td>Số lượng còn</td>
    <td><input type="text" name="thutu"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm">Thêm</button>
    </div></td>
  </tr>
</table>
</form>