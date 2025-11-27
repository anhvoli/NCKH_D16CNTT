<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Smember - CellphoneS Clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- CSS Reset & Global Styles --- */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f4f6f8; /* Màu nền tổng thể xám nhẹ */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* --- Main Container --- */
        .container {
            background-color: white;
            width: 100%;
            max-width: 1000px;
            display: flex;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            flex-wrap: wrap; /* Để responsive trên mobile */
        }

        /* --- Cột bên Trái (Thông tin/Quảng cáo) --- */
        .left-col {
            flex: 1;
            padding: 40px;
            background-color: #fff; /* Hoặc màu nền nhẹ nếu muốn */
            display: flex;
            flex-direction: column;
            align-items: center;
            border-right: 1px solid #eee;
            position: relative;
        }

        /* Logos Header */
        .brand-header {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .brand-badge {
            background-color: #d70018;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            font-size: 14px;
            border-radius: 4px;
        }

        .left-col h2 {
            font-size: 18px;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .left-col h2 span {
            color: #d70018;
            font-weight: 800;
            font-size: 20px;
        }

        /* Khung ưu đãi (Red Border Box) */
        .benefit-box {
            position: relative;
            background: #f9f9f9; /* Nền xám rất nhạt bên trong khung */
            padding: 20px;
            border-radius: 15px;
            border: 2px solid #d70018; /* Viền đỏ */
            width: 100%;
            margin-bottom: 30px;
        }
        
        /* Tạo hiệu ứng góc bo như hình (Optional stylistic choice) */
        .benefit-box ul {
            list-style: none;
        }

        .benefit-box li {
            font-size: 13px;
            color: #333;
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
            line-height: 1.4;
        }

        .benefit-box li i {
            color: #d70018;
            margin-right: 10px;
            margin-top: 3px;
        }

        .benefit-box li b {
            font-weight: 700;
        }

        .details-link {
            display: block;
            text-align: center;
            color: #d70018;
            font-size: 13px;
            text-decoration: none;
            margin-top: 10px;
            font-weight: 600;
        }

        .details-link:hover {
            text-decoration: underline;
        }

        /* Mascot Image Placeholder */
        .mascot-img {
            margin-top: auto;
            max-width: 150px;
            /* Nếu bạn có ảnh thật, thay src ở HTML */
        }

        /* --- Cột bên Phải (Form Đăng nhập) --- */
        .right-col {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 350px;
        }

        .right-col h2 {
            text-align: center;
            color: #d70018;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
            transition: border 0.3s;
        }

        .form-control:focus {
            border-color: #d70018;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            cursor: pointer;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #d70018;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .btn-login:hover {
            background-color: #b30014;
        }

        .forgot-pass {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #0066cc;
            font-size: 14px;
            text-decoration: none;
        }

        /* Divider "Hoặc đăng nhập bằng" */
        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: #999;
            font-size: 13px;
        }

        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #eee;
        }
        .divider span {
            padding: 0 10px;
        }

        /* Social Buttons */
        .social-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .btn-social {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border: 1px solid #eee;
            border-radius: 5px;
            background: white;
            cursor: pointer;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            font-weight: 600;
        }
        
        .btn-social i {
            margin-right: 8px;
            font-size: 18px;
        }
        
        .fa-google { color: #EA4335; }
        .zalo-icon { 
            color: #0068FF; 
            font-weight: bold; 
            font-family: sans-serif;
            border: 1px solid #0068FF;
            border-radius: 3px;
            padding: 0 2px;
            font-size: 10px;
            margin-right: 8px;
        }

        .register-text {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #666;
        }

        .register-text a {
            color: #d70018;
            text-decoration: none;
            font-weight: bold;
        }

        /* --- Responsive Mobile --- */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .left-col {
                display: none; /* Ẩn cột quảng cáo trên mobile giống các trang login thường làm để gọn */
                /* Hoặc nếu muốn hiện thì xóa dòng display: none; */
            }
            .right-col {
                padding: 30px 20px;
            }
            .alert-danger {
                margin-top:5px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="left-col">
            <div class="brand-header">
                <div class="brand-badge" style="background: #d70018;">cellphone S</div>
                <div class="brand-badge" style="background: #d70018;">dienthoaivui</div>
            </div>

            <h2>Nhập hội khách hàng thành viên <span>SMEMBER</span><br>
            Để không bỏ lỡ các ưu đãi hấp dẫn từ CellphoneS</h2>

            <div class="benefit-box">
                <ul>
                    <li>
                        <i class="fa-solid fa-gift"></i>
                        <span>Chiết khấu đến <b>5%</b> khi mua các sản phẩm mua tại CellphoneS</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-gift"></i>
                        <span><b>Miễn phí giao hàng</b> cho thành viên SMEM, SVIP và cho đơn hàng từ 300.000đ</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-gift"></i>
                        <span>Tặng voucher sinh nhật đến <b>500.000đ</b> cho khách hàng thành viên</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-gift"></i>
                        <span>Trợ giá thu cũ lên đời <b>đến 1 triệu</b></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-gift"></i>
                        <span>Thăng hạng nhận voucher <b>đến 300.000đ</b></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-gift"></i>
                        <span>Đặc quyền S-Student/S-Teacher <b>ưu đãi thêm đến 10%</b></span>
                    </li>
                </ul>
                <a href="#" class="details-link">Xem chi tiết chính sách ưu đãi Smember ></a>
            </div>

            <img src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/Shipper_CPS3_1.png" alt="Mascot" class="mascot-img">
        </div>

        <div class="right-col">
            <h2>Đăng nhập trang quản trị</h2>
            <form action="{{route('auth.login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Nhập email của bạn" name="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Mật khẩu</label>
                    <div class="input-wrapper">
                        <input type="password" name='password' class="form-control" placeholder="Nhập mật khẩu của bạn">
                        @error('password')
                        <div class="alert alert-danger">{{ $message  }}</div>
                        @enderror
                        <i class="fa-regular fa-eye toggle-password"></i>
                    </div>
                </div>

                <button type="submit" class="btn-login">Đăng nhập</button>
                
            </form>
          
        </div>
    </div>

</body>
</html>