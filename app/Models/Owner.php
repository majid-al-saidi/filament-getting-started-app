<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Owner extends Model
{
    protected $fillable = ['email', 'name', 'phone'];
    protected $table = 'owners';
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function patients() : HasMany
    {
        return $this->hasMany(Patient::class);
    }
    public function treatments() : HasManyThrough
    {
        return $this->hasManyThrough(Treatment::class, Patient::class);
    }
}
