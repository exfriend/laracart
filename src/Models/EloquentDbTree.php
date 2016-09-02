<?php
namespace Exfriend\Laracart\Models;

trait EloquentDbTree
{
    public function scopeParent($query)
    {
        return $query->find($this->parent_id);
    }

    public function scopeChildren($query)
    {
        return $query->where('parent_id', '=', $query->getModel()->getKey());
    }

    public function scopeRoot($query)
    {
        return $query->where('parent_id', '=', 0);
    }
}