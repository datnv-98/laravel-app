<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'DatNV';
        $x = 5;
        $y = 7;
        // compact gửi biến ra html, có thể gửi nhiều biến
        // return view('products.index', compact('title','x','y'));

        // $name = "Hoang";
        // with cũng thế, nhưng truyền dưới dạng key value, dở là chỉ truyền được 1 obj thôi
        // return view('products.index')->with('name', $name);

        $myphone = [
            'name' => 'iphone 14 promax',
            'year' => 2024
        ];
        // return view('products.index', compact('myphone'));

        // gửi trực tiếp biến
        return view('products.index', [
            'myphone' => $myphone
        ]);
    }
    public function about() {
        return 'This is about page';
    }
    public function detail($productName, $id) {
        // nối chuỗi
        // return 'Product id = '.$id;
        // $phones = [
        //     'iphone' => 'iphone',
        //     'samsung' => 'samsung'
        // ];
        // return view('products.index', [
        //     'products' => $phones[$productName] ?? 'unknow product'
        // ]);
        return "product name = " .$productName.
               "product id = " .$id;
    }
}
