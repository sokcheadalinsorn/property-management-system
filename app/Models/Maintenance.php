<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    // Relationship many maintenances has many tenants
    public function tenants()
    {
        return $this->HasMany(Tenant::class);
    } 

    // Relationship many maintenances has many units
    public function units()
    {
        return $this->HasMany(Unit::class);
    }
}
