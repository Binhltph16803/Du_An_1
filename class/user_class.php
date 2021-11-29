<?php include_once "../lib/database.php"; ?>
<?php
class users_class
{
    public $db;
    public function __construct()
    {
        $this->db = new database();
    }
    public function login($email, $password)
    {
        $query = "SELECT * FROM khach_hang WHERE email='$email' AND password='$password' LIMIT 1";
        $result = $this->db->select($query);
        if ($result) {
            $row = $result->fetch_assoc();
            //Thiết lập session 
            $_SESSION['Login'] = true;
            $_SESSION['name'] = $row['email'];
            //------------------------
            header("Location:index.php");
        } else return "Sai email hoặc mật khẩu";
    }
    // Function user
    public function show_user()
    {
        $query = "SELECT * FROM khach_hang ORDER BY id_khachhang DESC";
        return $this->db->select($query);
    }
    public function show_user_by_id($id)
    {
        $query = "SELECT * FROM khach_hang WHERE id_khachhang='$id'";
        return $this->db->select($query);
    }
    public function add_user($ten_khachhang, $img_khachhang, $sdt_khachhang, $email, $password, $dia_chi, $gioi_tinh, $vai_tro)
    {
        $query = "INSERT INTO khach_hang(ten_khachhang,img_khachhang,sdt_khachhang,email,password,dia_chi,gioi_tinh,vai_tro) VALUES ('$ten_khachhang','$img_khachhang','$sdt_khachhang','$email','$password','$dia_chi','$gioi_tinh','$vai_tro')";
        $result = $this->db->exec($query);
        if ($result) {
            return "Thêm thành công";
        } else return "Thêm thất bại";
    }
    public function update_user($ten_khachhang, $img_khachhang, $sdt_khachhang, $email, $password, $dia_chi, $gioi_tinh, $vai_tro, $id)
    {
        $query = "UPDATE khach_hang SET ten_khachhang='$ten_khachhang',img_khachhang='$img_khachhang',sdt_khachhang='$sdt_khachhang',email='$email',password='$password',dia_chi='$dia_chi',gioi_tinh='$gioi_tinh',vai_tro='$vai_tro' WHERE id_khachhang='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Update thành công";
        } else return "Update thất bại";
    }
    public function del_user($id)
    {
        $query = "DELETE FROM khach_hang WHERE id_khachhang='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Xóa thành công";
        } else return "Xóa thất bại";
    }
    // Function comment
    public function show_comment()
    {
        $query = "SELECT * FROM khach_hang INNER JOIN binh_luan on khach_hang.id_khachhang = binh_luan.id_khachhang INNER JOIN san_pham on binh_luan.id_sanpham = san_pham.id_sanpham";
        return $this->db->select($query);
    }
    public function show_comment_chi_tiet($id)
    {
        $query = "SELECT * FROM binh_luan INNER JOIN khach_hang ON binh_luan.id_khachhang = khach_hang.id_khachhang INNER JOIN san_pham ON san_pham.id_sanpham = binh_luan.id_sanpham WHERE binh_luan.id_sanpham='$id'";
        return $this->db->select($query);
    }
    public function add_comment($id_sanpham, $id_khachhang, $noi_dung, $ngay_binhluan)
    {
        $query = "INSERT INTO binh_luan(id_sanpham,id_khachhang,noi_dung,email,ngay_binhluan) VALUES ('$id_sanpham','$id_khachhang','$noi_dung','$ngay_binhluan')";
        $result = $this->db->exec($query);
        if ($result) {
            return "Comment thành công";
        } else return "Lỗi comment";
    }
    public function del_comment($id)
    {
        $query = "DELETE FROM binh_luan WHERE id_binhluan='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Xóa comment thành công";
        } else return "Lỗi xóa comment";
    }
    public function check_id($email)
    {
        $query = "Select id_khachhang from khach_hang where email='$email'";
        return $this->db->select($query);
    }
    public function show_profile_by_id($id)
    {
        $query = "Select * from khach_hang where id_khachhang='$id'";
        return $this->db->select($query);
    }
    public function check_admin($email, $vai_tro)
    {
        $query = "Select * from khach_hang where email='$email' and vai_tro='$vai_tro'";
        return $this->db->select($query);
    }
}
?>