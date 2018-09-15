@extends('layouts.regularMaster')
@section('page_title')
    
@endsection
@section('page_style')
<style>

</style>

@endsection
@section('content')

911
<div class="page-content-col">
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="c-content-contact-1 c-opt-1">
        <div class="row" data-auto-height=".c-height">
            <div class="col-lg-8 col-md-6 c-desktop"></div>
            <div class="col-lg-4 col-md-6">
                <div class="c-body">
                    <div class="c-section">
                        <h3>MS<em><span style="color: orange">&</span></em>DS</h3>
                    </div>
                    <h3>
                        Emergency information:
                    </h3>
                    <h4>Toll free numbers:</h4>
                </div>
            </div>
        </div>
        <div id="map" class="c-content-contact-1-gmap" style="height: 615px;"></div>
    </div>

    <!-- END PAGE BASE CONTENT -->
</div>

<script>
    function myMap() {

        // This will Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 5.5093520, lng: 7.0417650},
            zoom: 10
        });

    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyAzcTdKkDBo1lcMr68fPwiX2fIsUR9ZVc8" async defer></script>

@endsection