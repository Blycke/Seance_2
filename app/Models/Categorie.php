<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    protected $table = 'categories';
    protected $fillable = ['nom'];

    public function livres(): HasMany
    {
        return $this->hasMany(Livre::class, 'categorie_id');
    }
}
