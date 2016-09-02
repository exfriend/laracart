<?php
namespace Exfriend\Laracart\Models;

class Store extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'store';
    protected $primaryKey = 'store_id';

    public function products()
    {
        return $this->hasMany(Product::class, $this->prefix . 'product_to_category');
    }
}