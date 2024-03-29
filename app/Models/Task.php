<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Task extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'code';
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tester()
    {
        return $this->belongsTo(User::class, 'tester_id');
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }


    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function stack() {
        return $this->belongsTo(Stack::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
