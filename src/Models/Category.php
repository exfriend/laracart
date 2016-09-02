<?php
namespace Exfriend\Laracart\Models;

class Category extends \Eloquent
{

    use EloquentDbTree, Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'category';
    protected $primaryKey = 'category_id';

    public function description()
    {
        return $this->hasOne(CategoryDescription::class, 'category_id');
    }


    public function products()
    {
        return $this->belongsToMany(Product::class, $this->prefix . 'product_to_category');
    }


}
