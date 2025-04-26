<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Treatment extends Model
{
    protected $fillable = ['description', 'notes', 'patient_id', 'price'];
    protected $table = 'treatments';
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'price' => MoneyCast::class,
    ];
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function owner(): HasOneThrough
    {
        return $this->hasOneThrough(Owner::class, Patient::class);
    }
}
