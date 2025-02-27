<?php

class modelDonHang
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllDonHang()
    {
        try {
            $sql = "SELECT *,trang_thai_don_hangs.ten_trang_thai, don_hangs.id FROM don_hangs INNER JOIN trang_thai_don_hangs on trang_thai_don_hangs.id = don_hangs.trang_thai_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "ERROR" . $e->getMessage();
        }
    }
 
    public function getDetailDonHang($id)
    {

        try {
            $sql = "SELECT *,trang_thai_don_hangs.id FROM don_hangs 
            INNER JOIN tai_khoans on tai_khoans.id = don_hangs.tai_khoan_id 
            INNER JOIN phuong_thuc_thanh_toans on phuong_thuc_thanh_toans.id = don_hangs.phuong_thuc_thanh_toan_id
            INNER JOIN trang_thai_don_hangs on trang_thai_don_hangs.id = don_hangs.trang_thai_id
            WHERE don_hangs.id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "ERROR" . $e->getMessage();
        }
    }
    public function getListSPDonHang($id){
        try {
            $sql = "SELECT * FROM don_hangs 
            INNER JOIN chi_tiet_don_hangs on chi_tiet_don_hangs.don_hang_id = don_hangs.id
            INNER JOIN san_phams on san_phams.id = chi_tiet_don_hangs.san_pham_id 
            WHERE don_hangs.id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "ERROR" . $e->getMessage();
        }
    }
    public function getAllTrangThai(){
        try{
            $sql = "SELECT * FROM trang_thai_don_hangs";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){
            echo "ERROR".$e->getMessage();
        }
    }
    public function getAllTaiKhoan(){
        try{
            $sql = "SELECT * FROM tai_khoans";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){
            echo "ERROR".$e->getMessage();
        }
    }
    public function suaTrangThai($id, $trang_thai_id)
    {
        try {
            $sql = "UPDATE don_hangs SET trang_thai_id = :trang_thai_id WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id,
                ':trang_thai_id' => $trang_thai_id,
            
            ]);
            return true;
        } catch (Exception $e) {
            echo "ERROR" . $e->getMessage();
        }
    }
    public function thayDoiTrangThai($id, $trang_thai){
        try {
            $sql = "UPDATE tai_khoans SET trang_thai = :trang_thai WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id,
                ':trang_thai' => $trang_thai,
            
            ]);
            return true;
        } catch (Exception $e) {
            echo "ERROR" . $e->getMessage();
        }
    }
}
