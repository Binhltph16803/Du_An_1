<?php include_once "../lib/database.php"; ?>
<?php
class users_class
{
    public $db;
    public function __construct()
    {
        $this->db = new database();
    }
    //Phương thức login
    public function login_user($email, $pass)
    {
        $query = "Select * from khach_hang where email='$email' and password_kh='$pass' limit 1";
        $result = $this->db->select($query);
        if ($result) {
            $row = $result->fetch_assoc();
            //Thiết lập session 
            $_SESSION['isLogin_user'] = true;
            $_SESSION['name'] = $row['email'];
            //------------------------
            header("Location:HomePage.php");
        } else return "Sai email hoặc mật khẩu";
    }
    //Phương thức hiển thị
    public function show_users()
    {
        $query = "Select * from khach_hang order by id_khachhang";
        return $this->db->select($query);
    }
    public function show_profile($email)
    {
        $query = "Select * from khach_hang where email='$email'";
        return $this->db->select($query);
    }
    public function show_profile_by_id($id)
    {
        $query = "Select * from khach_hang where id_khachhang='$id'";
        return $this->db->select($query);
    }
    public function check_id($email)
    {
        $query = "Select id_khachhang from khach_hang where email='$email'";
        return $this->db->select($query);
    }
    public function check_admin($email, $vai_tro)
    {
        $query = "Select * from khach_hang where email='$email' and vai_tro='$vai_tro'";
        return $this->db->select($query);
    }
    public function check_kh()
    {
        $query = "Select * from khach_hang";
        return $this->db->select($query);
    }
    //Phương thức xóa user
    public function del_user($id)
    {
        $query = "Delete from khach_hang where id_khachhang = '$id'";
        $result = $this->db->exec($query);
        if ($result) return "Xóa người dùng thành công";
        else return "Xóa người dùng không thành công";
    }
    //Phương thức sửa
    public function update_user($name_khachhang, $img_khachhang, $name_taikhoan, $email, $password_kh, $gioi_tinh, $dia_chi, $vai_tro, $kich_hoat, $id)
    {
        $query = "UPDATE khach_hang SET name_khachhang='$name_khachhang',img_khachhang='$img_khachhang',name_taikhoan='$name_taikhoan',email='$email',password_kh='$password_kh',gioi_tinh='$gioi_tinh',dia_chi='$dia_chi',vai_tro='$vai_tro',kich_hoat='$kich_hoat' where id_khachhang='$id'";
        $result = $this->db->exec($query);
        if ($result) return "Cập nhật thông tin người dùng thành công";
        else return "Không cập nhật thành công";
    }
    //Phương thức thêm
    public function add_user($name_taikhoan, $name_khachhang, $email, $password_kh)
    {
        $query = "Insert into khach_hang(name_taikhoan,name_khachhang,email,password_kh) values('$name_taikhoan','$name_khachhang','$email','$password_kh')";
        $result = $this->db->exec($query);
        if ($result) {
            header('location:login.php');
            return "Đăng ký thành công";
        } else return "Đăng ký thất bại";
    }
    public function add_user_from_admin($name_khachhang, $img_khachhang, $name_taikhoan, $email, $password_kh, $gioi_tinh, $dia_chi, $vai_tro, $kich_hoat)
    {
        $query = "Insert into khach_hang(name_khachhang,img_khachhang,name_taikhoan,email,password_kh,gioi_tinh,dia_chi,vai_tro,kich_hoat) values('$name_khachhang','$img_khachhang','$name_taikhoan','$email','$password_kh','$gioi_tinh','$dia_chi','$vai_tro','$kich_hoat')";
        $result = $this->db->exec($query);
        if ($result) {
            return "Thêm user thành công";
        } else return "Thêm user thất bại";
    }
    public function kich_hoat($kich_hoat, $id)
    {
        $query = "UPDATE khach_hang SET kich_hoat='$kich_hoat' where id_khachhang='$id'";
        $result = $this->db->exec($query);
        if ($result) return "Kích hoạt thành công";
        else return "Kích hoạt không thành công";
    }
    public function huy_kich_hoat($huy_kich_hoat, $id)
    {
        $query = "UPDATE khach_hang SET kich_hoat='$huy_kich_hoat' where id_khachhang='$id'";
        $result = $this->db->exec($query);
        if ($result) return "Hủy kích hoạt thành công";
        else return "Hủy kích hoạt không thành công";
    }
    public function add_binh_luan($noi_dung, $id_khachhang, $id_hanghoa, $ngay_viet)
    {
        $query = "Insert into binh_luan(noi_dung,id_khachhang,id_hanghoa,ngay_viet) values('$noi_dung','$id_khachhang','$id_hanghoa','$ngay_viet')";
        $result = $this->db->exec($query);
        if ($result) {
            return "Comment complete";
        } else return "Comment failed";
    }
    public function show_binh_luan($id)
    {
        $query = "SELECT binh_luan.noi_dung,binh_luan.ngay_viet,khach_hang.name_taikhoan,khach_hang.img_khachhang FROM binh_luan JOIN khach_hang ON binh_luan.id_khachhang = khach_hang.id_khachhang where id_hanghoa='$id' ORDER BY id_binhluan DESC";
        $result = $this->db->exec($query);
        return $result;
    }
}
?>