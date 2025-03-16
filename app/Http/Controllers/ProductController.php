<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        // danh sách sản phẩm
        // $listProduct = [
        //     [
        //         'id' => '1',
        //         'name' => 'abc'
        //     ],
        //     [
        //         'id' => '2',
        //         'name' => 'dnjs'
        //     ],
        // ];
        // return view('list-product')->with([
        //     'listProduct' => $listProduct
        // ]);

        //cách 2 dùng compact(không đổi tên biến)
        // return view('list-product', compact('listProduct'));

        // 1. Lấy danh sách toàn bộ user
        // $result = DB::table('users')->get();

        // 2. Lấy thông tin user có id = 4
        // $result = DB::table('users')->where('id', '=', '3')->first();
        // $result = DB::table('users')->find('2'); // chỉ sử dụng cho trường hợp biết id

        // 3. Lấy thuộc tính 'name' của user có id = 16
        // $result = DB::table('users')->where('id', '=', '2')
        //     ->value('name');

        // 4. Lấy danh sách id của phòng ban 'Ban giám hiệu'
        // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', 'Ban giám hiệu')
        //     ->value('id');
        // $result = DB::table('users')->where('phongban_id', $idPhongBan)
        //     ->pluck('id');

        // 5. Tìm user có độ tuổi lớn nhất trong công ty
        // $result = DB::table('users')->where('tuoi', DB::table('users')->max('tuoi'))
        //     ->get();

        // 6. Tìm user có độ tuổi nhỏ nhất trong công ty
        // $result = DB::table('users')->where('tuoi', DB::table('users')->min('tuoi'))
        //     ->get();

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user
        // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', 'Ban giám hiệu')
        //     ->value('id');
        // $result = DB::table('users')->where('phongban_id', $idPhongBan)
        //     ->count();

        // 8. Lấy danh sách tuổi các user
        // $result = DB::table('users')->distinct()->pluck('tuoi');

        // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $result = DB::table('users')
        //     ->where('name', 'like', '%linh')
        //     ->orWhere('name', 'like', '%hoai')
        //     ->get();

        // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', 'Ban giám hiệu')
        //     ->value('id');
        // $result = DB::table('users')->where('phongban_id', $idPhongBan)
        //     ->get();

        // 11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')->where('tuoi', '>=', '30')
        //     ->orderBy('tuoi', 'asc')
        //     ->get();

        // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')
        //     ->orderBy('tuoi', 'asc')
        //     ->offset(5)
        //     ->limit(10)
        //     ->get();

        // 13. Thêm một user mới vào công ty
        // $data = [
        //     'name' => 'Le Thi Linh',
        //     'email' => 'lethilinh@gmail.com',
        //     'phongban_id' => '1',
        //     'songaynghi' => '2',
        //     'tuoi' => '22',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),

        // ];
        // DB::table('users')->insert($data);
        // $userId = DB::table('users')->insertGetId($data);
        // $result = DB::table('users')->find($userId);

        // dd($result);

        // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo'
        $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', 'Ban đào tạo')
            ->value('id');
        $listUser = DB::table('users')->where('phongban_id', $idPhongBan)
            ->get();

        foreach ($listUser as $value) {
            DB::table('users')->where('id', '=', $value->id)
                ->update([
                    'name' => $value->name . 'PĐT'
                ]);
        }

        // 15. Xóa user nghỉ quá 15 ngày
        // DB::table('users')->where('songaynghi', '>', '15')->delete();

        // dd($result);
    }

    public function getProduct($id, $name = '')
    {
        echo $id;
        echo $name;
    }

    public function updateProduct(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }
}
