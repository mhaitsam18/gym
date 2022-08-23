 <!-- ***** Chefs Area Starts ***** -->
 <section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                    <h6>Tempat</h6>
                    <h2>Gym</h2>
                    </div>
                </div>
            </div>
            <div id="map" style="height:500px; width: 800px;" class="col-lg-6 col-md-6 col-xs-12"></div>

                <script>
                    let map;
                    function initMap() {
                        var url = `/api/location`;

                        async function markerscodes() {
                            var data = await axios(url);
                            var lacationData = data.data; 
                            mapDisplay(lacationData);
                        }
                        markerscodes(); 

                        var markers = new Array();

                        const lat = [-3.809417721071455,-3.909417721071455,-3.809417921071455];
                        const lng = [102.27161015150737,102.17161015150737,102.25161015150737]
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: { lat: -6.971309728433454,lng:  107.63145466462693 },
                            zoom: 13,
                            scrollwheel: true,
                        });

                        // const uluru = { lat: lat[0], lng: lng[0] };
                        // let marker = new google.maps.Marker({
                        //     position: uluru,
                        //     map: map,
                        //     draggable: true
                        // });
                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7GFfKDp6zdLl71lqdaKMeQ5cFiDsDJ10&callback=initMap"
                        type="text/javascript"></script>

            </div>   

        </div>
</div>
    </section>


<!-- ***** Chefs Area Ends ***** -->