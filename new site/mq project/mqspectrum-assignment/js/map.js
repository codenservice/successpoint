function initMap() {
    var uluru = { lat: 13.0613, lng: 80.26109999999994 };
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