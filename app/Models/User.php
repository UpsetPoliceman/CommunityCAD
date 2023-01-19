<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $incrementing = false;

    protected $guarded = [];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'last_login' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'member_join_date' => 'datetime',
        'birthday' => 'date',
        'reapply_date' => 'date',
    ];

    public function applications()
    {
        return $this->hasMany('App\Models\Application');
    }

    public static function dec2hex($number)
    {
        $hexvalues = array(
            '0', '1', '2', '3', '4', '5', '6', '7',
            '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'
        );
        $hexval = '';
        while ($number != '0') {
            $hexval = $hexvalues[bcmod($number, '16', 0)] . $hexval;
            $number = bcdiv($number, '16', 0);
        }
        return $hexval;
    }

    public function getAgeAttribute()
    {
        $birthday = $this->birthday;
        $age = Carbon::parse($birthday)->age;

        return $age;
    }

    public function getAccountStatusNameAttribute()
    {
        $status_name = DB::table('account_statuses')->where('id', '=', $this->account_status)->first();
        return $status_name->name;
    }

    public function generateHistory($message)
    {
        $current_history = $this->history;

        if (empty($current_history)) {
            $history = array();
        } else {
            $history = json_decode($current_history);
        }

        $history[] = [
            'time' => time(),
            'user' => auth()->user()->id,
            'comments' => $message,
        ];

        return $new_history = json_encode($history);
    }
}
