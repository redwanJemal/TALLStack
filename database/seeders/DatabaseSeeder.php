<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Opportunities;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'redwan@admin.com',
            'password' => bcrypt('password'),
        ]);

        Job::factory(50)->create();

        Opportunities::create([
            'supplier_id' => 1,
            'supplier_logo' => 'https://sustainablebrandsturkey.com/2021/wp-content/uploads/hepsiburada.png',
            'title' => 'Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001',
            'monthly_est_sale' => 522,
            'pack_of_qty' => 2,
            'is_bundle' => 1,
            'accuracy' => 89,
            'img' => 'https://hansnaturals.com/wp-content/uploads/2020/12/51108062.jpg',
            'match_id' => 1,
            'match_img' => 'https://hansnaturals.com/wp-content/uploads/2020/12/51108062.jpg',
            'match_logo' => 'https://i0.wp.com/zeevector.com/wp-content/uploads/LOGO/Amazon-India-Logo-PNG-HD.png?fit=841%2C240&ssl=1',
            'match_title' => 'Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001',
            'match_monthly_est_sale' => 142,
            'match_pack_of_qty' => 3,
            'match_is_bundle' => 1
        ]);

        Opportunities::create([
            'supplier_id' => 1,
            'supplier_logo' => 'https://sustainablebrandsturkey.com/2021/wp-content/uploads/hepsiburada.png',
            'title' => 'Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001',
            'monthly_est_sale' => 92,
            'pack_of_qty' => 4,
            'is_bundle' => 1,
            'accuracy' => 45,
            'img' => 'https://hansnaturals.com/wp-content/uploads/2020/12/51108062.jpg',
            'match_id' => 1,
            'match_img' => 'https://hansnaturals.com/wp-content/uploads/2020/12/51108062.jpg',
            'match_logo' => 'https://purepng.com/public/uploads/large/purepng.com-walmart-logologobrand-logoiconslogos-251519939045oqelv.png',
            'match_title' => 'Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001 Farmasi Dr C. Tuna Vitalizing Sarmsaki Samusun 500 mi-111001',
            'match_monthly_est_sale' => 142,
            'match_pack_of_qty' => 5,
            'match_is_bundle' => 1,
        ]);

    }
}
