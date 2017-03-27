<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html><?php
	session_start();
?>
<h1>Giỏ hàng</h1><h3 style="float:right">
	<?php
	if(isset($_SESSION['dangnhap'])){
		echo 'Xin chào :'.$_SESSION['dangnhap'];
	}
	?>

</h3>
<?php
	
	//them san pham mới
	if(isset($_GET['add'])&& !empty($_GET['add'])){
		$id=$_GET['add'];
		 @$_SESSION['cart_'.$id]+=1;
		 header('location:index.php?xem=giohang');
	}
	
	//xoa  san pham
	if(isset($_GET['xoa'])){
		
		$_SESSION['cart_'.$_GET['xoa']]=0;
		header('location:index.php?xem=giohang');
	}
	//hien thi san pham da them
	$thanhtien=0;
	$tongtien=0;
	foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name,0,5)=='cart_'){
				$id=substr($name,5,strlen($name-5));
				$sql="select * from chitietsp where id_sp='".$id."'";
				$query=mysql_query($sql);
				while($dong=mysql_fetch_array($query)){
					$tongtien=$dong['gia']*$value;
					echo $dong['tensp'].'X'.$value.'@'.$dong['gia'].'='.$tongtien.'VND'.'<a href="index.php?xem=giohang&them='.$id.'"></a><a href="index.php?xem=giohang&tru='.$id.'"></a><a href="index.php?xem=giohang&xoa='.$id.'">[Xóa]</a><br/><br/><br/>';
				}
			}
			$thanhtien+=$tongtien;
		}
		
	}
	if($thanhtien==0){
		echo 'giỏ hàng trống';
	}else{
		echo 'Tổng tiền='.$thanhtien.'VND';
	}


?>
<p style="float:right"><a href="index.php?xem=thanhtoan">Thanh toán</a></p>