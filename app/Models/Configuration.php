<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    //
    /**
     * @return string[]
     */
    protected function casts(): array
    {
        return [
            'options'   =>  'array',
        ];
    }
}
