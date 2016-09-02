<?php
namespace Exfriend\Laracart\Models;

class Stockstatus extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'stock_status';
    protected $primaryKey = 'stock_status_id';
}