<?php

namespace App\Http\Controllers;

use App\flights;
use Illuminate\Http\Request;

class Api extends Controller
{
    function postE(Request $request)
    {
        $product = new flights();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->gambar = $request->gambar;
        $product->active = $request->active;
        $product->descriptions = $request->descriptions;

        $product->save();

        return response()->json(
            [
                "meta" => [
                    "message" => "Success",
                ],
                "data" => $product
            ]
        );
    }
    function get()
    {
        $data = flights::all();

        return response()->json(
            [
                "meta" => [
                    "message" => "Success",
                ],
                "data" => $data
            ]
        );
    }
}