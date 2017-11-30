!function(){"use strict";function e(e){return e.split("").reverse().join("")}function n(e,n){return e.substring(0,n.length)===n}function r(e,n){return e.slice(-1*n.length)===n}function t(e,n,r){if((e[n]||e[r])&&e[n]===e[r])throw new Error(n)}function i(e){return"number"==typeof e&&isFinite(e)}function o(e,n){var r=Math.pow(10,n);return(Math.round(e*r)/r).toFixed(n)}function u(n,r,t,u,f,a,c,s,p,d,l,h){var g,v,w,m=h,x="",b="";return a&&(h=a(h)),i(h)?(n!==!1&&0===parseFloat(h.toFixed(n))&&(h=0),0>h&&(g=!0,h=Math.abs(h)),n!==!1&&(h=o(h,n)),h=h.toString(),-1!==h.indexOf(".")?(v=h.split("."),w=v[0],t&&(x=t+v[1])):w=h,r&&(w=e(w).match(/.{1,3}/g),w=e(w.join(e(r)))),g&&s&&(b+=s),u&&(b+=u),g&&p&&(b+=p),b+=w,b+=x,f&&(b+=f),d&&(b=d(b,m)),b):!1}function f(e,t,o,u,f,a,c,s,p,d,l,h){var g,v="";return l&&(h=l(h)),h&&"string"==typeof h?(s&&n(h,s)&&(h=h.replace(s,""),g=!0),u&&n(h,u)&&(h=h.replace(u,"")),p&&n(h,p)&&(h=h.replace(p,""),g=!0),f&&r(h,f)&&(h=h.slice(0,-1*f.length)),t&&(h=h.split(t).join("")),o&&(h=h.replace(o,".")),g&&(v+="-"),v+=h,v=v.replace(/[^0-9\.\-.]/g,""),""===v?!1:(v=Number(v),c&&(v=c(v)),i(v)?v:!1)):!1}function a(e){var n,r,i,o={};for(n=0;n<p.length;n+=1)if(r=p[n],i=e[r],void 0===i)"negative"!==r||o.negativeBefore?"mark"===r&&"."!==o.thousand?o[r]=".":o[r]=!1:o[r]="-";else if("decimals"===r){if(!(i>=0&&8>i))throw new Error(r);o[r]=i}else if("encoder"===r||"decoder"===r||"edit"===r||"undo"===r){if("function"!=typeof i)throw new Error(r);o[r]=i}else{if("string"!=typeof i)throw new Error(r);o[r]=i}return t(o,"mark","thousand"),t(o,"prefix","negative"),t(o,"prefix","negativeBefore"),o}function c(e,n,r){var t,i=[];for(t=0;t<p.length;t+=1)i.push(e[p[t]]);return i.push(r),n.apply("",i)}function s(e){return this instanceof s?void("object"==typeof e&&(e=a(e),this.to=function(n){return c(e,u,n)},this.from=function(n){return c(e,f,n)})):new s(e)}var p=["decimals","thousand","mark","prefix","postfix","encoder","decoder","negativeBefore","negative","edit","undo"];window.wNumb=s}();


$(document).ready(function() {
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function search(mode, query) {
        var params = '';
        if (searchMode === 'location') {
            var lat = localStorage.getItem('user.lat');
            var lon = localStorage.getItem('user.lon');
            params = '&lat=' + lat + '&lon=' + lon;
        }
        window.location = '/search?mode=' + mode + '&q=' + query + params;
    }

    $('#search').keypress(function(e) {
        if (e.keyCode === 13) {
            $('form#search-form').submit();
        }
    });

    $('.btn-search').click(function(e) {
        $('form#search-form').submit();
    });

    //
    // function filter50( value, type ){
    //     return value % 50 ? 2 : 1;
    // }
    //
    // var slider = document.getElementById('price-slider');
    // noUiSlider.create(slider, {
    //     start: [10000, 180000],
    //     step: 1000,
    //     connect: true,
    //     tooltips: true,
    //     orientation: 'horizontal', // 'horizontal' or 'vertical'
    //     range: {
    //         'min': [ 1000 ],
    //         '33%': [ 50000 ],
    //         '66%': [ 100000 ],
    //         'max': [ 500000 ]
    //     },
    //     format: wNumb({
    //         decimals: 0,
    //         prefix: 'Rp '
    //     })
    //
    // });

    if (getParameterByName('mode') === 'price') {
        var range = $("#price-range").val().split(';');
        var from = range? range[0] : 8000;
        var to   = range? range[1] : 40000;

        $("#price-range").ionRangeSlider({
            type: 'double',
            min: 1000,
            max: 100000,
            step: 500,
            from: from,
            to: to,
        });
    }

    // var lowInput = document.getElementById('low');
    // var highInput = document.getElementById('high');
    //
    // slider.noUiSlider.on('update', function( values, handle ) {
    //     lowInput.value = slider.noUiSlider.get()[0].replace("Rp ", "");
    //     highInput.value = slider.noUiSlider.get()[1].replace("Rp ", "");
    // });

    // $('select').material_select();
    $('input.autocomplete').autocomplete({
        data: {
            "Nasi Telor": 'https://c1.staticflickr.com/4/3513/3747163091_382ca445d2_b.jpg',
            "Indomie Goreng": 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Indomie_Mie_Goreng_Iga_Penyet_1.JPG/985px-Indomie_Mie_Goreng_Iga_Penyet_1.JPG',
            "Indomie Rebus": 'https://c2.staticflickr.com/8/7310/8728075283_28a999d81f_b.jpg',
            "Nasi Goreng": 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Nasi_goreng-1.JPG/640px-Nasi_goreng-1.JPG',
            "Pizza": 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Seafood_pizza_%281%29.jpg/320px-Seafood_pizza_%281%29.jpg',
            "Tempe": 'https://pbs.twimg.com/profile_images/3343963833/20a1d4e40685feccf83cdd8e54a34485.jpeg',
            "Es Coklat": 'https://cdn.pixabay.com/photo/2014/01/15/09/51/ice-chocolate-245475_960_720.jpg',
            "Nasi Ayam Geprek": 'https://c1.staticflickr.com/7/6185/6033947539_b7b93d67e7_b.jpg',
            "Magelangan": 'http://cdn2.tstatic.net/pekanbaru/foto/bank/images/mie-nasi-goreng_20161004_084547.jpg'
        },
        limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    });
});
