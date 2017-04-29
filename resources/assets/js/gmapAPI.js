(function() {

// var map;

// function initmap() {
//     map = new google.maps.Map($("#map_canvas"), { center:
//             {
//                 lat: -34.397, 
//                 lng: 150.644},
//                 zoom: 8 
//             });
// } 

var map;
window.initMap = function() {
    map = new google.maps.Map($("#map_canvas"), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
}
})();

