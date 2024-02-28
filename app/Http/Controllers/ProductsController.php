<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function food() { 
        return 'beverage';
    }
    public function beauty() { 
        return 'health';
    }
    public function home() { 
        return 'care';
    }
    public function baby() { 
        return 'kid';
    }
}
