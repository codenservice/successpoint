function initMap() {
    var uluru = { lat: 11.025328, lng: 77.017566 };
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    map.setZoom(17);
    var marker = new google.maps.Marker({
      position: uluru,
      map: map,
      animation: google.maps.Animation.BOUNCE
    });
  }