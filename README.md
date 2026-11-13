# WEBSITE BÁN THIẾT BỊ ĐIỆN TỬ ONLINE

## 1. Giới thiệu dự án

**Tên đề tài:** Xây dựng hệ thống Website bán thiết bị điện tử Online.

**Môn học:** Quản trị dự án phần mềm.

**Nhóm thực hiện:** Nhóm 3 thành viên.

Dự án xây dựng một website bán thiết bị điện tử trực tuyến, hỗ trợ khách hàng tìm kiếm, xem thông tin sản phẩm, đặt hàng và quản lý đơn hàng. Đồng thời, hệ thống cung cấp các chức năng quản trị nhằm hỗ trợ quản lý sản phẩm và hoạt động kinh doanh.

## 2. Công nghệ sử dụng

| Công nghệ | Vai trò |
|---|---|
| PHP | Xử lý nghiệp vụ phía máy chủ |
| MySQL | Lưu trữ và quản lý dữ liệu |
| HTML | Xây dựng cấu trúc trang web |
| CSS | Thiết kế giao diện |
| JavaScript | Xử lý tương tác người dùng |

## 3. Chức năng chính

### Khách hàng

- Xem danh sách và chi tiết sản phẩm.
- Tìm kiếm sản phẩm theo nhu cầu.
- Đăng ký và đăng nhập tài khoản.
- Quản lý giỏ hàng và đặt hàng.
- Xem thông tin đơn hàng.
- Bình luận sản phẩm.
- Xem thông tin liên hệ và chính sách mua hàng.

### Quản trị viên

- Quản lý danh mục và sản phẩm.
- Quản lý tài khoản người dùng.
- Quản lý đơn hàng.
- Quản lý nội dung và thông tin hệ thống.

## 4. Cấu trúc thư mục

```text
QuanTriDAPM/
├── config/          # Cấu hình hệ thống
├── database/        # Cơ sở dữ liệu MySQL
├── include/         # Các hàm dùng chung
├── classes/         # Các lớp xử lý nghiệp vụ
├── css/             # Định dạng giao diện
├── js/              # JavaScript
├── fonts/           # Phông chữ
├── img/             # Hình ảnh
├── image/           # Tài nguyên hình ảnh
├── module/          # Các module chức năng
├── subpage/         # Các trang thành phần
├── README.md        # Tài liệu hướng dẫn
└── LICENSE          # Giấy phép dự án
```

*Lưu ý: Một số thư mục đang được bổ sung theo tiến độ phát triển.*

## 5. Hướng dẫn cài đặt

**Bước 1:** Cài đặt môi trường chạy PHP và MySQL, chẳng hạn XAMPP.

**Bước 2:** Tải mã nguồn dự án về máy.

**Bước 3:** Tạo cơ sở dữ liệu MySQL và import file `database/computer_store.sql`.

**Bước 4:** Kiểm tra và cập nhật thông tin kết nối trong `config/config.php`.

**Bước 5:** Khởi động máy chủ web và MySQL, sau đó truy cập website qua trình duyệt.

## 6. Phân công công việc

| Thành viên | Nhiệm vụ |
|---|---|
| **Thanh Thuận** | Cấu hình, cơ sở dữ liệu, giao diện, sản phẩm, liên hệ và chính sách |
| **Văn Thái** | Tài khoản, giỏ hàng, đơn hàng và bình luận |
| **Huỳnh Lộc** | Xây dựng chức năng quản trị hệ thống |

## 7. Quản lý mã nguồn

Dự án sử dụng Git và GitHub để quản lý phiên bản, theo dõi tiến độ và phối hợp giữa các thành viên.

Các thành viên phát triển trên nhánh riêng trước khi tích hợp vào nhánh chính.

## 8. Trạng thái dự án

Dự án đang trong quá trình phát triển và hoàn thiện theo kế hoạch phân công của nhóm.