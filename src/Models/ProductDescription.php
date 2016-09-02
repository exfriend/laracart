<?php
namespace Exfriend\Laracart\Models;

class ProductDescription extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'product_description';
    protected $primaryKey = 'product_id';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}