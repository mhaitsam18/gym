function initMap() {
    
    var mapElement = document.getElementById('map');
    var url = `/api/location`;

    async function markerscodes() {
        var data = await axios(url);
        var lacationData = data.data; 
        mapDisplay(lacationData);
    }
    markerscodes(); 

    function mapDisplay(datas) {

        //map options
        var options = {
            //center: { lat:6.9586, lng: 79.9662 }, //Heiyanthuduwa
            // center: { lat: 6.9333296, lng: 79.9833294 }, Biygama
            center: { lat:Number(datas[0].latitude), lng:  Number(datas[0].longitude) },
            zoom: 10
        } 
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(mapElement, options );

    
        var markers = new Array();

            for (let index = 0; index < datas.length; index++) {
                markers.push({ 
                    coords: { lat: Number(datas[index].latitude), lng:  Number(datas[index].latitude) },
                    content: `<div><h5>${datas[index].title}</h5><p><i class="icon address-icon"></i>${datas[index].description}</p></div>`
                })
            }

            //loop through marker
            for ( var i = 0; i < markers.length; i++ ){
                addMarker(markers[i]);
            } 
    
        //addMarker();
        function addMarker(props){
            var marker = new google.maps.Marker({
                position: props.coords, 
                map:map
            });

            if(props.iconImage){
                marker.setIcon(props.iconImage);
            }

            if(props.content){

                var infowindow = new google.maps.InfoWindow({
                    content: props.content
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });

            }
        }
        
            
    };

} //initMa