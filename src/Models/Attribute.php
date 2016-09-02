<?php
namespace Exfriend\Laracart\Models;

class Attribute extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'attribute';
    protected $primaryKey = 'attribute_id';

    public function description()
    {
        return $this->hasOne(AttributeDescription::class);
    }
}