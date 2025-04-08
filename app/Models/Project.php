<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
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

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return HasMany
     */
    public function Compounds(): HasMany
    {
        return $this->hasMany(Compound::class);
    }
}
