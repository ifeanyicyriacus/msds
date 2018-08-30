<?php

namespace MSDS;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //

    public function scopeChatList($query, $userid)
    {
        $query->where('sender','=',"$userid")->where('receiver','=','MS&DS');
        return $query->orwhere('sender','=','MS&DS')->Where('receiver','=',"$userid");

//later i will work to show current chat greater than logs time
    }
}
