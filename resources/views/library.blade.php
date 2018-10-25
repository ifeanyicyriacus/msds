@extends('layouts.regularMaster')

@section('page_head')
  <title>{{ config('app.name', 'Laravel') }} | Condition Library</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
@endsection

@section('content')

<div class="form-group">
    <div class="col-md-3">
    <form action="{{url('library')}}" method="get">
        <input type="text" class="form-control ConditionSearchBox" name="condition" id="ConditionSearchBox" aria-describedby="helpId" placeholder="Enter Condition here">
        <small id="helpId" class="form-text text-muted">Auto-complete Supported</small>
    </form>
        <div class="{{--hidde this list in small display devices --}}">
            <ul class="nav list-group" style="max-height: calc(100vh - 9rem);overflow-y: auto;">
            @forelse ($conditions as $disease)
                <li class="nav-item">
                    <a class="nav-link" href="{{url('library')}}/{{$disease}}">{{$disease}}</a>
                </li>
            @empty
            @endforelse
            </ul>
        </div>
        
    </div>
    <div class="col-md-9">
        @if (isset($condition))    
            <h1 style="margin-top: auto;">{{$condition->disease}}  <small>Updated {{$condition->updated_at->diffForHumans()}}</small></h1>
            <div class="">
                <img {{-- src="{{url("{{$condition->imageLocation}}")}}"  --}} alt="{{$condition->disease}} illustration">
                <h2>Symptoms</h2>
                Common symptoms include {{$condition->commonSymptoms}}<br>
                Uncommon symptoms include {{$condition->uncommonSymptoms}}<br>

                Applicable to the {{$condition->diseaseSex}} sex.<br>
                Critical level: ({{$condition->criticalLevel}}/5).<br>

                {{$condition->description}} <br>
                Diseases with similar symptom include: {{$condition->relatedDiseases}}.<br>
            </div>
            <div class="">
                <h2>Prevention</h2>
                {{-- {{$condition->prevention}} --}}
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt tempora perferendis ratione quos maiores quibusdam quam enim reiciendis sit minima! Sequi cupiditate rem explicabo veniam labore temporibus, repellendus dolorem amet.
            </div>
            <div class="">
                <h2>Treatments</h2>
                {{-- {{$condition->treatment}} --}}
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur fugit dolorem rerum in animi, nam quaerat nihil harum assumenda ratione ullam. Voluptatibus repudiandae nihil a, quibusdam consectetur reiciendis voluptas! Eos.
                <br><br>
                recommended Physician: {{$condition->doctorType}}
            </div>

            <div class="">
                {{-- {{$condition->external_link}} --}}
                <h2>References</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet reprehenderit magnam sit iusto commodi sint aliquam reiciendis aperiam nemo, iure unde fugit odit inventore ullam dolor a maxime magni perferendis!
            </div>
            @else
            @if (@isset($keyword))
            <div class="alert alert-info">
                <p><h4>oops :( no match found</h4></p>
                <p>Your Search - <em style="font-weight: bold; font-style: normal;">{{$keyword}}</em>  - did not match any condition.</p>
    
                <p>Suggestions:</p>
    
                <ul>
                    <li>Make sure the words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more general keywords.</li>
                    <li>Try fewer keywords.</li>
                </ul>
                @if (isset($suggestions))
                    do you mean:
                    <ul>
                        @foreach ($suggestions as $suggestion)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('library')}}/{{$suggestion}}">{{$suggestion}}</a>
                        </li>
                        @endforeach
                    </ul>
                    
                @endif
                
    
            </div>
            @else
            <div class="alert alert-info">
                <p><h1>Welcome to MS&DS | Condition Library :)</h1></p>
                <ul>
                    <li>Browse through the library to find information about any medical condition.</li>
                    <li>Please know that this is a growing library, as such additions or update may occur frequently. </li>
                    <li>To request a missing condition <a href="{{url('contact')}}/#getInTouch">Contact Us</a>.</li>
                    <li>you may learn more from the references or external links, but know the MS&DS has no effect on the credibility of the information therein. <a href="{{url('toc')}}">Terms & Condition</a></li>
                </ul>
            </div>
            @endif
            @endif
        </div>
    </div>
@endsection
@section('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            var availableConditions = [
                "Addison\'s disease","AIDS", "alopecia", "Alzheimer\'s disease", "anaemia", "angina", "anorexia nervosa",
                "anthrax", "arthritis", "asbestosis", "asthma", "athlete\'s foot", "avian flu", "autism", "Bell\'s Palsy",
                "beriberi","bird flu", "Black Death", "botulism", "Bright\'s disease", "bronchitis", "brucellosis", "bubonic plague",
                "bulimia", "cancer", "cerebral palsy", "chickenpox", "cholera", "cirrhosis", "coeliac disease",
                "common cold", "consumption", "Creutzfeldt-Jakob disease (CJD)", "Crohn\'s disease, croup",
                "cystic fibrosis", "deep-vein thrombosis (DVT)", "diabetes", "diphtheria", "dropsy", "dysentery",
                "eclampsia", "emphysema", "encephalitis", "endometriosis", "enteritis", "farmer\'s lung",
                "foot-and-mouth disease", "gangrene", "German measles","gingivitis","glandular fever", "glaucoma",
                "gonorrhoea", "haemophilia", "Hepatitis A","Hepatitis B","Hepatitis C","herpes","Hodgkin\'s disease","Huntington\'s chorea",
                "hydrophobia", "impetigo", "influenza", "Lassa fever", "Legionnaires\’ disease", "leprosy",
                "leukaemia", "lockjaw", "Lyme disease", "malaria", "mastoiditis", "measles", "meningitis",
                "Ménière\'s disease", "motor neuron disease", "multiple sclerosis (MS)", "mumps",
                "muscular dystrophy", "myalgic encephalomyelitis (ME)", "nephritis", "osteomyelitis", 
                "osteoporosis", "Paget\'s disease", "Parkinson\'s disease", "peritonitis", "pneumonia",
                "poliomyelitis", "psittacosis", "psoriasis", "pyorrhoea", "rabies", "rheumatic fever", "rheumatoid arthritis",
                "rickets", "ringworm", "rubella", "scabies", "scarlet fever", "schistosomiasis", "schizophrenia", "scurvy",
                "septicaemia", "severe acute respiratory syndrome (SARS)", "shingles", "silicosis", "smallpox",
                "swine flu", "syphilis", "tapeworm", "tetanus", "thrombosis", "thrush", "tinnitus", "tuberculosis (TB)",
                "typhoid", "typhus", "vertigo", "West Nile virus", "whooping cough", "yellow fever"

            ];
            $( ".ConditionSearchBox" ).autocomplete({
                source: availableConditions
            });
        } );
    </script>

@endsection