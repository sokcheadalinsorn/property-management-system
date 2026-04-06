<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $table = 'tenants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'created_at',
        'updated_at',
    ];

    // Relationship One tenants has one leases
    public function leases()
    {
        return $this->OneToOne(Lease::class);
    }

    // Relationship One tenants has many maintenances
    public function maintenances()
    {
        return $this->OneToMany(Maintenance::class);
    }
}
