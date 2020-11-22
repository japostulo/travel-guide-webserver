<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;


class Travel extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'from_id',
        'to_id',
        'km',
        'value',
    ];

    protected $table = 'travel';

    protected $hidden = [
        'from_id',
        'to_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }  

    public function from()
    {
        return $this->belongsTo('App\Models\City');
    }  

    public function to()
    {
        return $this->belongsTo('App\Models\City');
    }  

}
