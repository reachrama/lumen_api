<?php


namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientPushController
{

    public function pushPostRequestToClient(){

        //Fetch the Data
        //$product = Product::find(1);
        //Convert it into JSON and pass it into the body of the POST request with Basic Auth

        $response = Http::withBasicAuth("XXXXX","#XXXXX")
            ->post("http://localhost:8000/api/v1/items",
            ['body' => '"name":"Apple Phone XR","price":954,"description":"Apple Phone XR nice offer"}']);

        return response()->json($response);

    }


}
