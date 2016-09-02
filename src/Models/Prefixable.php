<?php
namespace Exfriend\Laracart\Models;

trait Prefixable
{

    protected $prefix = '';

    // ---------------------------------------------------------------------
    // --[ тест конструктора ]------------------------------------------------------
    // ---------------------------------------------------------------------

    public function __construct($attrs = false)
    {
        $this->prefix = env('DB_PREFIX');
        $this->table = $this->prefix . $this->table;

        if (!empty($attrs)) {
            parent::__construct($attrs);
        } else {
            parent::__construct();
        }
    }

}