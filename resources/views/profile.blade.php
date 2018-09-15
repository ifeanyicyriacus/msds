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
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-basicInformation-tab" data-toggle="pill" href="#v-pills-basicInformation" role="tab" aria-controls="v-pills-basicInformation" aria-selected="true">Basic Information</a>
                {{-- <ul>
                    <li>Name</li>
                    <li>Gender</li>
                    <li>Date of Birth</li>
                    <li>Location</li>
                    <li>Contact</li>
                </ul> --}}
                <a class="nav-link" id="v-pills-medicalInformation-tab" data-toggle="pill" href="#v-pills-medicalInformation" role="tab" aria-controls="v-pills-medicalInformation" aria-selected="false">Medical Information</a>
                {{-- <ul>
                    <li>Smoker</li>
                    <li>Obesity</li>
                    <li>HBP</li>
                    <li>Diabetes</li>
                    <li>CHD</li>
                    <li>COLD</li>
                    <li>CHD</li>
                    <li>Stroke</li>
                    <li>Cancer</li>
                </ul> --}}
                <a class=" nav-link" id="v-pills-privatePolicy-tab" data-toggle="pill" href="#v-pills-privatePolicy" role="tab" aria-controls="v-pills-privatePolicy" aria-selected="false">Privacy policy</a>
                {{-- <ul>
                    <li>Version</li>
                    <li>Terms and condition</li>
                    <li>Privacy policy</li>
                    <li>Third-Party Software</li>
                </ul>  --}}
                <a class=" nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                {{-- <ul>
                    <li>Account</li>
                    <li>Language</li>
                    <li>Unit</li>
                    <li>Feedback</li>
                </ul> --}}
            </div>
        </div>

        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane show active" id="v-pills-basicInformation" role="tabpanel" aria-labelledby="v-pills-basicInformation-tab">
                Basic Information
                <hr>               
                <form action="" method="post">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10 form-row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                        </div>
                        
                        <fieldset class="form-group">
                          <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Sex</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                <label class="form-check-label" for="gridRadios1">
                                  male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Female
                                </label>
                              </div>
                              
                            </div>
                          </div>
                        </fieldset>

                        <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
                                <div class="col-sm-10 form-row">
                                      <div class="col">
                                      <input id="DOB" type="date" class="form-control">
                                      </div>
                                  </div>
                              </div>




                        <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10 form-row">
                                        <div class="col">
                                            <input type="email" class="form-control" id="inputEmail3" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                </div>
                              </div>


                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Basic Information</button>
                          </div>
                        </div>
                      </form>


                </div>
            <div class="tab-pane fade" id="v-pills-medicalInformation" role="tabpanel" aria-labelledby="v-pills-medicalInformation-tab">
                Medical Information
                <hr>
                <form action="" method="post">
                    <div class="col-sm-10 ">
                        <ul>
                            <li>
                                <div class="form-group ">
                                    <label for="inputAddress">Do you smoke?</label>
                                    <div>
                                        <div class="form control form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                    <div class="form-group">
                                            <label for="inputAddress">Are you Pregnant?</label>
                                            <div>
                                                <div class="form control form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                                                </div>
                                            </div> 
                                        </div>
                            </li>
                            <li>
                                <div class="form-group">
                                        <label for="inputAddress">Are you over weight or obese?</label>
                                        <div>
                                            <div class="form control form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label for="inputAddress">Have you been diagnosis with high blood pressure?</label>
                                    <div>
                                        <div class="form control form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                        <label for="inputAddress">Have you been diagnosis with diabetes?</label>
                                        <div>
                                            <div class="form control form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                        <label for="inputAddress">Have you been diagnosis with chronic kidney disease (CKD)?</label>
                                        <div>
                                            <div class="form control form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                        <label for="inputAddress">Have you been diagnosis with chronic obstruction lung disease (COLD)?</label>
                                        <div>
                                            <div class="form control form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                        <label for="inputAddress">Have you been diagnosis with coronary heart diseses (CHD)?</label>
                                        <div>
                                            <div class="form control form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                        <label for="inputAddress">Have you ever had stroke?</label>
                                        <div>
                                            <div class="form control form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                        <label for="inputAddress">Have you been diagnosis with cancer?</label>
                                        <div>
                                            <div class="form control form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Not Sure</label>
                                        </div>
                                    </div> 
                                </div>
                            </li>
                        </ul>
                    
                    
                        <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update Medical Information</button>
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
                <form action="" method="post">

                </form>
            </div>

          </div>
        </div>
      </div>
@endsection