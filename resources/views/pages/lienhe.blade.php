<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liên hệ</title>
    <link rel="shortcut icon" href="./images/logoHNC.png" type="image/x-icon" />

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/root.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/lienhe.css" />
    <link rel="stylesheet" href="./css/responsive.css" />

    <!-- icon -->
    <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- js -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="main">
        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar__padd" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- giới thiệu -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Giới thiệu</a>
                        </li>
                        <!-- giảng dạy -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Giảng dạy
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="SeeTimeAble.html">Xem thời khoá biểu</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Lịch coi thi</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Sổ nhật ký giảng dạy</a>
                                </li>
                            </ul>
                        </li>

                        <!-- chấm thi, nhập điểm -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Chấm thi, nhập điểm
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="tinchi.html">Danh sách lớp tín chỉ</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Nhập điểm
                                        <span style="float: right; margin-top: 4px"><ion-icon
                                                name="chevron-forward-outline"></ion-icon></span></a>
                                    <ul class="dropdown-menu submenu">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                Nhập điểm thành phần (Điểm quá trình)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Nhập điểm thi</a>
                                        </li>
                                        <li>
                                            <a href="tuithi.html" class="dropdown-item">Nhập điểm túi thi</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="kyluat.html">Nhập hình thức kỷ luật</a>
                                </li>
                            </ul>
                        </li>

                        <!-- danh mục -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Danh mục
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="danhmuc.html">Biểu mẫu</a>
                                </li>
                            </ul>
                        </li>
                        <!-- liên hệ -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span> <ion-icon name="call"></ion-icon> </span>Liên hệ</a>
                        </li>

                        <!-- thông tin -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span>
                                    <ion-icon name="person-sharp"></ion-icon>
                                </span>
                                Trần Văn A
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="info.html">Thông tin</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span>
                                            <ion-icon name="lock-closed"></ion-icon>
                                        </span>
                                        Đổi mật khẩu
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span style="display: flex; align-items: center; gap: 0.3rem">
                                            <ion-icon name="power"></ion-icon>Đăng xuất
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- content -->
        <div class="content">
            <h3 class="content__lienhe">
                Dự án phát triển bởi team sinh viên khoa CNTT HPC K21
            </h3>
            <ul class="content__description">
                <li class="content__description-item">Địa chỉ:...</li>
                <li class="content__description-item">Điện thoại:....</li>
                <li class="content__description-item">Email: .....</li>
            </ul>
        </div>

        <div class="hr"></div>

        <!-- footer -->
        <div class="footer">
            <a href="https://caodanghanoi.edu.vn/" class="footer__nameScholl">Trường Cao đẳng Hà Nội</a>
            <div class="footer__copyright">©2024 Developed by HPC - v1.0</div>
        </div>
    </div>
</body>

</html>
