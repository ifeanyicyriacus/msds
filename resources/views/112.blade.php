@extends('layouts.regularMaster')
@section('page_title')

@endsection
@section('page_style')
    <style>

    </style>

@endsection
@section('content')

    <div class="page-content-col ">
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="c-content-contact-1 c-opt-1">
            <div class="row col-md-2 pull-right" data-auto-height=".c-height">
                <div class="col-lg-4 col-md-6">
                    <div class="c-body">
                        <div class="c-section">
                            <h3>MS<em><span style="color: orange">&</span></em>DS</h3>
                        </div>
                        <h4>
                            Emergency information:
                        </h4>
                        <h5>Toll free numbers:</h5>
                        <h6><strong><em>112</em></strong> (Official Nigeria)</h6>
                        <h6><strong><em>119</em></strong> (Lagos)</h6>

                    </div>
                </div>
            </div>
            <div id="map" class="c-content-contact-1-gmap col-md-10 pull left" style="height: 500px; width: 100%"></div>
        </div>

        <!-- END PAGE BASE CONTENT -->
    </div>

    <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        var map;
        var infowindow;

        function initMap() {
            var pyrmont = {lat: 5.476310 , lng: 7.025853};

            map = new google.maps.Map(document.getElementById('map'), {
                center: pyrmont,
                zoom: 15
            });

            infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);

            service.nearbySearch({
                location: pyrmont,
                radius: 1000,
                type: ['hospital']//'doctor','hospital','veterinary_care','pharmacy'
            }, callback);
        }

        function callback(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
            }
        }

        function createMarker(place) {
            var placeLoc = place.geometry.location;
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>');
                infowindow.open(map, this);
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzcTdKkDBo1lcMr68fPwiX2fIsUR9ZVc8&libraries=places&callback=initMap" async defer></script>












@endsection
{{--AIzaSyAzcTdKkDBo1lcMr68fPwiX2fIsUR9ZVc8--}}