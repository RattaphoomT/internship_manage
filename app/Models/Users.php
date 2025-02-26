<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id','User_name', 'First_name', 'Last_name', 'Birthday', 'Email', 'Ethnicity', 
        'Nationality', 'Religion', 'Address', 'Grade', 'Year', 'Treatment','phone', 'password', 
        'user_role_iduser_role'
    ];

    public function userRole()
    {
        return $this->belongsTo(UserRole::class, 'user_role_iduser_role');
    }

    public function internships()
    {
        return $this->hasMany(Internship::class, 'user_user_id');
    }

    public function internshipHistories()
    {
        return $this->hasMany(InternshipHistory::class, 'user_user_id');
    }
}

