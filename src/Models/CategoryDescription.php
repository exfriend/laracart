<?php
namespace Exfriend\Laracart\Models;

class CategoryDescription extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'category_description';
    protected $primaryKey = 'category_id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}