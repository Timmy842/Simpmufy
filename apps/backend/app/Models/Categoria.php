<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model {
    use HasFactory;

    protected $fillable = ['nombre', 'slug'];

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class);
    }
}
