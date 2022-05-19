var markers = [];
var infos = [];
var map;

function initialize() {
    var myLatlng = new google.maps.LatLng(30.030572852922617, 31.02115847241165);
  
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

    $.ajax({
        url: $('#base_url').val() + 'index.php/Landing/loadMarker',
        method: 'POST',
        data: {
            username: $('#f_usrname').val(),
            type: $('#f_type').val(),
            phase: $('#f_phase').val(),
            subphase: $('#f_subphase').val(),
            building: $('#f_building').val(),
            apt: $('#f_apt').val(),
            floor: $('#f_floor').val(),
            elevator: $('#f_elevator').val(),
            over: $('#f_over').val(),
            paid_amount: $('#f_paid_amount').val(),
            remaining_balance: $('#f_remaining_balance').val(),
            remaining_years: $('#f_remaining_years').val()
        },
        success: function(result) {
            var res = JSON.parse(result);
            for (var i = 0; i < res.length; i ++) {
                var latlng = new google.maps.LatLng(res[i]['lat'], res[i]['lng']);
                var marker = new google.maps.Marker({
                    draggable: false,
                    position: latlng,
                    map: map,
                    title: res[i]['username'],
                    usrname: res[i]['username'],
                    type: res[i]['type'],
                    phase: res[i]['phase'],
                    subphase: res[i]['subphase'],
                    building: res[i]['building'],
                    apt: res[i]['apt'],
                    floor: res[i]['floor'],
                    elevator: res[i]['elevator'],
                    over: res[i]['over_str'],
                    paid_amount: res[i]['paid_amount'],
                    remaining_balance: res[i]['remaining_balance'],
                    remaining_years: res[i]['remaining_years'],
                    notes: res[i]['notes']
                });

                marker.setPosition(latlng);
                markers.push(marker);

                // show info window
                var content = '';
                content += '<div>Username: ' + res[i]['username'] + '</div>';
                content += '<div>Type: ' + res[i]['type'] + '</div>';
                content += '<div>Phase: ' + res[i]['phase'] + '</div>';
                content += '<div>Subphase: ' + res[i]['subphase'] + '</div>';
                content += '<div>Building: ' + res[i]['building'] + '</div>';
                content += '<div>Apt: ' + res[i]['apt'] + '</div>';
                content += '<div>Floor: ' + res[i]['floor'] + '</div>';
                content += '<div>Elevator: ' + res[i]['elevator'] + '</div>';
                content += '<div>Over: ' + res[i]['over_str'] + '</div>';
                content += '<div>Paid amount: ' + res[i]['paid_amount'] + '</div>';
                content += '<div>Remaining balance: ' + res[i]['remaining_balance'] + '</div>';
                content += '<div>Remaining years: ' + res[i]['remaining_years'] + '</div>';
                content += '<div>Notes: ' + res[i]['notes'] + '</div>';

                // var infowindow = new google.maps.InfoWindow();
    
                // google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
                //     return function() {
                //         infowindow.setContent(content);
                //         infowindow.open(map, marker);
                //     }
                // })(marker, content, infowindow));
                placeInfoWindow(marker, content);
            }

        }
    });
}

function placeInfoWindow(marker, content) {
    var infowindow = new google.maps.InfoWindow();
    
    google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
        return function() {
            for (var i = 0; i < infos.length; i++) {
                infos[i].close();
            }

            infowindow.setContent(content);
            infowindow.open(map, marker);
            infos.push(infowindow);
        }
    })(marker, content, infowindow));
}

function showmodal(lat, lng) {
    $('#coor_lat').val(lat);
    $('#coor_lng').val(lng);

    $('#usrname').val('');
    $('#type').val('');
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
        url: $('#base_url').val() + 'index.php/Landing/saveMarker',
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
            marker.setPosition(latlng);
            markers.push(marker);
            $('#info_modal').modal('hide');

            var content = '';
            content += '<div>Username: ' + $('#usrname').val() + '</div>';
            content += '<div>Type: ' + $('#type').val() + '</div>';
            content += '<div>Phase: ' + $('#phase').val() + '</div>';
            content += '<div>Subphase: ' + $('#subphase').val() + '</div>';
            content += '<div>Building: ' + $('#building').val() + '</div>';
            content += '<div>Apt: ' + $('#apt').val() + '</div>';
            content += '<div>Floor: ' + $('#floor').val() + '</div>';
            content += '<div>Elevator: ' + $('#elevator').val() + '</div>';
            content += '<div>Over: ' + $('#over').val() + '</div>';
            content += '<div>Paid amount: ' + $('#paid_amount').val() + '</div>';
            content += '<div>Remaining balance: ' + $('#remaining_balance').val() + '</div>';
            content += '<div>Remaining years: ' + $('#remaining_years').val() + '</div>';
            content += '<div>Notes: ' + $('#notes').val() + '</div>';

            placeInfoWindow(marker, content);
        }
    });
}

function showAll() {
    document.location.href = $('#base_url').val();
}

google.maps.event.addDomListener(window, "load", initialize());