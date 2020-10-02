<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {

        $products = Product::all();
        return response()->json($products);
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->name= $request->name;
        $product->price = $request->price;
        $product->description= $request->description;

        $product->save();
        return response()->json($product);
    }

    public function createnew(Request $request){

        $product = Product::find(1);

        $response = Http::withBasicAuth("XXXX","XXXXX")
            ->post("https://localhost",
                ['body' => '"id1,"name":"Grapes","price":23,"description":"Grapes Supes","created_at":"2020-10-01T23:48:33.000000Z","updated_at":"2020-10-01T23:48:33.000000Z"}']);


        var_dump($response);

        var_dump($response->body());

        var_dump(json_encode($product));

        return response()->json($response);

    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product= Product::find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json('product removed successfully');
    }

}

