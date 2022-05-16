console.log("debug");

function initMap() {
  const paris = { lat: 48.856614, lng: 2.3522219};
  
  const map = new google.maps.Map(document.getElementById("map"), 
  {
    zoom: 4,
    center: paris,
  });
  
  const marker = new google.maps.Marker({
    position: paris,
    map: map,
    draggable:true,
    title:"Drag me!"
  });

  google.maps.event.addListener(map, 'click', function(event) {
    const location = event.latLng;
    console.log(location);
    marker.setPosition(location);
  });

  google.maps.event.addListener(marker, 'dragend', function(event){
    const location = event.latLng;
    console.log(location);
  });
  
}


