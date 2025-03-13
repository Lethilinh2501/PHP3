<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        // danh sách sản phẩm
        $listProduct = [
            [
                'id' => '1',
                'name' => 'abc'
            ],
            [
                'id' => '2',
                'name' => 'dnjs'
            ],
        ];
        // return view('list-product')->with([
        //     'listProduct' => $listProduct
        // ]);

        //cách 2 dùng compact(không đổi tên biến)
        return view('list-product', compact('listProduct'));
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
