<?php include_once "../lib/database.php"; ?>
<?php
class products_class
{
    public $db;
    public function __construct()
    {
        $this->db = new database();
    }
    // Function loại hàng
    public function show_loaihang()
    {
        $query = "Select * from loai_hang";
        return $this->db->select($query);
    }
    public function show_loaihang_by_id($id)
    {
        $query = "SELECT * FROM loai_hang WHERE id_loaihang='$id'";
        return $this->db->select($query);
    }
    public function add_loaihang($ten_loaihang, $img_loaihang)
    {
        $query = "INSERT INTO loai_hang(ten_loaihang,img_loaihang) VALUES ('$ten_loaihang','$img_loaihang')";
        $result = $this->db->exec($query);
        if ($result) {
            return "Thêm thành công";
        } else return "Thêm thất bại";
    }
    public function update_loaihang($ten_loaihang, $img_loaihang, $id)
    {
        $query = "UPDATE loai_hang SET ten_loaihang='$ten_loaihang', img_loaihang='$img_loaihang' WHERE id_loaihang='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Update thành công";
        } else return "Update thất bại";
    }
    public function del_loaihang($id)
    {
        $query = "DELETE FROM loai_hang WHERE id_loaihang='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Xóa thành công";
        } else return "Xóa thất bại";
    }
    // End loai_hang

    // Function sản phẩm
    public function show_sanpham()
    {
        $query = "SELECT * FROM san_pham ORDER BY id_sanpham DESC";
        return $this->db->select($query);
    }
    public function show_sanpham_by_id($id)
    {
        $query = "SELECT * FROM san_pham WHERE id_sanpham='$id'";
        return $this->db->select($query);
    }
    public function show_sanpham_by_name($name)
    {
        $query = "Select * from san_pham where ten_sanpham like'%$name%'";
        return $this->db->select($query);
    }
    public function show_sanpham_by_loai($id_loai)
    {
        $query = "Select * from san_pham where id_loaihang=$id_loai";
        return $this->db->select($query);
    }
    public function show_products_cung_loai($id_loaihang, $id_sanpham)
    {
        $query = "Select * from san_pham where id_loaihang='$id_loaihang' and id_sanpham!='$id_sanpham' order by id_sanpham desc limit 5";
        return $this->db->select($query);
    }
    public function add_sanpham($id_loaihang, $ten_sanpham, $img_sanpham, $gia, $giam_gia, $so_luong, $mo_ta, $ngay_nhap)
    {
        $query = "INSERT INTO san_pham(id_loaihang,ten_sanpham,img_sanpham,gia,giam_gia,so_luong,mo_ta,ngay_nhap) VALUES ('$id_loaihang','$ten_sanpham','$img_sanpham','$gia','$giam_gia','$so_luong','$mo_ta','$ngay_nhap')";
        $result = $this->db->exec($query);
        if ($result) {
            return "Thêm thành công";
        } else return "Thêm thất bại";
    }
    public function update_sanpham($id_loaihang, $ten_sanpham, $img_sanpham, $gia, $giam_gia, $so_luong, $mo_ta, $id)
    {
        $query = "UPDATE san_pham SET id_loaihang='$id_loaihang', ten_sanpham='$ten_sanpham', img_sanpham='$img_sanpham', gia='$gia', giam_gia='$giam_gia',so_luong='$so_luong', mo_ta='$mo_ta' WHERE id_sanpham='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Update thành công";
        } else return "Update thất bại";
    }
    public function del_sanpham($id)
    {
        $query = "DELETE FROM san_pham WHERE id_sanpham='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Xóa thành công";
        } else return "Xóa thất bại";
    }
    // End san_pham
    // FUNCTION slide
    public function show_slide()
    {
        $query = "SELECT * FROM slide ORDER BY id_slide DESC";
        return $this->db->select($query);
    }
    public function add_slide($ten_slide, $img_slide, $ulr)
    {
        $query = "INSERT INTO slide(ten_slide,img_slide,ulr) VALUES ('$ten_slide','$img_slide','$ulr')";
        $result = $this->db->exec($query);
        if ($result) {
            return " - Thêm thành công";
        } else return " - Thêm thất bại";
    }
    public function del_slide($id)
    {
        $query = "DELETE FROM slide WHERE id_slide='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Xóa thành công";
        } else return "Xóa thất bại";
    }
    public function update_slide($id)
    {
        $query = "UPDATE slide SET hien_thi='Yes' WHERE id_slide='$id'";
        $result = $this->db->exec($query);
        if ($result) {
            return "Update thành công";
        } else return "Update thất bại";
    }
    public function up_luot_xem($luot_xem, $id)
    {
        $query = "UPDATE san_pham SET luot_xem='$luot_xem'WHERE id_sanpham='$id'";
        $result = $this->db->exec($query);
        if ($result) return "ok";
        else return "Cập nhật lượt xem không thành công";
    }
}
?>