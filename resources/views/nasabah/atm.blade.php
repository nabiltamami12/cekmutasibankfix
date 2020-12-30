@extends('layouts.master')
@section('content')
<!-- MAIN -->
 <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="{{asset('/gmaps/css/leaflet.css')}}"><link rel="stylesheet" href="{{asset('/gmaps/css/L.Control.Locate.min.css')}}">
        <link rel="stylesheet" href="{{asset('/gmaps/css/qgis2web.css')}}"><link rel="stylesheet" href="{{asset('/gmaps/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/gmaps/css/leaflet-control-geocoder.Geocoder.css')}}">
        <style>
        #map {
            width: 762px;
            height: 540px;
        }
        </style>
        <title></title>
    </head>

    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid "  id="map" style="box-shadow: 2em">
           <!-- <div id="map"> -->
 </div>
</div>
</div>

         <script src="{{asset('/gmaps/js/qgis2web_expressions.js')}}"></script>
        <script src="{{asset('/gmaps/js/leaflet.js')}}"></script><script src="{{asset('/gmaps/js/L.Control.Locate.min.js')}}"></script>
        <script src="{{asset('/gmaps/js/leaflet.rotatedMarker.js')}}"></script>
        <script src="{{asset('/gmaps/js/leaflet.pattern.js')}}"></script>
        <script src="{{asset('/gmaps/js/leaflet-hash.js')}}"></script>
        <script src="{{asset('/gmaps/js/Autolinker.min.js')}}"></script>
        <script src="{{asset('/gmaps/js/rbush.min.js')}}"></script>
        <script src="{{asset('/gmaps/js/labelgun.min.js')}}"></script>
        <script src="{{asset('/gmaps/js/labels.js')}}"></script>
        <script src="{{asset('/gmaps/js/leaflet-control-geocoder.Geocoder.js')}}"></script>
    <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-8.224951828404741,114.3635463291409],[-8.215596284658819,114.37689953374115]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_GoogleMaps_0');
        map.getPane('pane_GoogleMaps_0').style.zIndex = 400;
        var layer_GoogleMaps_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleMaps_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleMaps_0;
        map.addLayer(layer_GoogleMaps_0);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        setBounds();
        </script>


      
    @endsection