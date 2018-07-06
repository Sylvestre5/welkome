<?php

namespace App\Welkome;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Guest extends Model
{
    use Searchable;
    use LogsActivity;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }

    public function children()
    {
        return $this->hasMany(\App\Welkome\Guest::class, 'responsible_of');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Welkome\Guest::class, 'responsible_of');
    }

    public function company()
    {
        return $this->belongsToMany(\App\Welkome\Company::class);
    }

    public function invoices()
    {
        return $this->belongsToMany(\App\Welkome\Invoice::class);
    }

    public function identificationType()
    {
        return $this->belongsTo(\App\Welkome\IdentificationType::class, 'identification_type_id');
    }

    public function vehicle()
    {
        return $this->hasMany(\App\Welkome\Vehicle::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
