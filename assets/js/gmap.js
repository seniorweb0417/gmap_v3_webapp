var markers = [];
var map;

function initialize() {
    var myLatlng = new google.maps.LatLng(40.713956, -74.006653);
  
    var myOptions = {
      zoom: 8,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
    google.maps.event.addListener(map, 'click', function(event) {
    //   document.getElementById("lat").value = event.latLng.lat();
    //   document.getElementById("long").value = event.latLng.lng();

      showmodal(event.latLng.lat(), event.latLng.lng());
    });
}

function showmodal(lat, lng) {
    $('#coor_lat').val(lat);
    $('#coor_lng').val(lng);

    $('#usrname').val('');
    $('#type').val('');
    $('#coor').val('');
    $('#phase').val('');
    $('#subphase').val('');
    $('#building').val('');
    $('#apt').val('');
    $('#floor').val('');
    $('#elevator').val('');
    $('#over').val('');
    $('#paid_amount').val('');
    $('#remaining_balance').val('');
    $('#remaining_years').val('');
    $('#notes').val('');

    $('#info_modal').modal();
}

function saveMarker() {
    var latlng = new google.maps.LatLng($('#coor_lat').val(), $('#coor_lng').val());

    var marker = new google.maps.Marker({
        draggable: false,
        position: latlng,
        map: map,
        title: $('#usrname').val(),
        usrname: $('#usrname').val(),
        type: $('#type').val(),
        coor: $('#coor').val(),
        phase: $('#phase').val(),
        subphase: $('#subphase').val(),
        building: $('#building').val(),
        apt: $('#apt').val(),
        floor: $('#floor').val(),
        elevator: $('#elevator').val(),
        over: $('#over').val(),
        paid_amount: $('#paid_amount').val(),
        remaining_balance: $('#remaining_balance').val(),
        remaining_years: $('#remaining_years').val(),
        notes: $('#notes').val()
    });

    $.ajax({
        url: $('#base_url').val() + '/landing/saveMaker',
        method: 'POST',
        data: {
            username: $('#usrname').val(),
            type: $('#type').val(),
            lat: $('#coor_lat').val(),
            lng: $('#coor_lng').val(),
            phase: $('#phase').val(),
            subphase: $('#subphase').val(),
            building: $('#building').val(),
            apt: $('#apt').val(),
            floor: $('#floor').val(),
            elevator: $('#elevator').val(),
            over: $('#over').val(),
            paid_amount: $('#paid_amount').val(),
            remaining_balance: $('#remaining_balance').val(),
            remaining_years: $('#remaining_years').val(),
            notes: $('#notes').val()
        },
        success: function(result) {
            console.log(result);
            marker.setPosition(latlng);
            markers.push(marker);
            console.log(markers);
            $('#info_modal').modal('hide');
        }
    });
}

google.maps.event.addDomListener(window, "load", initialize());