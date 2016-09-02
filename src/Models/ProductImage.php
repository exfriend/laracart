<?php
namespace Exfriend\Laracart\Models;

class ProductImage extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'product_image';
    protected $primaryKey = 'product_image_id';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}