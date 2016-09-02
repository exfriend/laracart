<?php
namespace Exfriend\Laracart\Models;

class Alias extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'url_alias';
    protected $primaryKey = 'url_alias_id';
}