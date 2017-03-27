<?php
	$sql_loaisp="select * from loaisp";
	$query=mysql_query($sql_loaisp);
?>
			<p style="text-align: center;color: red;background: #512EE0;padding: 10px;">Sản phẩm</p>
			<div class="danhsachsanpham">
			<ul>
			<?php
				while($dong_sp=mysql_fetch_array($query)){
				?>
				<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp']?> </a></li>
				<?php
				}
					?>
			</ul>
	<?php
	$sql_hieusp="select * from hieusp";
	$query=mysql_query($sql_hieusp);
?>			
				
				
			</div>
			<p style="text-align: center;color: red;background: #512EE0;padding: 10px;">Hiệu Sản Phẩm</p>
			<div class="danhsachsanpham">
			<ul>
				<?php
				while($dong_sp=mysql_fetch_array($query)){
				?>
				<li><a href="index.php?xem=chitiethieusp&id=<?php echo $dong_sp['id_hieusp'] ?>"><?php echo $dong_sp['tenhieusp']?> </a></li>
				<?php
				}
					?>
			</ul>
				
			</div>
