<?php

namespace MSDS\Http\Controllers;

use MSDS\SymptomAssessment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SymptomAssessmentController extends Controller
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
        return view('newDx');
    }


    public function diagnosis(Request $request)
    {
//        dd($request);

        $rawSymptoms = $request->symptoms;
        $symptoms = $this->commaSeparatedStringToArray($rawSymptoms);

        /*fetch disease from database disease table*/
        $rawDiseases = DB::select('select disease,common_symptoms,uncommon_symptoms FROM diseasetest');

        $diseases[][]=0;
        for ($i=0; $i< count($rawDiseases);$i++) {
            $diseases[$i]['name']=$rawDiseases[$i]->disease;
            $diseases[$i]['commonSymptoms']=$rawDiseases[$i]->common_symptoms;
            $diseases[$i]['uncommonSymptoms']=$rawDiseases[$i]->uncommon_symptoms;
        }
        dd($diseases);

        $diseaseScores[]=0;

        $diseaseScores = $this->grading($symptoms,$diseases,$diseaseScores);

    }
    /**
     *
     *it explodes a string with comma(,) as needle in a string haystack, and creates an array
     **/
    private function commaSeparatedStringToArray($commaList)
    {
        /*this convert comma separated list to array*/
        $commaList = str_replace(", ",",","$commaList");
        $commaList = str_replace(" ,",",","$commaList");
        $arrayList = explode(",", "$commaList");
        /*ent of conversion */
        return $arrayList;
    }

    /**
     *
     *
     **/
    private function grading($symptoms,$diseases,$diseaseScores){

        for ($i=0; $i < count($symptoms);$i++) {
//            cough

            for ($j=0; $j < count($diseases);$j++) {
//                if (contain $symptoms[$i]) {
//                }


            }


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

        if (strpos("$diseaseSymptomList","$symptom") !== false)
        {
            return true;
        }
        else return false;
    }
//        $diseases=['Malaria','Hepatitis B','Gastroenteritis','Pneumonia','Typhoid'];
//        $symptoms=['cough','fever','weakness','vomiting','sweating'];
//
//        $diseaseScores = [];
//
//        $commonSymptoms = [];
//        $rareSymptoms = [];
//
//        foreach ($symptoms as  $symptom)
//        {
//
//            foreach ($diseases as $disease)
//            {
//                $i=0;
//
//                $i++;
//            }
//
//            foreach ($diseaseScores as $diseaseScore)
//            {
//               $i = 0;
//
//
//                $i++;
//            }
//
//        }
//
////        $symptoms = [1, 1, 1, 1, 1];
////        $symptoms [3]= [1, 1, 1, 1, 1];
////        $symptoms [0]++;
//        dd($symptoms,$diseases);
    
}
