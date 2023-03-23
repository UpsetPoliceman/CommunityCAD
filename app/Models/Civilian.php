<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Civilian extends Model
{
    use HasFactory, softDeletes;

    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    protected $with = ['licenses'];


    public function getSNNAttribute()
    {
        return implode('-', str_split($this->id, 3));
    }

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAddressAttribute()
    {
        return $this->postal . ' ' . $this->street . ' ' . $this->city;
    }

    public function getAgeAttribute()
    {
        $birthday = $this->date_of_birth;
        $age = Carbon::parse($birthday)->age;

        return $age;
    }

    public function licenses()
    {
        return $this->HasMany(License::class);
    }
}
