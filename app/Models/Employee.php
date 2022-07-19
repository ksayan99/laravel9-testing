<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'uid'; // overwrite default primary key attr

    protected $fillable = [
        'email',
        'name',
        'mobile',
        'password',
    ];
    protected $hidden = ['password']; // will remain hidden in response

    public function getMobileAttribute($value)
    {
        return '+91'.$value;
    }

    public function setMobileAttribute($value)
    {
        $this->attributes['mobile'] = preg_replace('/^\+?91|\|1|\D/','',($value));
    }
}
