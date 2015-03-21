//load platform
var platform = new H.service.Platform({
    'app_id': 'wScDqULZdhwRKBl6uT56',
    'app_code': 'OHzXFtZctm12TKOqE5i1Bg'
});

//load map layer
var defaultLayers = platform.createDefaultLayers();

//load map in div and styles
var map = new H.Map(
    document.getElementById('mapContainer'),
    defaultLayers.normal.map,
    { zoom: 15, center: { lat: 12, lng: 121 }}
);

//Create default UI
var ui = H.ui.UI.createDefault(map, defaultLayers);

//bind map events to map
var mapEvents = new H.mapevents.MapEvents(map);

// //add event listener to map
// map.addEventListener('tap', function(evt){
//     console.log(evt.type, evt.currentPointer.type);
// });

//add default behavior of map
var behavior = new H.mapevents.Behavior(mapEvents);

// //create group that can hold map objects
// //two groups: danger points, police points
// var group = new H.map.Group();

// //add the group to the map object
// map.addObject(group);

// //create a marker and add it to group
// var marker = new H.map.Marker(map.getCenter());
// group.addObject(marker);

// // Define a variable holding SVG mark-up that defines an icon image:
// var svgMarkup = '<svg width="24" height="24" ' + 'xmlns="http://www.w3.org/2000/svg">' + '<rect stroke="white" fill="#1b468d" x="1" y="1" width="22" ' + 'height="22" />' + '<text x="12" y="18" font-size="12pt" ' + 'font-family="Arial" font-weight="bold" text-anchor="middle "' + 'fill="white">H</text></svg>';

// // Create an icon, an object holding the latitude and longitude, and a marker:
// var myIcon = new H.map.DomIcon(svgMarkup), coords = {lat: 52.53075, lng: 13.3851 }, marker = new H.map.DomMarker(coords, {icon: myIcon});
// // Add the marker to the map and center the map at the location of the marker:
// map.addObject(marker);
// map.setZoom(18);
// map.setCenter(coords);

//create and add bubble
// var bubble = new H.ui.InfoBubble(
//     { lng: 13.4, lat: 52.51},
//     { content: '<b>Hello World!' }
// );
// ui.addBubble(bubble);

$(document).ready(function(){
    $('#searchPlace').keyup(function(event){
        if(event.keyCode == 13){
            var geocodingParams = {
                searchText: $(this).val()
            };

            //Define callback function to process geocoding response
            var onResult = function(result){
                var locations = result.Response.View[0].Result, position, marker;
                // add a marker for each location found
                for(i = 0; i < locations.length; i++){
                    var xlat = locations[i].Location.DisplayPosition.Latitude, xlng = locations[i].Location.DisplayPosition.Longitude;
                    position = {
                        lat: xlat,
                        lng: xlng
                        };
                    var marker = new H.map.Marker(position);
                    map.addObject(marker);
                    map.setZoom(15);
                    map.setCenter({ lat : xlat, lng : xlng});
                    marker.addEventListener('tap', function(event){
                        $('#info').text("info here");
                    });
                }
            };

            //Get instance of the geocoding service
            var geocoder = platform.getGeocodingService();

            //Call geocoder, callback if error
            geocoder.geocode(geocodingParams, onResult, function(e){ alert(e); });
        }
    });
});