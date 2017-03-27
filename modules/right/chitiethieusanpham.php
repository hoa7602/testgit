<?php
	$sql_chitiet="select * from hieusp where id_hieusp='$_GET[id]'";
	$query=mysql_query($sql_chitiet);
?>
 <?php
	$sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
	$query_tenhieusp=mysql_query($sql_tenhieusp);
	$dong_tenhieuspsp=mysql_fetch_array($query_tenhieuspsp);
?>
        	 <p style="text-align:center;color:red;background:#0CF;padding:10px;"><?php echo $dong_loaisp['tenhieusp'] ?></p>
            
             <div class="sanphamall">
             	<ul>
                <?php
				while($dong_chitiet=mysql_fetch_array($query)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_hieusp'] ?>">
                    	<img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_chitiet['tenhieusp'] ?></p>
                        <p style="color:#F00;">Gia sp:<?php echo $dong_chitiet['gia'] ?> </p>
                        <p style="color:#F00;text-align:center"> Chi tiết </p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
             </div>
             
 