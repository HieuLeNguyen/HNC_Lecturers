<x-app-layout>
            <!-- content sổ nhật ký giảng dạy -->
            <div class="content__kyluat mt-5">
                <form class="form__kyluat">
                    <div class="container">
                        <div class="row mt-4 ">
                            <div class="col-lg-2 ps-0 mb-2">
                                <label for="hoc__ky" class="content__name">Học kỳ:</label>
                                <select class="form-select mt-1 hocky" id="hoc__ky">
                                    <option>--Chọn học kỳ--</option>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="col-lg-2 ps-0 mb-2">
                                <label for="nam__hoc" class="content__name">Năm học:</label>
                                <select class="form-select mt-1 namhoc" id="nam__hoc">
                                    <option>--Chọn năm học--</option>
                                </select>
                            </div>
                            <div class="col-lg-2 ps-0 mb-2">
                                <label for="dot" class="content__name">Đợt:</label>
                                <select class="form-select mt-1 dot" id="dot">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="col-lg-3 ps-0 mb-2">
                                <label for="ma__tui" class="content__name">Môn học:</label>
                                <select class="form-select mt-1 matui" id="ma__tui">
                                    <option selected>--Chọn môn học--</option>
                                    <option value="1">CNT622 - An toàn bảo mật thông tin</option>
                                    <option value="2">TKH617 - Mạng máy tính</option>
                                </select>
                            </div>
                            <div class="col-lg-3 ps-0 mb-2">
                                <label for="monhoc" class="form-label11 content__name" style="margin-bottom: 4px">Tên
                                    hp, lớp tc, mã hp:</label>
                                <input type="text" class="form-control monhoc" id="monhoc"
                                    placeholder="Nhập môn học" />
                            </div>
                            <div class="col-lg-2 ps-0 mb-2">
                                <label for="monhoc" class="form-label11 content__name" style="margin-bottom: 4px">Mã
                                    cán bộ:</label>
                                <input type="text" class="form-control monhoc" id="monhoc"
                                    placeholder="Nhập môn học" />
                            </div>
                            <div class="text-start col-lg-2 ps-0 mb-2 mt-4">
                                <button type="submit" class="button_kyluat mt-2 kyluat__padding">
                                    Tìm kiếm
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- table  style="display: none"-->
            <div class="container mt-3 ps-0" id="table__kyluat" >
                <div class="d-flex gap-1 justify-content-end mb-2">
                    <input type="checkbox" name="" id="inbang" checked />
                    <h3 style="font-size: 1rem" class="mb-0" id="inbang">
                        In bảng điểm danh hiển thị ngày điểm danh
                    </h3>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-responsive" style="border: 1px solid #ccc">
                        <thead class="text-center" style="border-bottom: 2px solid #999">
                            <tr>
                                <th class="bgc__th">Mã lớp môn học, mô đun</th>
                                <th class="bgc__th">Tên môn học</th>
                                <th class="bgc__th">Tên lớp</th>
                                <th class="bgc__th">Số HT/TC</th>
                                <th class="bgc__th">Sĩ số</th>
                                <th class="bgc__th">Phân công giảng viên</th>
                                <th class="bgc__th">#</th>
                                <th class="bgc__th">#</th>
                                <th class="bgc__th">#</th>
                                <th class="bgc__th">#</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="tr__title">
                                <td>CNT622_1621CNT01</td>
                                <td>An toàn bảo mật thông tin</td>
                                <td>1621CNT01</td>
                                <td>3</td>
                                <td>46</td>
                                <td>Chọn giảng viên</td>
                                <td><button class="btn__handle1">Xếp lịch</button></td>
                                <td><button class="btn__handle2">In ĐB</button></td>
                                <td><button class="btn__handle3">Xuất ĐB</button></td>
                                <td><button class="btn__handle3">Import ĐB</button></td>
                            </tr>
                            <tr class="tr__title">
                                <td>CNT622_1621CNT01</td>
                                <td>An toàn bảo mật thông tin</td>
                                <td>1621CNT01</td>
                                <td>3</td>
                                <td>46</td>
                                <td>Chọn giảng viên</td>
                                <td><button class="btn__handle1">Xếp lịch</button></td>
                                <td><button class="btn__handle2">In ĐB</button></td>
                                <td><button class="btn__handle3">Xuất ĐB</button></td>
                                <td><button class="btn__handle3">Import ĐB</button></td>
                            </tr>
                            <tr class="tr__title">
                                <td>CNT622_1621CNT01</td>
                                <td>An toàn bảo mật thông tin</td>
                                <td>1621CNT01</td>
                                <td>3</td>
                                <td>46</td>
                                <td>Chọn giảng viên</td>
                                <td><button class="btn__handle1">Xếp lịch</button></td>
                                <td><button class="btn__handle2">In ĐB</button></td>
                                <td><button class="btn__handle3">Xuất ĐB</button></td>
                                <td><button class="btn__handle3">Import ĐB</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- loading -->
            {{-- <div class="spinner-wrapper" id="loading">
                <div class="spinner-border" style="width: 3rem; height: 3rem; color: #128080" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div> --}}
</x-app-layout>
