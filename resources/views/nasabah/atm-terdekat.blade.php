@extends('layouts.master')
@section('content')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="{{asset('/gmaps2/css/leaflet.css')}}"><link rel="stylesheet" href="{{asset('/gmaps2/css/L.Control.Locate.min.css')}}">
        <link rel="stylesheet" href="{{asset('/gmaps2/css/qgis2web.css')}}"><link rel="stylesheet" href="{{asset('/gmaps2/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/gmaps2/css/leaflet-control-geocoder.Geocoder.css')}}">
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
        <div class="container-fluid "  >
               <div class="container">
                 <div class="row"  id="map" style="box-shadow: 2em; margin-top: -2em">
               </div>
               </div>
           <!-- <div id="map"> -->
 </div>
</div>
</div>
        <script src="{{asset('/gmaps2/js/qgis2web_expressions.js')}}"></script>
        <script src="{{asset('/gmaps2/js/leaflet.js')}}"></script><script src="{{asset('/gmaps2/js/L.Control.Locate.min.js')}}"></script>
        <script src="{{asset('/gmaps2/js/leaflet.rotatedMarker.js')}}"></script>
        <script src="{{asset('/gmaps2/js/leaflet.pattern.js')}}"></script>
        <script src="{{asset('/gmaps2/js/leaflet-hash.js')}}"></script>
        <script src="{{asset('/gmaps2/js/Autolinker.min.js')}}"></script>
        <script src="{{asset('/gmaps2/js/rbush.min.js')}}"></script>
        <script src="{{asset('/gmaps2/js/labelgun.min.js')}}"></script>
        <script src="{{asset('/gmaps2/js/labels.js')}}"></script>
        <script src="{{asset('/gmaps2/js/leaflet-control-geocoder.Geocoder.js')}}"></script>
        <script src="{{asset('/gmaps2/data/atmBCA_1.js')}}"></script>
        <script src="{{asset('/gmaps2/data/atmBTN_2.js')}}"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-8.269052385350713,114.29357652535086],[-8.18397841605155,114.41375536674022]]);
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
                radius: 6.0,
                opacity: 1,
                color: 'rgba(255,255,255,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(0,38,255,1.0)',
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
                return L.circleMarker(latlng, style_atmBCA_1_0(feature));
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
                radius: 6.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(19,12,81,1.0)',
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
                return L.circleMarker(latlng, style_atmBTN_2_0(feature));
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
