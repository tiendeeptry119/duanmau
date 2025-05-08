<?php

class HomeController
{
    public $model;

    public function __construct()
    {
        $this->model = new Home;
    }

    // Hiển thị trang đăng nhập
    public function login()
    {
        require './views/login.php';
        if (isset($_SESSION['flash'])) {
            deleteSessionError();
        }
    }

    // Xử lý đăng nhập
    public function postLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $username = $_POST['username'];
            $password = $_POST['password'];

            $error = [];

            if (empty($username)) {
                $error['username'] = "Không để trống tên đăng nhập";
            }
            if (empty($password)) {
                $error['password'] = "Không để trống mật khẩu";
            }

            $User = $this->model->getUser($username);

            if (!$User) {
                $error['username'] = "Tài khoản không chính xác";
            } elseif ($User['mat_khau'] != $password) {
                $error['password'] = 'Mật khẩu không chính xác';
            }

            if (empty($error)) {
                $_SESSION['username'] = $username;

                if ($User['chuc_vu_id'] == 1) {
                    header('Location: ' . BASE_URL_ADMIN);
                    exit();
                } else {
                    header('Location: ' . BASE_URL_CLIENT);
                    exit();
                }
            } else {
                $_SESSION['error'] = $error;
                $_SESSION['flash'] = true;
                header('Location: ' . BASE_URL);
                exit();
            }
        }
    }

    // Hiển thị form đăng ký
    public function formDangky()
    {
        require './views/formDangKy.php';
        if (isset($_SESSION['flash'])) {
            deleteSessionError();
        }
    }

    // Xử lý đăng ký
    public function postDangKy()
    {
        if (isset($_POST['return-login'])) {
            header('Location: ' . BASE_URL);
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];
            $xac_nhan_mat_khau = $_POST['xac_nhan_mat_khau'];
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $dia_chi = $_POST['dia_chi'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $chuc_vu_id = $_POST['chuc_vu_id'];
            $hinh_anh = $_FILES['hinh_anh'];

            $error = [];

            if (empty($ten_dang_nhap)) {
                $error['ten_dang_nhap'] = "Không để trống tên đăng nhập";
            }
            if (empty($mat_khau)) {
                $error['mat_khau'] = "Không để trống mật khẩu";
            }
            if (empty($xac_nhan_mat_khau)) {
                $error['xac_nhan_mat_khau'] = "Không để trống xác nhận mật khẩu";
            }
            if ($mat_khau !== $xac_nhan_mat_khau) {
                $error['xac_nhan_mat_khau'] = "Xác nhận mật khẩu không chính xác";
            }
            if (empty($ho_ten)) {
                $error['ho_ten'] = "Không để trống họ tên";
            }
            if (empty($email)) {
                $error['email'] = "Không để trống email";
            }
            if (empty($dia_chi)) {
                $error['dia_chi'] = "Không để trống địa chỉ";
            }
            if (empty($ngay_sinh)) {
                $error['ngay_sinh'] = "Không để trống ngày sinh";
            }
            if ($gioi_tinh === 'chua_chon') {
                $error['gioi_tinh'] = "Bạn phải chọn giới tính";
            }

            $listUsers = $this->model->getAllUser();
            foreach ($listUsers as $user) {
                if ($ten_dang_nhap === $user['ten_dang_nhap']) {
                    $error['ten_dang_nhap'] = "Tài khoản đã tồn tại";
                    break;
                }
            }

            $file_thumb = 'default.png';
            if ($hinh_anh['error'] === 0) {
                $upload = upLoad($hinh_anh, './uploads/');
                if ($upload) {
                    $file_thumb = $upload;
                }
            }

            if (empty($error)) {
                $this->model->postTaiKhoan(
                    $ten_dang_nhap,
                    $mat_khau,
                    $ho_ten,
                    $email,
                    $so_dien_thoai,
                    $dia_chi,
                    $gioi_tinh,
                    $file_thumb,
                    $ngay_sinh,
                    $chuc_vu_id
                );

                $_SESSION['success'] = "Đăng ký thành công!";
                header('Location: ' . BASE_URL);
                exit();
            } else {
                $_SESSION['error'] = $error;
                $_SESSION['flash'] = true;
                header('Location: ' . BASE_URL . '?act=form-dang-ky');
                exit();
            }
        }
    }
}
