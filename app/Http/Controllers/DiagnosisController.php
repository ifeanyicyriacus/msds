<?php

namespace MSDS\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function diagnosis()
    {
        $diseases=['Malaria','Hepatitis B','Gastroenteritis','Pneumonia','Typhoid'];
        $symptoms=['cough','fever','weakness','vomiting','sweating'];

        $diseaseScores = [];

        $commonSymptoms = [];
        $rareSymptoms = [];

        foreach ($symptoms as  $symptom)
        {

            foreach ($diseases as $disease)
            {
                $i=0;






                $i++;
            }

            foreach ($diseaseScores as $diseaseScore)
            {
               $i = 0;




                $i++;
            }




        }


//        $symptoms = [1, 1, 1, 1, 1];
//        $symptoms [3]= [1, 1, 1, 1, 1];
//        $symptoms [0]++;
        dd($symptoms,$diseases);

    }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
