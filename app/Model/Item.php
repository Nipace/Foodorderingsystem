<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Item extends Model
{
    use Searchable;

    public function searchableAs()
    {
        return 'items_index';
    }
}
