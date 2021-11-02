<?php include_once "../lib/database.php"; ?>
<?php
class products_class
{
    public $db;
    public function __construct()
    {
        $this->db = new database();
    }
    public function show_list_loaihang()
    {
        $query = "Select * from loai_hang";
        return $this->db->select($query);
    }
    //Phương thức hiển thị product
    public function show_products()
    {
        $query = "Select * from hang_hoa";
        return $this->db->select($query);
    }
    public function show_products_chi_tiet($id)
    {
        $query = "Select * from hang_hoa where id_hanghoa= '$id'";
        return $this->db->select($query);
    }
    public function show_products_home()
    {
        $query = "Select * from hang_hoa where dac_biet='Thường' order by id_hanghoa desc limit 5";
        return $this->db->select($query);
    }
    public function show_products_cung_loai($id_loaihang, $id_hanghoa)
    {
        $query = "Select * from hang_hoa where id_loaihang='$id_loaihang' and id_hanghoa!='$id_hanghoa' order by id_hanghoa desc limit 5";
        return $this->db->select($query);
    }
    public function show_products_by_danhmuc($id_loaihang)
    {
        $query = "Select * from hang_hoa where id_loaihang='$id_loaihang' order by id_hanghoa desc";
        return $this->db->select($query);
    }
    public function show_products_dac_biet()
    {
        $query = "Select * from hang_hoa where dac_biet='Đặc Biệt'";
        return $this->db->select($query);
    }
    public function show_products_giam_gia()
    {
        $query = "Select * from hang_hoa where giam_gia>0";
        return $this->db->select($query);
    }
    //Phương thức hiển thị product theo id
    public function show_name($name)
    {
        $query = "Select * from hang_hoa where name_hanghoa like'%$name%'";
        return $this->db->select($query);
    }
    //Phương thức sửa product
    public function update_product($name_hanghoa, $gia, $giam_gia, $img_hanghoa, $mo_ta, $dac_biet, $id_loaihang, $ngay_sua, $id)
    {
        $query = "UPDATE hang_hoa SET name_hanghoa='$name_hanghoa',gia='$gia',giam_gia='$giam_gia',img_hanghoa='$img_hanghoa',mo_ta='$mo_ta',dac_biet='$dac_biet',id_loaihang='$id_loaihang',ngay_sua='$ngay_sua' WHERE id_hanghoa='$id'";
        $result = $this->db->exec($query);
        if ($result) return "Cập nhật thông tin sản phẩm thành công";
        else return "Cập nhật sản phẩm khôngthành công";
    }
    //Phương thức xóa product
    public function del_product($id)
    {
        $query = "Delete from hang_hoa where id_hanghoa	 = '$id'";
        $result = $this->db->exec($query);
        if ($result) return "Xóa sản phẩm thành công";
        else return "Xóa sản phẩm không thành công";
    }
    public function del_loaihang($id)
    {
        $query = "Delete from loai_hang where id_loaihang = '$id'";
        $result = $this->db->exec($query);
        if ($result) return "Xóa sản phẩm thành công";
        else return "Xóa sản phẩm không thành công";
    }
    // Phương thức thêm product
    public function insert_product($name_hanghoa, $gia, $giam_gia, $img_hanghoa, $mo_ta, $dac_biet, $id_loaihang, $ngay_tao)
    {
        $query = "INSERT INTO hang_hoa(name_hanghoa,gia,giam_gia,img_hanghoa,mo_ta,dac_biet,id_loaihang,ngay_tao) VALUES('$name_hanghoa','$gia','$giam_gia','$img_hanghoa','$mo_ta','$dac_biet','$id_loaihang','$ngay_tao')";
        $result = $this->db->exec($query);
        if ($result) return "Thêm sản phẩm thành công";
        else return "Thêm sản phẩm không thành công";
    }
    public function Show_loaiHang()
    {
        $query = "Select * from loai_hang";
        return $this->db->select($query);
    }
    public function add_loaihang($name_loaihang)
    {
        $query = "INSERT INTO loai_hang(name_loaihang) VALUES('$name_loaihang')";
        $result = $this->db->exec($query);
        if ($result) return "Thêm loại hàng thành công";
        else return "Thêm loại hàng không thành công";
    }
    public function update_loaihang($name_loaihang, $id)
    {
        $query = "UPDATE loai_hang SET name_loaihang='$name_loaihang' WHERE id_loaihang='$id'";
        $result = $this->db->exec($query);
        if ($result) return "Cập nhật thông tin loại hàng thành công";
        else return "Cập nhật loại hàng không thành công";
    }
    public function up_luot_xem($luot_xem, $id)
    {
        $query = "UPDATE hang_hoa SET luot_xem='$luot_xem'WHERE id_hanghoa='$id'";
        $result = $this->db->exec($query);
        if ($result) return "";
        else return "Cập nhật lượt xem không thành công";
    }
    public function insert_slide($name_slide, $img_slide)
    {
        $query = "INSERT INTO slider(name_slide,img_slide) VALUES('$name_slide','$img_slide')";
        $result = $this->db->exec($query);
        if ($result) return "Thêm slide thành công";
        else return "Thêm slide không thành công";
    }
    public function update_slide($name_slide, $img_slide, $id_slide)
    {
        $query = "UPDATE slider SET name_slide='$name_slide',img_slide='$img_slide' WHERE id_slide='$id_slide'";
        $result = $this->db->exec($query);
        if ($result) return "Cập nhật slide thành công";
        else return "Cập nhật slide không thành công";
    }
    public function del_slide($id_slide)
    {
        $query = "Delete from slider where id_slide = '$id_slide'";
        $result = $this->db->exec($query);
        if ($result) return "Xóa slide thành công";
        else return "Xóa slide không thành công";
    }
    public function show_slide()
    {
        $query = "Select * from slider order by id_slide asc";
        return $this->db->select($query);
    }
}
?>