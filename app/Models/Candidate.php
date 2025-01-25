<?php

namespace App\Models;

use App\Notifications\CompanyResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Authenticatable
{
    use Notifiable, HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'candidate';
    protected $fillable = [
        'name', 'email', 'google_id', 'avatar', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CompanyResetPasswordNotification($token));
    }

}
