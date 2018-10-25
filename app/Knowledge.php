<?php

namespace MSDS;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    //

    // public function scopeCommonSymptoms($query, $disease, $symptom)
    // {
    //     return $query->where('disease','=',"$disease")->where('commonSymptoms','=',"%$symptom%");
    //     return $query;

    // }
    // public function scopeRareSymptoms($query,$disease,$symptom)
    // {
    //     $query->where('disease','=',"$disease")->where('rareSymptoms',"%$symptom%");
    //     return $query;

    // }
    public function scopeIsLike($query,$keyword)
    {
        return $query->where('disease',"like","%$keyword%");/*->orderBy('disease','asc') *//*i need to sort alphabetically*/
    }
}
