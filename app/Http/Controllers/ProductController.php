<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\APII;

class ProductController extends Controller
{
    function post(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->active = $request->active;
        $product->descriptions = $request->descriptions;
        $product->gambar = $request->gambar;

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
        $data = Product::all();

        return response()->json(
            [
                "meta" => [
                    "message" => "Success",
                ],
                "data" => $data
            ]
        );
    }
    function getByName($name)
    {
        $data = Product::where('name', $name)->get();

        return response()->json(
            [
                "meta" => [
                    "message" => "Success",
                ],
                "data" => $data
            ]
        );
    }
    function getById($id)
    {
        $data = Product::where('id', $id)->get();

        return response()->json(
            [
                "meta" => [
                    "message" => "Success",
                ],
                "data" => $data
            ]
        );
    }
    function put($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            $product->name = $request->name ? $request->name : $product->name;
            $product->price = $request->price ? $request->price : $product->price;
            $product->quantity = $request->quantity ? $request->quantity : $product->quantity;
            $product->active = $request->active ? $request->active : $product->active;
            $product->descriptions = $request->descriptions ? $request->descriptions : $product->descriptions;

            $product->save();

            return response()->json(
                [
                    "meta" => [
                        "message" => "Success",
                    ],
                    "data" => $product
                ]
            );
        } else {
            return response()->json(
                [
                    "meta" => [
                        "message" => "Products with id " . $id . " Not Found",
                    ],

                ],
                400
            );
        }
    }
    function delete($id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            $product->delete();
            return response()->json(
                [
                    "meta" => [
                        "message" => "DELETE Product id " . $id . " Success",
                    ],
                ]
            );
        } else {
            return response()->json(
                [
                    "meta" => [
                        "message" => "Product with " . $id . " Tidak Ditemukan",
                    ],
                ],
                400
            );
        }
    }
}