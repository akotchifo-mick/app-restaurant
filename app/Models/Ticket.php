<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'meal',
        'orders',
        'date', 
        'user_id'       
    ];

    /**remove timestamps*/
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
