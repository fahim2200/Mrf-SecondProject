<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static  function  getAllProduct()

    {
        return[
            0 => [
                'id'            => '1',
                'name'          => 'Headset',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price'         => '500 tk',
                'image'         => asset('/img/hset.jpg'),
                'brand'         => 'Bose',
                'category'      => 'HeadPhone'
            ],
            1 => [
                'id'            => '2',
                'name'          => 'Car',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price'         => '100000 tk',
                'image'         => asset('/img/car.jpg'),
                'brand'         => 'Tata',
                'category'      => 'Vehicle'
            ],
            2 => [
                'id'            => '3',
                'name'          => 'Bag',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price'         => '1000 tk',
                'image'         => asset('/img/bag.jpg'),
                'brand'         => 'polo',
                'category'      => 'Bag'
            ],
            3 => [
                'id'            => '4',
                'name'          => 'Shoe',
                'description'   => 'Blog Description',
                'price'         => '3000 tk',
                'image'         => asset('/img/shoes.jpg'),
                'brand'         => 'Bata',
                'category'      => 'Men'
            ],
            4 => [
                'id'            => '5',
                'name'          => 'Camera',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => asset('/img/bag.jpg'),
                'brand'         => 'Canon',
                'category'      => 'Cam'
            ],
            5 => [
                'id'            => '6',
                'name'          => 'Shoe',
                'description'   => 'Blog Description',
                'price'         => '3000 tk',
                'image'         => asset('/img/s2.jpg'),
                'brand'         => 'Bata',
                'category'      => 'Men'
            ],
        ];
    }
}
