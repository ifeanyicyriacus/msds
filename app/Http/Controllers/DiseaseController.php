<?php

namespace MSDS\Http\Controllers;

use MSDS\Disease;
use MSDS\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DiseaseController extends Controller
{
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



        $diseaseName = 'Malaria';
//        dd($diseaseName);
//        return view('domainExpertCreate');
        return view('domainExpertCreate',compact('diseaseName'));
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
     * @param  \MSDS\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MSDS\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        return view('domainExpertEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MSDS\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        //
    }

   /**
     * Search the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $symptom = $request->symptom;
        $symptoms = Symptom::where('name','LIKE','%'.$symptom.'%')->get();

        if (count($symptom) == 0){
            $searchResult= 'No symptom found';
        }
        else{
            foreach ($symptoms as $){}
        }
        return $searchResult;
        //         return $availableSymptoms = [
//             "ActionScript",
//             "AppleScript",
//             "Asp",
//             "BASIC",
//             "C",
//             "C++",
//             "Clojure",
//             "COBOL",
//             "ColdFusion",
//             "Erlang",
//             "Fortran",
//             "Groovy",
//             "Haskell",
//             "Java",
//             "JavaScript",
//             "Lisp",
//             "Perl",
//             "PHP",
//             "Python",
//             "Ruby",
//             "Scala",
//             "Scheme"
//           ];
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \MSDS\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        //
    }




    public function diagnosis(Request $request)
    {
        $symptoms = $request->symptoms;
        $symptoms = str_replace(", ",",","$symptoms");
        $symptoms = str_replace(" ,",",","$symptoms");
        $symptoms = explode(",", "$symptoms");
        //dd($symptoms);
        $diseases = DB::select('select disease,commonSymptoms,uncommonSymptoms FROM diseases');


        for($i=0;$i < count($diseases);$i++)
        {
            $diseaseScores[$i]=0;

            $commonSymptoms[$i] = $diseases[$i]->commonSymptoms;
            $uncommonSymptoms[$i] = $diseases[$i]->uncommonSymptoms;
            $diseases[$i] = $diseases[$i]->disease;
            // i used it to initialize the array $diseaseScores
        }

        //don't yet delete
//        foreach ($symptoms as  $symptom)
//        {
////            for ($i=0;$i < (count($symptoms) -1 ); $i++)
////            {
////                $i = 0;
//////                $commonSymptoms[$i] = Disease::CommonSymptoms($disease,$symptom)->get()->all();
//////                $rareSymptoms[$i] = Disease::RareSymptoms($disease,$symptom)->get()->all();
////                $commonSymptoms[$i] = DB::table('diseases')->where('disease', "$diseases[$i]")->where('commonSymptoms','like',"%$symptom%")->count();
//////
////                $uncommonSymptoms[$i] = DB::table('diseases')->where('disease', "$diseases[$i]")->where('uncommonSymptoms','like',"%$symptom%")->count();
////
////                if ($commonSymptoms[$i] != 0)
////                {
////                    $diseaseScores[$i] += 1.0;
////                }
////                if ($uncommonSymptoms[$i] != 0)
////                {
////                    $diseaseScores[$i]  += 0.5;
////                }
////                $commonSymptoms[$i] = 0;
////                $uncommonSymptoms[$i] = 0;
////
//////                if ($i = 3)
//////                    dd($diseaseScores,$commonSymptoms,$uncommonSymptoms);
////
////            }
////
//////            foreach ($diseases as $disease)
//////            {
//////                $i = 0;
//////                if ($commonSymptoms[$i] != null)
//////                {
//////                    $diseaseScores[$i] += 1.0;
//////                }
//////                if ($uncommonSymptoms[$i] != null)
//////                {
//////                    $diseaseScores[$i]  += 0.5;
//////                }
//////                $i++;
//////            }
//
//
//
//
//
//
//        }



//for each diseases
        $diseaseScores = $this->grading($symptoms,$commonSymptoms,$uncommonSymptoms,$diseaseScores);





//        dd($symptoms,$diseases,$commonSymptoms,$uncommonSymptoms,$diseaseScores);

        dd($symptoms,$diseases,$diseaseScores,$commonSymptoms,$uncommonSymptoms);
        //return view('domainExpertCreate');
    }

    private function grading($symptoms,$commonSymptoms,$uncommonSymptoms,$diseaseScores){

        for ($i=0,$j=0; $i < count($diseaseScores);$i++) {

//            dd($commonSymptoms[$j]);
//            if ($this->test("$commonSymptoms[$j]","$symptoms[$i]")) {
//                $diseaseScores[$i] += 0.5;
//            }
//            if ($this->test("$uncommonSymptoms[$j]","$symptoms[$i]")) {
//                $diseaseScores[$i] += 0.5;
//            }
            if ($this->test("cough,chills,fever","chills")) {
                $diseaseScores[$i] += 0.5;
            }


            if ($i == count($diseaseScores)){
                $j++;$i=0;
            }
            if ($j == count($diseaseScores)){
                break;
            }
        }
        return $diseaseScores;
    }


    private function test($diseaseSymptomList,$symptom){
//        dd($diseaseSymptoms);
////        dd($symptom);
//        if ($diseaseSymptomList->containsStringIgnoringCase($symptom))
//        {
//            return true;
//        }
//        else return false;
//
        if (strpos("$diseaseSymptomList","$symptom") !== false)
        {
            return true;
        }
        else return false;
    }



}
