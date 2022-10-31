<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


    protected $fillable = [
        'Message','user_id'
    ];

    public function Users()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
