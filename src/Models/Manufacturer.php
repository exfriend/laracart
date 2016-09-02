<?php
namespace Exfriend\Laracart\Models;

class Manufacturer extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'manufacturer';
    protected $primaryKey = 'manufacturer_id';

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function description()
    {
        return $this->hasOne(ManufacturerDescription::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class, $this->prefix . 'product_to_store');
    }

}