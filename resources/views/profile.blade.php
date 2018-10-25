@extends('layouts.regularMaster')
@section('page_title')

@endsection
@section('page_style')
    <style>

    </style>

@endsection
@section('content')

    Update Profile
    <hr>
    <div class="row">
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-basicInformation-tab" data-toggle="pill" href="#v-pills-basicInformation" role="tab" aria-controls="v-pills-basicInformation" aria-selected="true">Basic Information</a>

                <a class="nav-link" id="v-pills-medicalInformation-tab" data-toggle="pill" href="#v-pills-medicalInformation" role="tab" aria-controls="v-pills-medicalInformation" aria-selected="false">Medical Information</a>

                <a class=" nav-link" id="v-pills-privatePolicy-tab" data-toggle="pill" href="#v-pills-privatePolicy" role="tab" aria-controls="v-pills-privatePolicy" aria-selected="false">Privacy policy</a>

                <a class=" nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>

            </div>
        </div>

        <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
                @isset($message)
                {{$message}}
                @endisset

                <div class="tab-pane show active" id="v-pills-basicInformation" role="tabpanel" aria-labelledby="v-pills-basicInformation-tab">
                    Basic Information
                    <hr>
                    {{-- Basic alert message --}}
                    @if(!empty($basicUpdateMessage))
                    <div class="alert alert-info alert-dismissible alert-sm show" role="alert">
                        {{$basicUpdateMessage}}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form action="{{url('/updateBasic')}}" method="post" autocomplete="off">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10 form-row">
                                <div class="col">
                                    <input  class="form-control" name="fname" value="{{$userInfo->fname}}" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input  class="form-control" name="lname" value="{{$userInfo->lname}}" placeholder="Last name">
                                </div>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <label class="col-form-label col-sm-2 pt-0">Sex</label>
                                <div class="col-sm-10">

                                    @if ("{{$userInfo->sex}}" == "{{male}}")
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="userSex1" checked value="male">
                                            <label class="form-check form-check-label" for="userSex1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="userSex2" value="female">
                                            <label class="form-check form-check-label" for="userSex2">
                                                Female
                                            </label>
                                        </div>
                                    @else
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="userSex1" value="male">
                                            <label class="form-check form-check-label" for="userSex1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="userSex2" checked value="female">
                                            <label class="form-check form-check-label" for="userSex2">
                                                Female
                                            </label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
                            <div class="col-sm-10 form-row">
                                <div class="col">
                                    <input id="DOB" type="date" class="form-control" name="d_o_b" value="{{$userInfo->d_o_b}}" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10 form-row">
                                <div class="col">
                                    <input type="email" name="email" class="form-control" id="userEmail" aria-describedby="emailHelp" value="{{$userInfo->email}}" paceholder="Enter email">
                                    <small id="userEmail" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userPasswordVerification" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10 form-row">
                                <div class="col">
                                    <input type="password" class="form-control" id="userPasswordVerification" aria-describedby="passwordHelp" name="password" placeholder="Verify password">
                                    <small id="passwordHelp" class="form-text text-muted">We are asking for password to verify that it is really you.</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                {{-- <button onclick="$(basicInformationFields).hide" class="btn btn-primary">Update Basic Information</button> --}}
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-medicalInformation" role="tabpanel" aria-labelledby="v-pills-medicalInformation-tab">
                    Medical Information
                    <hr>
                    {{-- Medical alert message --}}
                    @if(!empty($medicalUpdateMessage))
                        <div class="alert alert-info alert-dismissible alert-sm show" role="alert">
                            {{$medicalUpdateMessage}}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{url('/updateMedical')}}" method="post">
                        {{csrf_field()}}
                        <div class="col-md-12">
                            <section>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="userBloodGroup" class="col-sm-8 col-form-label ">Blood Group</label>
                                        <select id="userBloodGroup" name="bloodGroup" class="col-sm-4 form-control">
                                            <option value="O−">O−</option>
                                            <option value="A−">A−</option>
                                            <option value="A+">A+</option>
                                            <option value="B−">B−</option>
                                            <option value="B+">B+</option>
                                            <option value="AB−">AB−</option>
                                            <option value="AB+">AB+</option>
                                            <option selected value="{{$profileInfo->bloodGroup}}">{{$profileInfo->bloodGroup}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userGenotype" class="col-sm-8 col-form-label ">Genotype</label>
                                        <select id="userGenotype" name="genotype" class="col-sm-4 form-control">
                                            <option value="AA">AA</option>
                                            <option value="AS">AS</option>
                                            <option value="SS">SS</option>
                                            <option value="AB">AB</option>
                                            <option selected value="{{$profileInfo->genotype}}">{{$profileInfo->genotype}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userHeight" class="col-sm-8 col-form-label ">Height</label>
                                        <select id="userHeight" name="height" class="col-sm-4 form-control">
                                            @for ($i = 0; $i < $profileInfo->height; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                            <option selected value="{{$profileInfo->height}}">{{$profileInfo->height}}</option>
                                            @for ($i = $profileInfo->height + 1; $i < 200 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userWeight" class="col-sm-8 col-form-label ">Weight</label>
                                        <select id="userWeight" name="weight" class="col-sm-4 form-control">
                                            @for ($i = 0; $i < $profileInfo->weight; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                            <option selected value="{{$profileInfo->weight}}">{{$profileInfo->weight}}</option>
                                            @for ($i = $profileInfo->weight + 1; $i < 200 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="userAllergies" class="col-sm-2 col-form-label ">Allergies</label>
                                        <div class="col-sm-10">
                                            <input id="userAllergies" name="allergies" class="form-control form-control-sm" value="{{$profileInfo->allergies}}" placeholder="Separate using comma (e.g. Peanut, garlic, ...)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userMedications" class="col-sm-2 col-form-label ">Medications</label>
                                        <div class="col-sm-10">
                                            <input id="userMedications" class="form-control form-control-sm" name="medications" value="{{$profileInfo->medications}}" placeholder="Separate using comma (e.g. Asprin, Folic acid B12, ...)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userOrganDonated" class="col-sm-2 col-form-label ">Organ Donated</label>
                                        <div class="col-sm-10">
                                            <input id="userOrganDonated" class="form-control form-control-sm" name="organDonated" value="{{$profileInfo->organDonated}}" placeholder="Separate using comma (e.g. Left Kidney, Bonemarrow, ...)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userMedicalNote" class="col-sm-2 col-form-label ">Medical Notes</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control form-control-sm" name="medicalNote" id="userMedicalNote" rows="3" placeholder="(e.g. i react to chloroquine injection,..)">{{$profileInfo->medicalNote}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <ul>
                                    <li>
                                        <div class="form-group ">
                                            <label for="inputAddress">Do you smoke?</label>
                                            <div>
                                                @if ("{{$profileInfo->smoke}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="smoke" class="form-check-input" type="radio" id="yesUserSmoke" value="1" checked>
                                                        <label class="form-check-label" for="yesUserSmoke">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="smoke" class="form-check-input" type="radio" id="noUserSmoke" value="0">
                                                        <label class="form-check-label" for="noUserSmoke">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="smoke" class="form-check-input" type="radio" id="yesUserSmoke" value="1">
                                                        <label class="form-check-label" for="yesUserSmoke">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="smoke" class="form-check-input" type="radio" id="noUserSmoke" value="0" checked>
                                                        <label class="form-check-label" for="noUserSmoke">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    @if ("{{$userInfo->sex}}" == "{{female}}")
                                        <li>
                                            <div class="form-group">
                                                <label for="inputAddress">Are you Pregnant?</label>
                                                <div>
                                                    @if ("{{$profileInfo->pregnant}}" == "1")
                                                        <div class="form control form-check form-check-inline">
                                                            <input name="pregnant" class="form-check-input" type="radio" id="yesUserPregnant" value="1" checked>
                                                            <label class="form-check-label" for="yesUserPregnant">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input name="pregnant" class="form-check-input" type="radio" id="noUserPregnant" value="0">
                                                            <label class="form-check-label" for="noUserPregnant">No</label>
                                                        </div>
                                                    @else
                                                        <div class="form control form-check form-check-inline">
                                                            <input name="pregnant" class="form-check-input" type="radio" id="yesUserPregnant" value="1">
                                                            <label class="form-check-label" for="yesUserPregnant">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input name="pregnant" class="form-check-input" type="radio" id="noUserPregnant" value="0" checked>
                                                            <label class="form-check-label" for="noUserPregnant">No</label>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    @endif

                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Are you over weight or obese?</label>
                                            <div>
                                                @if ("{{$profileInfo->overweight}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="overweight" class="form-check-input" type="radio" id="yesUserOverweight" value="1" checked>
                                                        <label class="form-check-label" for="yesUserOverweight">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="overweight" class="form-check-input" type="radio" id="noUserOverweight" value="0">
                                                        <label class="form-check-label" for="noUserOverweight">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="overweight" class="form-check-input" type="radio" id="yesUserOverweight" value="1">
                                                        <label class="form-check-label" for="yesUserOverweight">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="overweight" class="form-check-input" type="radio" id="noUserOverweight" value="0" checked>
                                                        <label class="form-check-label" for="noUserOverweight">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Have you been diagnosis with high blood pressure?</label>
                                            <div>
                                                @if ("{{$profileInfo->hbp}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="hbp" class="form-check-input" type="radio" id="yesUserHBP" value="1" checked>
                                                        <label class="form-check-label" for="yesUserHBP">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="hbp" class="form-check-input" type="radio" id="noUserHBP" value="0">
                                                        <label class="form-check-label" for="noUserHBP">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="hbp" class="form-check-input" type="radio" id="yesUserHBP" value="1">
                                                        <label class="form-check-label" for="yesUserHBP">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="hbp" class="form-check-input" type="radio" id="noUserHBP" value="0" checked>
                                                        <label class="form-check-label" for="noUserHBP">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Have you been diagnosis with diabetes?</label>
                                            <div>
                                                @if ("{{$profileInfo->diabetes}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="diabetes" class="form-check-input" type="radio" id="yesUserDiabetes" value="1" checked>
                                                        <label class="form-check-label" for="yesUserDiabetes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="diabetes" class="form-check-input" type="radio" id="noUserDiabetes" value="0">
                                                        <label class="form-check-label" for="noUserDiabetes">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="diabetes" class="form-check-input" type="radio" id="yesUserDiabetes" value="1">
                                                        <label class="form-check-label" for="yesUserDiabetes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="diabetes" class="form-check-input" type="radio" id="noUserDiabetes" value="0" checked>
                                                        <label class="form-check-label" for="noUserDiabetes">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Have you been diagnosis with chronic kidney disease (CKD)?</label>
                                            <div>
                                                @if ("{{$profileInfo->ckd}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="ckd" class="form-check-input" type="radio" id="yesUserCKD" value="1" checked>
                                                        <label class="form-check-label" for="yesUserCKD">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="ckd" class="form-check-input" type="radio" id="noUserCKD" value="0">
                                                        <label class="form-check-label" for="noUserCKD">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="ckd" class="form-check-input" type="radio" id="yesUserCKD" value="1">
                                                        <label class="form-check-label" for="yesUserCKD">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="ckd" class="form-check-input" type="radio" id="noUserCKD" value="0" checked>
                                                        <label class="form-check-label" for="noUserCKD">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Have you been diagnosis with chronic obstruction lung disease (COLD)?</label>
                                            <div>
                                                @if ("{{$profileInfo->cold}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="cold" class="form-check-input" type="radio" id="yesUserCOLD" value="1" checked>
                                                        <label class="form-check-label" for="yesUserCOLD">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="cold" class="form-check-input" type="radio" id="noUserCOLD" value="0">
                                                        <label class="form-check-label" for="noUserCOLD">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="cold" class="form-check-input" type="radio" id="yesUserCOLD" value="1">
                                                        <label class="form-check-label" for="yesUserCOLD">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="cold" class="form-check-input" type="radio" id="noUserCOLD" value="0" checked>
                                                        <label class="form-check-label" for="noUserCOLD">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Have you been diagnosis with coronary heart disease (CHD)?</label>
                                            <div>
                                                @if ("{{$profileInfo->chd}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="chd" class="form-check-input" type="radio" id="yesUserCHD" value="1" checked>
                                                        <label class="form-check-label" for="yesUserCHD">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="chd" class="form-check-input" type="radio" id="noUserCHD" value="0">
                                                        <label class="form-check-label" for="noUserCHD">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="chd" class="form-check-input" type="radio" id="yesUserCHD" value="1">
                                                        <label class="form-check-label" for="yesUserCHD">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="chd" class="form-check-input" type="radio" id="noUserCHD" value="0" checked>
                                                        <label class="form-check-label" for="noUserCHD">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Have you ever had stroke?</label>
                                            <div>
                                                @if ("{{$profileInfo->stroke}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="stroke" class="form-check-input" type="radio" id="yesUserStroke" value="1" checked>
                                                        <label class="form-check-label" for="yesUserStroke">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="stroke" class="form-check-input" type="radio" id="noUserStroke" value="0">
                                                        <label class="form-check-label" for="noUserStroke">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="stroke" class="form-check-input" type="radio" id="yesUserStroke" value="1">
                                                        <label class="form-check-label" for="yesUserStroke">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="stroke" class="form-check-input" type="radio" id="noUserStroke" value="0" checked>
                                                        <label class="form-check-label" for="noUserStroke">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="inputAddress">Have you been diagnosis with cancer?</label>
                                            <div>
                                                @if ("{{$profileInfo->cancer}}" == "1")
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="cancer" class="form-check-input" type="radio" id="yesUserCancer" value="1" checked>
                                                        <label class="form-check-label" for="yesUserCancer">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="cancer" class="form-check-input" type="radio" id="noUserCancer" value="0">
                                                        <label class="form-check-label" for="noUserCancer">No</label>
                                                    </div>
                                                @else
                                                    <div class="form control form-check form-check-inline">
                                                        <input name="cancer" class="form-check-input" type="radio" id="yesUserCancer" value="1">
                                                        <label class="form-check-label" for="yesUserCancer">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input name="cancer" class="form-check-input" type="radio" id="noUserCancer" value="0" checked>
                                                        <label class="form-check-label" for="noUserCancer">No</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    {{-- <button type="submit" class="btn btn-primary">Update Medical Information</button> --}}
                                    <button type="submit" class="btn btn-success">Save Changes</button>

                                </div>
                            </div>
                        </div>



                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-privatePolicy" role="tabpanel" aria-labelledby="v-pills-privatePolicy-tab">
                    Privacy policy
                    <hr>
                    <form action="" method="post">

                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    Settings
                    <hr>
                    {{-- <form action="res" method="post"> --}}

                        {{-- logout then redirect to reset password --}}
                        <div class="row">
                            <div class="col-sm-4">
                                    <div class="card border-secondary mb-3">
                                        <div class="card-header">Password Reset</div>
                                        <div class="card-body text-secondary">
                                          <p class="card-text">Improve your Account security by changinging passwords periodically.</p>
                                        </div>
                                        <button type="button" href="logout|resetpassword" class="btn btn-secondary">Reset Password</button>

                                      </div>
                            </div>

                            <div class="col-sm-4">
                                    <div class="card bg-light mb-3" >
                                            <div class="card-header">Account Factory Reset</div>
                                            <div class="card-body">
                                              <p class="card-text">Reset your account activities like Symptoms Assessment logs, Medical Profile information, Condition Library browsing logs and Email Subscription, and continue using our services on a clean slate.</p>
                                            </div>
                                            <button type="button" class="btn btn-light">Reset Account</button>
                                        </div>
                            </div>
                            
                            <div class="col-sm-4">
                                    <div class="card border-danger mb-3">
                                            <div class="card-header">Account Deletion </div>
                                            <div class="card-body text-danger">
                                              <p class="card-text">Beware this action is inrevocable, pehalps you wish to delete all user logs <a class="card-link" href="logout|resetpassword">Delete Logs</a>.
                                                  Otherwise click the button below to delete any trace of your account on our system.
                                                </p>
                                            </div>
                                            <button type="button" class="btn btn-danger">Delete Account</button>
                                          </div>
                                        </div>
                        </div>
                           
                        
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection