<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class prodact extends Model
{
    use HasFactory, Notifiable;

    // protected $table = ' prodacts';
    // protected $fillable = [
    //     'name', 'details', 'image', 'meta_tags', 'meta_description',
    //     'product_tags', 'category_id', 'sku', 'upc', 'EAN', 'JAN',
    //     'MPN', 'country', 'city', 'tax', 'minimum_qnty', 'stock_status',
    //     'requir_shipping', 'date_available', 'dimensions', 'lenght_class', 'weight', '',
    //     'weight_class', 'sort_order', 'status', 'vendor_id', 'store_id',
    //     'model', 'old_price', 'price',
    // ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }

    public function vendor()
    {
        return $this->belongsTo(vendor::class, 'vendor_id', 'id');
    }

    public function vendor_store()
    {
        return $this->belongsTo(vendor_store::class, 'store_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(country::class, 'country_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(city::class, 'city_id', 'id');
    }

    

    public function getActivityStatusattribute()
    {

        return $this->status ? 'Active' : 'In-Active';
    }
}
