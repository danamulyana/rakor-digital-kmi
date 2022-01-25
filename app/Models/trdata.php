<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class trdata extends Model
{
    use HasFactory;

    protected $table = 'trdata';
    protected $primaryKey = 'txtId';
    protected $keyType = 'string';

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if(empty($model->txtId)){
                $model->txtId = Str::uuid();
            }
        });
    }

    public function karyawan():BelongsTo
    {
        return $this->belongsTo(User::class,'txtIdUser','txtId');
    }

}
