<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CaponicaAmazonRainforest\Client\RainforestClient;
use CaponicaAmazonRainforest\Request\ProductRequest;

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
            new ProductRequest(RainforestClient::AMAZON_SITE_USA, 'B001234567'),
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
        $rfRequests = [
            new ProductRequest(RainforestClient::AMAZON_SITE_USA, 'B001234567'),
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

    public function admin(){
        return view('jobs.admin.dashboard');
    }
}
