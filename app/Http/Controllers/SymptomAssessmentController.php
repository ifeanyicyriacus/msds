<?php

namespace MSDS\Http\Controllers;

//use MSDS\Knowledge;
//use MSDS\SymptomAssessment;
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
        $rawSymptoms = $request->symptoms;
        $symptoms = $this->commaSeparatedStringToArray($rawSymptoms);

        /*fetch disease from database disease table*/
        $rawDiseases = DB::select('select disease,commonsymptoms,uncommonsymptoms FROM knowledge');
//        dd($rawDiseases);
//        $diseases[][];
        $diseases=array();
        $diseaseScores=array();
        for ($i=0; $i< count($rawDiseases);$i++) {
            $diseases[$i]['name']=$rawDiseases[$i]->disease;
            $diseases[$i]['commonSymptoms']=$rawDiseases[$i]->commonsymptoms;
            $diseases[$i]['uncommonSymptoms']=$rawDiseases[$i]->uncommonsymptoms;
            $diseaseScores[$i] = 0;
        }


        $diseaseScores = $this->grading($symptoms,$diseases,$diseaseScores);

        dd($diseaseScores);

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
//        dd($arrayList);
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
                if ($this->test($diseases[$i]['commonSymptoms'],$symptoms[$i])) {
                    $diseaseScores[$i] += 0.5;
                }
                if ($this->test($diseases[$i]['uncommonSymptoms'],$symptoms[$i])) {
                    $diseaseScores[$i] += 0.5;
                }

//                if ($i == count($diseaseScores)){
//                    $j++;$i=0;
//                }
//
//                if ($j == count($diseaseScores)){
//                    break;
//                }
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
}
