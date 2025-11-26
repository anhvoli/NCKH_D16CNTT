# 🎓 NCKH D16CNTT - Hướng Dẫn Cài Đặt Dự Án 

Tài liệu này giúp bạn có thể cài đặt và chạy một dự án Laravel có sẵn
trên máy tính của mình, phù hợp cho người mới bắt đầu.

------------------------------------------------------------------------

## 1. Yêu cầu hệ thống

Phần mềm để chạy dc dự án:

Phiên bản PHP từ 8 trở lên
Công cụ quản lý thư viên PHP:
 Nếu chưa có cài tại link: https://getcomposer.org/
Cài thêm node.js:
Link:https://nodejs.org/en/download
Cài thêm Git để code chung đc
link:https://git-scm.com/install/

------------------------------------------------------------------------

## 2. Clone dự án về máy

Nếu dự án nằm trên GitHub:https://github.com/anhvoli/NCKH_D16CNTT

------------------------------------------------------------------------

## 3. Cài đặt thư viện PHP

Trong thư mục dự án:

``` 
composer install
```
feddback lại nếu có lỗi 

------------------------------------------------------------------------
## 6. Chạy migration.
Tất cả các bảng sẽ tạo ở thư mục database/migrations


Lệnh migration để tạo các bảng:

``` bash
php artisan migrate
```

Lệnh seeder để tạo các dữ liệu mẫu test cho hệ thống:
Lưu ý: Tất cả các dữ liệu mẫu được tạo ở thư mục seeders/DatabaseSeeder.php 
``` bash
php artisan db:seed
```
------------------------------------------------------------------------
Build dev:

``` bash
npm run dev
```

Build production:

``` bash
npm run build
```

------------------------------------------------------------------------

## 8. Chạy server Laravel

Dùng server tích hợp của Laravel:

``` bash
php artisan serve
```

Truy cập trình duyệt:

    http://127.0.0.1:8000

------------------------------------------------------------------------


