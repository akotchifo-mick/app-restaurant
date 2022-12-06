<?php

namespace App\Models;
use App\Models\Ticket;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastName',
        'firstName',
        'cardId',
        'email',
        'role',
        'password',
        //'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * remove timestamps
     * 
     */
    public $timestamps = false;


    /**
     * Return a user tickets
     * 
     * @ return Collection
     */

    public function tickets() : HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Return a user tickets for the present day
     * 
     * @var User
     * 
     * @ return Collection
     */

    public function ticketsToday( $user ) : Collection
    {
        $tickets = Ticket::where([
            ['user_id', '=', $user->id], ['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")]
        ])->orWhere([
            ['user_id', '=', $user->id], ['meal', '=', 'Lunch'], ['date', '=', date("Y/m/d")]
        ])->orWhere([
            ['user_id', '=', $user->id], ['meal', '=', 'Dinner'], ['date', '=', date("Y/m/d")]
        ])
            ->orderByDesc('date')->limit(3)->get();

        return $tickets;
    }

     /**
     * Return a user actual last ticket
     * 
     *  @var User
     * 
     * @ return Ticket
     */

    public function ticketLast( $user ) : Ticket
    {
        $ticket = Ticket::where(['user_id', '=', $user->id])->latest();
        return $ticket;
    }

     /**
     * Return a user first ever ticket
     * 
     * @var User
     * 
     * @ return Ticket
     */

    public function ticketFirst( $user ) : Ticket
    {        
        $ticket = Ticket::where('user_id', $user->id)->first();

        return $ticket;
    }


}
