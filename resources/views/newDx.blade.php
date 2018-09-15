@extends('layouts.app')

@section('page_head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Diagnosis Interview</div>

                    <div class="panel-body">
                        <div class="col-md-7">
                            <form class="form-horizontal" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="symptomName">Enter Your Symptom</label>
                                    <input type="text" onkeypress="symptomListVisible()" class="form-control" name="symptoms" id="symptomSearchBox" aria-describedby="helpId" placeholder="" required>
                                    <small id="helpId" class="form-text text-muted">Select symptoms from drop-down list</small>
                                </div>

                                <div id="symptomList" {{--style="display:none"--}} class="alert alert-success alert-dismissible form-group show" role="alert">
                                    <strong>:)</strong> No Symptom selected yet
                                    <button type="button" onclick="emptySymptomListArray()" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true" title="clear" >&times;</span>
                                    </button>
                                    <br>
                                    {{--<input class=SymptomListArray" type="hidden" name="symptoms[]" value="sssssssssssssssss">--}}

                                    <span class="SymptomListArray badge badge-light" draggable="true"><strong style="display:inline-block">cold</strong></span>
                                    <span class="SymptomListArray badge badge-light" draggable="true"><strong style="display:inline-block">cough</strong></span>
                                    <span class="SymptomListArray badge badge-light"  draggable="true" ondrag="emptySymptomListArray()"><strong style="display:inline-block">fever</strong></span>

                                </div>
                                {{--<div id="noSymptomList" class="alert alert-success alert-dismissible form-group show" role="alert">--}}
                                    {{--<strong>:)</strong> No Symptom selected yet--}}

                                {{--</div>--}}

                                <div class="form-group">
                                    <button id="diagnosisBtn" type="submit" class="btn btn-success">Diagnosis</button>
                                </div>
                            </form>
                        </div>
                        <script>
                            function symptomListVisible(){
                                $("#noSymptomList").hide();
                                $("#symptomList").show();
//                              this line should make  $symptomList  visible
                            }
                            function emptySymptomListArray(){
                                $(".SymptomListArray").hide();

                            }
                            function remove(){

                            }


                        </script>

                        <div class="col-md-5" id="resultSection">
                            <h4 class="card-header">Result</h4>
                            <h5 class="card-title">Arranged in accending order of Possibility</h5>
                            <div class="alert alert-info" >
                                <strong data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="display:block">
                                    Malaria
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82%</div>
                                    </div>
                                </strong>

                                <div class="collapse multi-collapse" id="collapseExample">
                                    <div class="card card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        <br><strong><a href="http://" class="fa-pull-right">learn More</a></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-info" >
                                <strong data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample2" style="display:block">
                                    Malaria
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </strong>

                                <div class="collapse multi-collapse" id="collapseExample2">
                                    <div class="card card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        <br><strong><a href="http://" class="fa-pull-right">learn More</a></strong>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a href="#" class="btn btn-info">Print Result</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @guest
    <input type="hidden" name="patient" value="">
    @else
        <input type="hidden" name="patient" value="{{ Auth::user()->email }}">
        @endguest

@endsection

@section('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            var availableSymptoms = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
            $( "#symptomSearchBox" ).autocomplete({
                source: availableSymptoms
            });
        } );
    </script>

    <script>
        $(document).ready(function () {
            $('#diagnosisBtn').click(function (event) {
                var message = $('#symptomSearchBox').val();
                if (message == "") {
                    alert('Please enter proper response');
                }else{
                    $.post('Dx',{
                        'message':message,
                        'patient':$('input[name=patient]').val(),
                        '_token':$('input[name=_token]').val()
                    },function(data){
                        $('#resultSection').load(location.href + ' #chats');
                        console.log(data);

                    });
                }
            });
        });
    </script>
@endsection