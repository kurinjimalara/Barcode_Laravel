<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineBarcode extends Controller
{
    public function OnlineBarcode()
    {
        $productCode = rand(1234567890,5);
        return view('online_barcode', [
            'productCode' => $productCode
        ]);
    }
}
