<?php


namespace App\Http\Controllers;


use App\MortgageJudgment;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use DB;

class ClientPushController
{

    public function pushPostRequestToClient(){

        //Fetch the orders based on customerId, product name and status
        $order = DB::table('orders')->where('customer_id', 36)->first();

        var_dump(response()->json(['Order' => $order])->content());

        //foreach($orders->get() as $order) {

        $mortageJudgement = DB::table('mortage_judgment_lien')->where('order_id', 243)->first();
        //If the mortage judgement is not null proceed further
        if($mortageJudgement != null) {
           // var_dump(response()->json($mortageJudgement));
          //  echo $mortageJudgement->order_id;
           // echo $mortageJudgement->order_task_id;

        }


       // }


        //var_dump($mortgageJudgement);

        //Fetch the Data
       //$product = Product::find(1);
        //Convert it into JSON and pass it into the body of the POST request with Basic Auth

        /*$response = Http::withBasicAuth("mortgage_connect","#zeb86T0#2")
            ->post("http://localhost:8000/api/v1/items",
            ['body' => '"name":"Apple Phone XR","price":954,"description":"Apple Phone XR nice offer"}']);*/




    }


}
