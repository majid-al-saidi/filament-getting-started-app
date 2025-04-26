<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    protected $fillable = ['date_of_birth', 'name', 'owner_id', 'type'];
    protected $table = 'patients';
    protected $casts = [
        'date_of_birth' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }
}
