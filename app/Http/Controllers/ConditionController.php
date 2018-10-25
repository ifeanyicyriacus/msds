<?php

namespace MSDS\Http\Controllers;

use MSDS\Condition;
use MSDS\Knowledge;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // used for sidebar list
        $conditions = Knowledge::pluck('disease');/*try to make the sidebar list sorted alphabetically*/
        //
        $keyword = $request->condition;
        $condition = Knowledge::where('disease',"$keyword")->first();
        if($condition == null){
            // isLike()  is defined in Knowledgebase model
            $suggestions = Knowledge::isLike("$keyword")->pluck('disease');
            return view('library',compact('suggestions','keyword','conditions'));
        }
        // dd($condition);
        // may be later i will populate it with a random disease
        return view('library',compact('condition','conditions'));
    }

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
     * @param  \MSDS\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function show(Knowledge $condition)
    {
        // $condition = Knowledge::find($condition);
        // to use the condition name to search, i will first create a slug table
        // return $condition;
        $conditions = Knowledge::pluck('disease');
        // dd($conditions);
        return view('library',compact('condition','conditions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MSDS\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function edit(Condition $condition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MSDS\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condition $condition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MSDS\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condition $condition)
    {
        //
    }
}
