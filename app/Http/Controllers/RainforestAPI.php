<?php

namespace App\Http\Controllers;

use App\Models\Opportunities;
use Illuminate\Http\Request;
use CaponicaAmazonRainforest\Client\RainforestClient;
use CaponicaAmazonRainforest\Request\ProductRequest;

class RainforestAPI extends Controller
{
    public $config = [ 'api_key' => 'C886447C4EC04A3B9DC5118C90466A5C' ];
    public $rfClient;

    public function __construct(){
        $this->rfClient = new RainforestClient($this->config);
        $this->getProducts();
    }
    //
    public function index(){
        return view('rainforest.dashboard');
    }

    public function getProducts(){
        $request = new ProductRequest(RainforestClient::AMAZON_SITE_USA, 'B001234567');
        $rfRequests = [
            new ProductRequest(RainforestClient::AMAZON_SITE_USA, 'B001234567'),
        ];
        //$rfRequests = $this->rfClient->prepareRequestArray($rfRequests);
        $apiEntities = $this->rfClient->retrieveProducts($rfRequests);
        dd($rfRequests);
    }
}
