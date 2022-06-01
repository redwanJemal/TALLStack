<?php

namespace App\Http\Livewire;

use App\Models\Opportunities;
use Livewire\Component;

class Opportunity extends Component
{
    public function render()
    {
        $items = collect([[
            'id' => 1,
            'code' => 'B0042ETBEQ',
            'variants' => '3',
            'rating' => '4.4',
            'ratted' => '96',
            'title' => 'Cross Stitch Motif Series 6: Kitchen: 180 New Cross Stitch Models [Paperback] Diaz, Maria',
            'channel_logo' => 'http://media.corporate-ir.net/media_files/IROL/17/176060/Oct18/Amazon%20logo.PNG',
            'brand_letter' => 'BD',
            'brand_img' => 'https://flowbite.com/docs/images/people/profile-picture-5.jpg',
            'brand_title' => 'Sevim Torğut',
            'img' => 'https://m.media-amazon.com/images/I/31J0xlT938L._SX522_.jpg',
            'bb_price' => '20.91',
            'competitors' => '7',
            'est_sales' => '11692',
            'sales_rank' => '66',
            'sales_percent' => '14',
            'fbm_shipment_cost' => '4.75',
            'fba_shipment_cost' => '0.75',
            'kg/desi' => '0.07',
            'shipping_size_tier' => 'Small Standard',
            'category' => 'Beauty & Personal Care',
            'set' => '1',
        ],[
            'id' => 2,
            'code' => 'B0042ETBEC',
            'variants' => '3',
            'rating' => '4.4',
            'ratted' => '96',
            'title' => 'Cross Stitch Motif Series 6: Kitchen: 180 New Cross Stitch Models [Paperback] Diaz, Maria',
            'channel_logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/EBay_logo.svg/1200px-EBay_logo.svg.png',
            'brand_letter' => 'BD',
            'brand_img' => 'https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250',
            'brand_title' => 'Torğut Sevim',
            'img' => 'https://m.media-amazon.com/images/I/31J0xlT938L._SX522_.jpg',
            'bb_price' => '23.91',
            'competitors' => '7',
            'est_sales' => '11692',
            'sales_rank' => '66',
            'sales_percent' => '4',
            'fbm_shipment_cost' => '4.75',
            'fba_shipment_cost' => '0.75',
            'kg/desi' => '0.07',
            'shipping_size_tier' => 'Small Standard',
            'category' => 'Beauty & Personal Care',
            'set' => '1',
        ]]);
        return view('livewire.opportunity',
            [ 'items' => $items]);
    }
}
