<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FeaturedTrait
{
    public function scopeFeatured( Builder $q )
    {
        return $q->whereIsFeatured( true );
    }
}