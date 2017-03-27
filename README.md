# testgit
# mở localhost/phpmyadmin
# nhấn tạo db tên: webbanhang
# xong tạo 4 bảng: chitietsp, dangky, hieusp,loaisp
# trong chitietsp chọn SQL rồi dán đoạn code sau:
CREATE TABLE if NOT EXISTS chitietsanp(
	id_sp int(11) not null AUTO_INCREMENT,
    tensp varchar(200) NOT null,
    hinhanh varchar(255) NOT null,
    gia int(100) NOT null,
    mota longtext not null,
    id_loaisp int(100) NOT null,
    thutu int(100) NOT null,
    PRIMARY KEY(id_sp)
);

# dangky dán code sau:
CREATE TABLE dangky(
tenkhachhang varchar(255) NOT null AUTO_INCREMENT,
    matkhau varchar(255) not null,
    email int(255) not null,
    diachi varchar(255) not null,
    dienthoai int(15) not null,
    PRIMARY KEY (tenkhachhang)
);

#hieusp code:
CREATE TABLE hieusp(
id_hieusp int(11) NOT null AUTO_INCREMENT,
    tenhieusp varchar(255) not null,
    thutu int(100) not null,
  PRIMARY KEY (id_hieusp)  
);
#loaisp code:

CREATE TABLE loaisp(
id_loaisp int(11) NOT null AUTO_INCREMENT,
    tenloaisp varchar(255) not null,
    thutu int(100),
    PRIMARY KEY (id_loaisp)
);
# xong tạo thư mục webbanhang trong thư mục htdocs của xampp
# xong rồi bỏ hết code vào thư mục webbanhang
# mở trình duyệt gõ localhost/webbanhang
# hết rồi
