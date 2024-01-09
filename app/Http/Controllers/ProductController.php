<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    function __construct(){
        $this->products = new Products;
    }
    function index(){
        $products = $this->products->getProducts();
        return view('home', compact('products'));
    }
    function save_student(Request $request){
        $data = [
            'name' => $request->name,
            'student_id' => $request->student_id,
        ];
        $this->products->saveStudent($data);
        return back();
    }
    function delete_student($id){
        $this->products->deleteProducts($id);
        return back();
    }
    function update_student($id){
        $products = $this->products->updateStudent($id);
        return view('update_products', compact('products'));
    }
    function save_updated_student(Request $request){
        $data = [
            'name' => $request->update_name,
            'student_id' => $request->update_student_id,
        ];
        $this->products->updatedProducts($data, $request->id);
        return redirect()->route('home');
    }
}
