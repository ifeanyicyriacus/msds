@extends('layouts.regularMaster')
@section('page_title')
    <title>{{ config('app.name', 'Laravel') }} | Add Disease</title>
@endsection
@section('page_style')
    <style>

    </style>

@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <span class="pull-right breadcrumb "><a href="{{url('/xpertEdit')}}" class="text-success"><span class="fa fa-fa-exit"></span>Edit Disease</a></span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Domain Expert</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Disease</li>
        </ol>

    </nav>

@if(!empty($diseaseName))

    <div class="alert alert-info alert-dismissible alert-sm show" role="alert">
        <strong>Awesome!</strong> You have successfully added <strong><u>{{$diseaseName}}</u></strong> to Knowledge base.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <form action="{{url('/xpertCreate')}}" method="post">
        {{csrf_field()}}
        <div class="form-group row">
            <label for="disease" class="col-sm-2 col-form-label">Disease Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="disease" id="disease" placeholder="Disease" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="commonSymptomsList" class="col-sm-2 col-form-label">Common Symptoms</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="commonSymptoms" id="symptomsList" placeholder="cough,sweating,..." required>
                <small id="symptomsListHelp" class="form-text text-muted">Separate symptoms with comma (,); also avoid repeating uncommon Symptoms</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="uncommonSymptomsList" class="col-sm-2 col-form-label">Uncommon Symptoms</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="uncommonSymptoms" id="symptomsList" placeholder="cough,sweating,..." required>
                <small id="uncommonSymptomsListHelp" class="form-text text-muted">Separate symptoms with comma (,); also avoid repeating common Symptoms</small>
            </div>
        </div>

        <div class="form-group row">
            <label for="symptomsList" class="col-sm-2 col-form-label">Sex Applicable</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="diseaseSex" id="diseaseSexMale" value="male" >
                    <label class="form-check-label form-text text-muted" for="diseaseSexMale">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="diseaseSex" id="diseaseSexFemale" value="female">
                    <label class="form-check-label form-text text-muted" for="diseaseSexFemale">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="diseaseSex" id="diseaseSexBoth" value="both" required checked>
                    <label class="form-check-label form-text text-muted" for="diseaseSexBoth">Both</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="relatedDiseases" class="col-sm-2 col-form-label">Related Diseases</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="relatedDiseases" id="relatedDiseases" placeholder="Malaria,Pneumonia,..." required>
                <small id="relatedDiseasesHelp" class="form-text text-muted">Separate related diseases with comma (,)</small>
            </div>
        </div>

        <div class="form-group row">
            <label for="doctorType" class="col-sm-2 col-form-label">Doctor Type</label>
            <div class="col-sm-10">
                <select type="text" class="custom-select" name="doctorType[]" id="doctorType" multiple required>
                    <option selected value="General practitioner">General practitioner</option>
                    <option value="Family physician">Family physician</option>
                    <option value="Surgeon">Surgeon</option>
                    <option value="Medical specialities">Medical specialities</option>
                    <option value="Dentist">Dentist</option>
                    <option value="Chiropractor">Chiropractor</option>
                </select>
                <small id="relatedDiseasesHelp" class="form-text text-muted">Multi Select is supported by holding <kbd><kbd>Ctrl</kbd> + <kbd> Mouse-click</kbd></kbd></small>
            </div>
        </div>

        <div class="form-group row">
            <label for="criticalLevel" class="col-sm-2 col-form-label">Critical Level</label>
            <div class="form-group col-sm-8 " >
                <input type="range" name="criticalLevel" class="form-control-range" min="1" max="5" step="1.0" id="criticalLevel" required>
                <small id="criticalLevelHelp" class="form-text text-muted">On a scale of 1-5 select disease critical level</small>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="diseaseDescription">Brief Description</label>
            <div class="form-group col-sm-10">
                <textarea class="form-control" id="diseaseDescription" name="description" rows="3" required></textarea>
                <small id="diseaseDescriptionHelp" class="form-text text-muted">Description is usually definition - avoid repeating details already stated in this form</small>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2 col-form-label"></div>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="yes" id="iConsent" required>
                    <label class="form-check-label" for="iConsent">
                        I agree that the information presented is accurate to my best knowledge, and in accordance with MS&DS <a href="#" target="_blank">terms&condition</a>
                    </label>
                </div>

            </div>

        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Disease</button>
            </div>
        </div>
    </form>

@endsection