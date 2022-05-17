console.log("debug");

function initMap() {
  const paris = { lat: 48.856614, lng: 2.3522219};

  const map = new google.maps.Map(document.getElementById("map"),
  {
    zoom: 10,
    center: paris,
  });

  const marker = new google.maps.Marker({
    position: paris,
    map: map,
    draggable:true,
    title:"Drag me!"
  });
  updateCoordinates(marker.position)

  google.maps.event.addListener(map, 'click', function(event) {
    const location = event.latLng;
    marker.setPosition(location);

    updateCoordinates(location)
  });

  google.maps.event.addListener(marker, 'dragend', function(event){
    const location = event.latLng;

    updateCoordinates(location);
  });

}

function updateCoordinates(location) {
    const lat = document.querySelector('#latitude');
    const lng = document.querySelector('#longitude');

    lat.value = location.lat();
    lng.value = location.lng();
}


