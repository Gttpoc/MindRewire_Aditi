<?php

namespace App\Models;

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TherapyCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getHashedIdAttribute()
    {
        return Hashids::encode($this->id); // e.g. "NkK9";
    }
}
