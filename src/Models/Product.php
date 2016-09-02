<?php
namespace Exfriend\Laracart\Models;

class Product extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'product';
    protected $primaryKey = 'product_id';


    // -------------------------------------------------------------------
    // --[ ORM-связи ]------------------------------------------------------
    // -------------------------------------------------------------------

    public function description()
    {
        return $this->hasOne(ProductDescription::class, 'product_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, $this->prefix . 'product_attribute');
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class, $this->prefix . 'product_to_store');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, $this->prefix . 'product_to_category', 'product_id',
            'category_id');
    }

    public function related()
    {
        return $this->belongsToMany(Product::class, $this->prefix . 'product_related',
            'product_id', 'related_id');
    }

    // -------------------------------------------------------------------
    // --[ функции ]------------------------------------------------------
    // -------------------------------------------------------------------


    public function enable()
    {
        $this->status = 1;
        $this->save();
    }

    public function disable()
    {
        $this->status = 0;
        $this->save();
    }

}
