var data = {
    cors:'https://cors-anywhere.herokuapp.com/',
    url:'https://api.darksky.net/forecast/bd78811a2a52f30ec9133a559f32783d/',
    coords:{
        scl:'-33.44086892,-70.62657524',
        lsc:'-29.91266935,-71.25820926'
    },

}

var queryParams= ['exclude=[minutely,hourly,daily,alerts,flags]','lang=es','units=auto']



$('#select').on('change',function(){
    $.ajax({
        url:data.cors + data.url + data.coords[$(this).val()] + '?' +  queryParams[0] +'&'+ queryParams[1] + '&' + queryParams[2],
        method:'GET'
    }).done(function(data){
  
    })

    var cordenadas= data.coords[$(this).val()].split(',');
    map.setCenter(new google.maps.LatLng(cordenadas[0], cordenadas[1]));
})


var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 17
    });
}