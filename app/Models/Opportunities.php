<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunities extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'supplier_id',
        'supplier_logo',
        'title',
        'monthly_est_sale',
        'pack_of_qty',
        'img',
        'is_bundle',
        'accuracy',
        'match_id',
        'match_logo',
        'match_title',
        'match_monthly_est_sale',
        'match_pack_of_qty',
        'match_img',
        'match_is_bundle',
    ];
}
