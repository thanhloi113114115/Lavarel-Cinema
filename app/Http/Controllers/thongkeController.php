<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    public function thongKeGenre(Request $request)
    {
        $genreName = 'X'; // Thay 'X' bằng thể loại cụ thể bạn quan tâm

        $totalViewers = DB::table('Viewership')
            ->join('Lịch Chiếu', 'Viewership.LichChieuID', '=', 'Lịch Chiếu.LichChieuID')
            ->join('Phim', 'Lịch Chiếu.PhimID', '=', 'Phim.PhimID')
            ->join('Phòng', 'Lịch Chiếu.PhongID', '=', 'Phòng.PhongID')
            ->where('Phim.Theloai', $genreName)
            ->count();
        echo "Số lượt khán giả đã xem phim thể loại '$genreName' là: $totalViewers";
    }
}
