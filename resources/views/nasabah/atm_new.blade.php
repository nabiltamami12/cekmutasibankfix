@extends('layouts.master')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="{{asset('/atm_terdekat/css/leaflet.css')}}"><link rel="stylesheet" href="{{asset('/atm_terdekat/css/L.Control.Locate.min.css')}}">
        <link rel="stylesheet" href="{{asset('/atm_terdekat/css/qgis2web.css')}}"><link rel="stylesheet" href="{{asset('/atm_terdekat/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/atm_terdekat/css/leaflet-control-geocoder.Geocoder.css')}}">
        <style>
        #map {
            width: 780px;
            height: 400px;
        }
        </style>
        <title>ATM Terdekat</title>
    </head>
   
      <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid "  id="map" style="box-shadow: 2em">
           <!-- <div id="map"> -->

 </div>
 <div>
<center> 
  

<section>
<div>
<img src="{{asset('/atm_terdekat/markers/red-marker.svg')}}" style="height: 50px ;width: 50px"> 
<h5>(BANK BTN)</h5>
</div>
<div>
<img src="{{asset('/atm_terdekat/markers/blue-marker.svg')}}" style="height: 50px;width: 50px; margin-top: -1em">
<h5>(BANK BCA)</h5>
</div>
</section>

</center>
   

</div>
</div>
</div>
        <script src="{{asset('/atm_terdekat/js/qgis2web_expressions.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/leaflet.js')}}"></script><script src="{{asset('/atm_terdekat/js/L.Control.Locate.min.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/leaflet.rotatedMarker.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/leaflet.pattern.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/leaflet-hash.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/Autolinker.min.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/rbush.min.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/labelgun.min.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/labels.js')}}"></script>
        <script src="{{asset('/atm_terdekat/js/leaflet-control-geocoder.Geocoder.js')}}"></script>
        <script src="{{asset('/atm_terdekat/data/atmBCA_1.js')}}"></script>
        <script src="{{asset('/atm_terdekat/data/atmBTN_2.js')}}"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-8.249997713788362,114.3264675766784],[-8.207460729138804,114.38655699737308]]);
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
        function pop_atmBCA_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_atmBCA_1_0() {
            return {
                pane: 'pane_atmBCA_1',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl:  '{{asset('/atm_terdekat/markers/blue-marker.svg')}}',
            iconSize: [57.0, 57.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_atmBCA_1');
        map.getPane('pane_atmBCA_1').style.zIndex = 401;
        map.getPane('pane_atmBCA_1').style['mix-blend-mode'] = 'normal';
        var layer_atmBCA_1 = new L.geoJson(json_atmBCA_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_atmBCA_1',
            layerName: 'layer_atmBCA_1',
            pane: 'pane_atmBCA_1',
            onEachFeature: pop_atmBCA_1,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_atmBCA_1_0(feature));
            },
        });
        bounds_group.addLayer(layer_atmBCA_1);
        map.addLayer(layer_atmBCA_1);
        function pop_atmBTN_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_atmBTN_2_0() {
            return {
                pane: 'pane_atmBTN_2',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl:'{{asset('/atm_terdekat/markers/red-marker.svg')}}',
            iconSize: [57.0, 57.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_atmBTN_2');
        map.getPane('pane_atmBTN_2').style.zIndex = 402;
        map.getPane('pane_atmBTN_2').style['mix-blend-mode'] = 'normal';
        var layer_atmBTN_2 = new L.geoJson(json_atmBTN_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_atmBTN_2',
            layerName: 'layer_atmBTN_2',
            pane: 'pane_atmBTN_2',
            onEachFeature: pop_atmBTN_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_atmBTN_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_atmBTN_2);
        map.addLayer(layer_atmBTN_2);
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