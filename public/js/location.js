function getAddress(lat, lon) {
    return $.get('https://maps.googleapis.com/maps/api/geocode/json?latlng=' + lat + ',' + lon + '&key=AIzaSyA-rBXQJg_oyYNCD3ArZpry51dG5L8uhok')
    .promise().then(function(response) {
        if (typeof response['status'] !== 'undefined' && response['status'] === 'OK') {
            return response['results'][0]['formatted_address'];
        } else {
            return 'Unknown';
        }
    });
}

function getUserLocation() {
    return new Promise(function(resolve, reject) {
        navigator.geolocation.getCurrentPosition(resolve, reject);
    });
}

function askLocationAndAddress() {
    return getUserLocation().then(function(position) {
        localStorage.setItem('user.location', JSON.stringify({
            state: 'success',
            lat: position.coords.latitude,
            lon: position.coords.longitude
        }));

        return getAddress(position.coords.latitude, position.coords.longitude);
    }, function(a) {
        switch (a['code']) {
            case PositionError.PERMISSION_DENIED:
                localStorage.setItem('user.location', JSON.stringify({
                    state: 'denied',
                }));
                break;
            case PositionError.POSITION_UNAVAILABLE:
                localStorage.setItem('user.location', JSON.stringify({
                    state: 'disconnected',
                }));
                break;
            case PositionError.TIMEOUT:
                localStorage.setItem('user.location', JSON.stringify({
                    state: 'timeout',
                }));
                break;
        }
    }).then(function(addr) {
        var userLocation = JSON.parse(localStorage.getItem('user.location')) || {};
        userLocation['addr'] = addr;
        localStorage.setItem('user.location', JSON.stringify(userLocation));
        return userLocation;
    });
}
