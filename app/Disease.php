<?php

namespace MSDS;

//use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
//    use Notifiable;
//
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
//    protected $fillable = [
//        'fname','lname','sex','d_o_b', 'email', 'password',
//    ];
//
//    /**
//     * The attributes that should be hidden for arrays.
//     *
//     * @var array
//     */
//    protected $hidden = [
////        'password', 'remember_token',
//    ];


    public function scopeCommonSymptoms($query, $disease, $symptom)
    {
        return $query->where('disease','=',"$disease")->where('commonSymptoms','=',"%$symptom%");
        return $query;

    }
    public function scopeRareSymptoms($query,$disease,$symptom)
    {
        $query->where('disease','=',"$disease")->where('rareSymptoms',"%$symptom%");
        return $query;

    }
}
