<?php

namespace MSDS\Http\Controllers;

use MSDS\User;
use MSDS\Profile;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        //
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
     * @param  \MSDS\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Profile $profile, User $user)
    {
        $userInfo= $request->user();
        $email= $userInfo->email;
        $profileInfo = Profile::where('user_email',$email)->first();
        return view('profile',compact('profileInfo','userInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MSDS\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }


    /**
     * Update the User resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MSDS\User  $user
     * @return \Illuminate\Http\Response
     */
    public function basicUpdate(Request $request, User $user)
    {   
    //     $userinfo = App\User::where('email',"$request->user()->email")->first();
    //     $userId = $userinfo->id;

    //     // $user = User::find($userId);
        // dd($request);



        $user->fname =$request->fname;
        $user->lname =$request->lname;
        $user->sex =$request->sex;
        $user->d_o_b =$request->d_o_b;

        $user->email =$request->email;
        // also change password in profile database and other table where 
        // email is referenced like(logs,knowledge. etc.)


        $user->password = $request->password;
        // if (password is not exact with the one in database refuse to update) {
        //     # code...
        // }
        
        //i will need to use the authenticate class of the AUTH to validate
        // bycrypt password

        // it will first compared it to already existing information
        // if no new changes then (no feedback message/ message saying 'changes have been ignored because of no changes were made.' no saving)

        if ($user->save())
        {
            $basicUpdateMessage = 'Awesome! Your user Information have been Updated successfully.';
            return view('profile',compact('basicUpdateMessage'));
        }
        else{
            $basicUpdateMessage = 'Oops! The changes you made failed to update. \n Try again.';
            return view('profile',compact('basicUpdateMessage'));
        }
        // dd($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MSDS\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function medicalUpdate(Request $request, Profile $profile)
    {
        // dd($request);

        $userProfile = Profile::where('user_email',"$request->user()->email")->first();
        dd($userProfile);
        $userProfileId = $userProfile->id;

        $profile = Profile::find($userProfile->id);

        $profile->bloodGroup = $request->bloodGroup;
        $profile->genotype = $request->genotype;
        $profile->height = $request->height;
        $profile->weight = $request->weight;
        $profile->allergies = $request->allergies;
        $profile->medications = $request->medications;
        $profile->organDonated = $request->organDonated;
        $profile->medicalNote = $request->medicalNote;
        $profile->smoke = $request->smoke;
        $profile->overweight = $request->overweight;
        $profile->hbp = $request->hbp;
        $profile->diabetes = $request->diabetes;
        $profile->ckd = $request->ckd;
        $profile->cold = $request->cold;
        $profile->chd = $request->chd;
        $profile->stroke = $request->stroke;
        $profile->cancer = $request->cancer;


        if ($profile->save())
        {
            $medicalUpdateMessage = 'Awesome! Your medical Information have been Updated successfully.';
            return view('profile',compact('medicalUpdateMessage'));
        }
        else{
            $medicalUpdateMessage = 'Oops! The changes you made failed to update. \n Try again.';
            return view('profile',compact('medicalUpdateMessage'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MSDS\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
