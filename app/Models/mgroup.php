<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class mgroup extends Model
{
    use HasFactory;

    protected $table = 'mgroup';
    protected $primaryKey = 'txtId';

    public function User() : HasMany
    {
        return $this->hasMany(User::class,'txtGroupId');
    }
}
