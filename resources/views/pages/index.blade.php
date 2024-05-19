{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giới thiệu</title>
    <link rel="shortcut icon" href="./images/logoHNC.png" type="image/x-icon" />

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/root.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/index.css" />

    <!-- icon -->
    <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- js -->
    <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
                            <a class="nav-link active" aria-current="page" href="#">Giới thiệu</a>
                        </li>
                        <!-- giảng dạy -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Giảng dạy
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Xem thời khoá biểu</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="lichcoithi.html">Lịch coi thi</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="giangday.html">Sổ nhật ký giảng dạy</a>
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
                            <a class="nav-link active" aria-current="page" href="lienhe.html">
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
            <h3 class="content__title">Về chúng tôi</h3>
            <ul class="content__description">
                <li class="content__description-item">
                    Từ sự đam mê công nghệ thông tin và cam kết chất lượng trong từng
                    sản phẩm, nhóm sinh viên của HPC đã chuyên tâm nghiên cứu và phát
                    triển các giải pháp phần mềm, đặc biệt cho ngành giáo dục và y tế.
                    Đội ngũ này, bao gồm các sinh viên xuất sắc từ trường Cao đẳng Công
                    Nghệ Bách Khoa Hà Nội, không chỉ theo đuổi niềm say mê với công nghệ
                    mà còn dành tâm huyết để tạo ra những sản phẩm mang tính đột phá,
                    giúp cải thiện hiệu quả quản lý trong các cơ sở giáo dục và y tế.
                </li>
                <li class="content__description-item">
                    Với mục tiêu phát triển bền vững, nhóm sinh viên HPC đã thiết kế các
                    phần mềm không chỉ sáng tạo mà còn dễ dàng tùy chỉnh theo nhu cầu
                    đặc thù của từng khách hàng. Họ cam kết cung cấp các giải pháp phần
                    mềm truyền thống có sẵn, cho phép các đơn vị giáo dục và y tế mô
                    phỏng chính xác mô hình và quy trình quản lý của họ, đồng thời có
                    khả năng tự phát triển và cập nhật theo thời gian nếu cần thiết.
                </li>
                <li class="content__description-item">
                    Các sản phẩm phần mềm được nhóm HPC phát triển bao gồm quản lý khoa
                    học, cán bộ, sinh viên, điểm số, lập kế hoạch thời khoá biểu, cổng
                    thông tin dành cho nhà trường và sinh viên, quản lý học phí và học
                    bổng, quản lý thi trắc nghiệm, thư viện, công văn và quản trị hệ
                    thống. Những giải pháp này không chỉ đã được khẳng định trên thị
                    trường mà còn góp phần tạo lợi ích cho cộng đồng, nhấn mạnh tinh
                    thần đoàn kết và chia sẻ kiến thức.
                </li>
                <li class="content__description-item">
                    Bên cạnh đó, nhóm HPC cũng đã phát triển các giải pháp cho doanh
                    nghiệp như hệ thống ERP, cổng thông tin doanh nghiệp, góp phần vào
                    quá trình bình ổn giá và phát triển kinh tế xã hội. Với tinh thần
                    “cung cấp giải pháp quản lý đào tạo tối ưu - chính sách hậu mãi ưu
                    việt”, nhóm sinh viên HPC tự tin khẳng định sẽ mang lại sự vững chắc
                    cho khách hàng và thị trường.
                </li>
            </ul>
        </div>


    </div>
</body>

</html> --}}
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                            <!-- content -->
        <div class="content">
            <h3 class="content__title">Về chúng tôi</h3>
            <ul class="content__description">
                <li class="content__description-item">
                    Từ sự đam mê công nghệ thông tin và cam kết chất lượng trong từng
                    sản phẩm, nhóm sinh viên của HPC đã chuyên tâm nghiên cứu và phát
                    triển các giải pháp phần mềm, đặc biệt cho ngành giáo dục và y tế.
                    Đội ngũ này, bao gồm các sinh viên xuất sắc từ trường Cao đẳng Công
                    Nghệ Bách Khoa Hà Nội, không chỉ theo đuổi niềm say mê với công nghệ
                    mà còn dành tâm huyết để tạo ra những sản phẩm mang tính đột phá,
                    giúp cải thiện hiệu quả quản lý trong các cơ sở giáo dục và y tế.
                </li>
                <li class="content__description-item">
                    Với mục tiêu phát triển bền vững, nhóm sinh viên HPC đã thiết kế các
                    phần mềm không chỉ sáng tạo mà còn dễ dàng tùy chỉnh theo nhu cầu
                    đặc thù của từng khách hàng. Họ cam kết cung cấp các giải pháp phần
                    mềm truyền thống có sẵn, cho phép các đơn vị giáo dục và y tế mô
                    phỏng chính xác mô hình và quy trình quản lý của họ, đồng thời có
                    khả năng tự phát triển và cập nhật theo thời gian nếu cần thiết.
                </li>
                <li class="content__description-item">
                    Các sản phẩm phần mềm được nhóm HPC phát triển bao gồm quản lý khoa
                    học, cán bộ, sinh viên, điểm số, lập kế hoạch thời khoá biểu, cổng
                    thông tin dành cho nhà trường và sinh viên, quản lý học phí và học
                    bổng, quản lý thi trắc nghiệm, thư viện, công văn và quản trị hệ
                    thống. Những giải pháp này không chỉ đã được khẳng định trên thị
                    trường mà còn góp phần tạo lợi ích cho cộng đồng, nhấn mạnh tinh
                    thần đoàn kết và chia sẻ kiến thức.
                </li>
                <li class="content__description-item">
                    Bên cạnh đó, nhóm HPC cũng đã phát triển các giải pháp cho doanh
                    nghiệp như hệ thống ERP, cổng thông tin doanh nghiệp, góp phần vào
                    quá trình bình ổn giá và phát triển kinh tế xã hội. Với tinh thần
                    “cung cấp giải pháp quản lý đào tạo tối ưu - chính sách hậu mãi ưu
                    việt”, nhóm sinh viên HPC tự tin khẳng định sẽ mang lại sự vững chắc
                    cho khách hàng và thị trường.
                </li>
            </ul>
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>