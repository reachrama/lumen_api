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

        var_dump($product->toJson());

        /*$response = Http::withBasicAuth("mortgage_connect","#zeb86T0#2")
            ->post("https://clarity-uat.amcfirst.com/listener_vendor",
                ['body' => '{"mortgages":[{"amount":600.00,"documentBook":2112,"documentNumber":1,"documentPage":195,"documentType":"Mortgage","executedDate":null,"granteeName":null,"grantorName":null,"recordedDate":null},{"amount":650.00,"documentBook":21121,"documentNumber":12,"documentPage":1951,"documentType":"Mortgage","executedDate":null,"granteeName":null,"grantorName":null,"recordedDate":null}]}']);


        var_dump($response);

        var_dump($response->body());

        var_dump(json_encode($product));
        return response()->json($response);*/

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

