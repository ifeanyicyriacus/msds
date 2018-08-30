<?php

namespace MSDS\Http\Controllers;

use MSDS\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        // return $request->all();
        $userid =$request->userid;//collect user id from a page
        $chats = Chat::ChatList($userid)->get();


        return view('diagnosisView',compact('chats'));

        ///end of validation section
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $chat = new Chat;
        $chat->sender =$request->sender;
        $chat->receiver =$request->receiver;
        $chat->message =$request->message;
        $chat->save();
//        $userid = $request->sender;
//        $this->index($userid);
        return 'done';
    }

    //    public function index(request $request)
//    {
//
//        // return $request->all();
//        $userid =$request->userid;//collect user id from a page
////        $chats = Chat::ChatList($userid)->get()->all();
//        $chats = $this->chats($userid);
//        return view('diagnosisView',compact('chats'));
//
//        ///end of validation section
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create(request $request)
//    {
//        $chat = new Chat;
//        $chat->sender =$request->sender;
//        $chat->receiver =$request->receiver;
//        $chat->message =$request->message;
//        $chat->save();
////        return $request;
//        if ($request->sender != 'anonymous@anonymous.com')
//            $chats = $this->chats($request->sender);
//        else
//            $chats = $this->chats($request->receiver);
//        return $chats;
//
//    }
//
//    public function chats($userid)
//    {
//        $chats = Chat::ChatList($userid)->get()->all();
//        return $chats;
//        ///end of validation section
//    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \MSDS\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MSDS\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MSDS\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MSDS\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
