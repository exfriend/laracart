<?php
namespace Exfriend\Laracart\Models;

class AttributeDescription extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'attribute_description';
    protected $primaryKey = 'attribute_id';
}