<?php
namespace Exfriend\Laracart\Models;

class ManufacturerDescription extends \Eloquent
{
    use Prefixable;
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'manufacturer_description';
    protected $primaryKey = 'manufacturer_id';

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}