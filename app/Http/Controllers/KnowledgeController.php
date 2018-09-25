<?php

namespace MSDS\Http\Controllers;

use MSDS\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('domainExpertCreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disease = new Disease();
        $diseaseName = $request->disease;
        $disease->disease =$diseaseName ;
        $disease->commonSymptoms =$request->commonSymptoms;
        $disease->uncommonSymptoms =$request->uncommonSymptoms;
        $disease->relatedDiseases =$request->relatedDiseases;
        $disease->diseaseSex =$request->diseaseSex;


        $doctorTypes =$request->doctorType;
        $doctorTypeList="";
        foreach ($doctorTypes as $doctorType)
        {
            $doctorTypeList = $doctorTypeList.$doctorType.",";
        }
        $disease->doctorType =$doctorTypeList;

        $disease->criticalLevel =$request->criticalLevel;
        $disease->description =$request->description;


        $disease->added_by =$request->usreId;
        //test to validate that it has a value

        if ($disease->save())
        {
            return view('domainExpertCreate',compact('diseaseName'));

        }else{
            return view('domainExpertCreate');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \MSDS\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function show(Knowledge $knowledge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MSDS\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function edit(Knowledge $knowledge)
    {
        return view('domainExpertEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MSDS\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Knowledge $knowledge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MSDS\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Knowledge $knowledge)
    {
    }
}
