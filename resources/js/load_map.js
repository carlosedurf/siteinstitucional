function initMap(){var o=new google.maps.Map(document.getElementById("map"),{zoom:16});geocodeAddress(new google.maps.Geocoder,o)}function geocodeAddress(o,a){var e=$("[data-iw-google-maps]").data("iw-google-maps");o.geocode({address:e},function(o,e){if("OK"===e){a.setCenter(o[0].geometry.location);new google.maps.Marker({map:a,position:o[0].geometry.location})}else $("#map").remove(),console.log("Geocode was not successful for the following reason: "+e)})}$(document).on("click",".lws-load-map",function(){initMap()});