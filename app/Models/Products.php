<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function saveStudent($data) {
        return $this->create($data);
    }
    public function getProducts(){
        return $this->all();
    }
    public function deleteProducts($id){
        $products = $this->find($id);
        $products->delete();
    }
    public function updateStudent($id){
        return $this->find($id);
    }
    public function updatedProducts($data, $id){
        $products = $this->find($id);
        $products->update($data);
    }
}
