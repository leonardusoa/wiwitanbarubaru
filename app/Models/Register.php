<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Register extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $casts = [
    //     'tanggal_lahir' => 'date:d-m-Y',
    // ];

    public function getTanggalLahirAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            try {
                $model->uuid = Str::uuid();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
