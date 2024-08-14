<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

// Default: The home page is an excerpt from the teaching diary
class HomeController extends Controller
{
    public function index()
    {
        //Giá trị mặc đinh
        $hocKy = 1;
        $namHoc = 2023; //2023-2024 lấy ra 20 nằm từ 2014-2034
        $dot = 1;

        //bảng lớp, bảng môn học, hoso_giangvien

        return view('pages.giangday');
    }

    public function show($maMH, $tenLop, $maCB)
    {
        # code...
    }
}
