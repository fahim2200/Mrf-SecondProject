<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class ViewController extends Controller
{
    private $city;
    private $name;
    private $data = [];
    private $products;
    public function index(){

        return view('test');
    }


    public function bitm(){

        $this->city = 'Dhaka';
        $this->mobile = '123456';
        $this->data = [
          0=>  [
              'name' => 'Fahim',
              'city' => 'Dhaka',
                'mobile' => '123456'
            ],
            1=>  [
                'name' => 'Rahim',
                'city' => 'Khulna',
                'mobile' => '121256'
            ],
            2=>  [
                'name' => 'Kalam',
                'city' => 'Cumilla',
                'mobile' => '145616'
            ],
        ];
        return view('demo', [
                'hasib'=> $this->city,
                'topu' => $this->mobile,
                'fahim' => $this->data
        ]);

//        return view('demo');
    }
    public function about(){
        $this->products = Product::getAllProduct();
        return view('about',['products' => $this->products]);
    }
    public function contact(){

        return view('contact');
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
        return view('detail',['data' =>$item]);
        }
    }
}
}
