<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_us extends Model
{
    private static $service = [
        [
            "slug" => "service1",
            "title" => "Hire trainer",
            "price" => "Rp 500.000",
            "desc" => "Hiring a trainer for your training needs. Come and hire our trainer!"
        ],
        
        [
            "slug" => "service2",
            "title" => "Rent a court",
            "price" => "Rp 30.000 / Hour",
            "desc" => "Need a court to do the sports you like? Come rent a court"
        ],

        [
            "slug" => "service3",
            "title" => "Buy your needs",
            "price" => "Various for every items",
            "desc" => "Need a quick bandage for your wounds? Need a suplement? We got you! Come and get it here!"
        ]

    ];

    public static function print() {
        return self::$service;      
    }

    public static function select($slug){
        $collection = collect(self::print());
        $selected = $collection->firstWhere('slug', $slug);
        return $selected;
    }
    
}
