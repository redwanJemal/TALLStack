<?php

namespace App\Http\Controllers;

use App\Models\Opportunities;
use Illuminate\Http\Request;
use CaponicaAmazonRainforest\Client\RainforestClient;
use CaponicaAmazonRainforest\Request\ProductRequest;
use Illuminate\Support\Facades\Redis;

class JobController extends Controller
{

    public $config = [ 'api_key' => 'C886447C4EC04A3B9DC5118C90466A5C' ];

    public $a=array("red","green");
    public $products = array();
    public $rfClient;
    /**
     * @param string[] $config
     */
    public function __construct()
    {
        $this->rfClient = new RainforestClient($this->config);
    }

    public function getProducts(){
        $rfRequests = [
            new ProductRequest(RainforestClient::AMAZON_SITE_USA, 'B073JYC4XM'),
            // ... can queue up more - they are sent asynchronously ...
        ];
        //$rfRequests = $this->rfClient->prepareRequestArray($requests); // Optional step. De-duplicates the requests and sets keys you can use for local caching.
        $apiEntities = $this->rfClient->retrieveProducts($rfRequests);
        $count = 1;
        foreach ($apiEntities as $key => $rfProduct) {
            // do something with the Product object ...
            array_push($a,"blue_".$count,"red".$count);
            $count += 1;
            //array_push($this->products,array($rfProduct));
        }
        return view('jobs.all',['products' => $this->a]);
    }

    public function all(){
        $id = 4;
//        $cachedBlog = Redis::get('blog_' . $id);
//        //dd($cachedBlog[0]);
//        if(isset($cachedBlog)) {
//            $blog = json_decode($cachedBlog, FALSE);
//            dd($blog);
//
//            return response()->json([
//                'status_code' => 201,
//                'message' => 'Fetched from redis',
//                'data' => $blog,
//            ]);
//        }else {
//            $blog = json_encode('{"label":["rent","heating","utilities","internet_tv" ...],"value":[435,30,0,0 ...]}');
//            Redis::set('blog_' . $id, $blog);
//            dd("done");
//        }
        $items = Opportunities::all();
        return view('jobs.all',['items' => $items]);
    }

    public function admin(){
        return view('jobs.admin.dashboard');
    }
}
