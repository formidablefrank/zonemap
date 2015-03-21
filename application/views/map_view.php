<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="http://js.api.here.com/v3/3.0/mapsjs-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/foundation.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/bootstrap-social.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/normalize.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/styles.css');?>">
    <link rel="shortcut icon" type="icon" href="<?php echo site_url('img/logo.png');?>">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="small-2" style="position:absolute; z-index:10; margin:10px 8px">
            <input id="searchPlace" type="text" placeholder="Search place" style=" border: 3px gray solid" />
    </div>
    <div class="small-2" style="position:absolute; z-index:9; margin:10px 10px">
        <div id="side-panel" class="">
            <br/>
            <br/>
            <!-- <div id="info">
            <?php
            // foreach ($point as $row) {
            //     echo $row->address;
            //     echo '<br/>';
            //     echo '(';
            //     echo $row->lat;
            //     echo ',';
            //     echo $row->lng;
            //     echo ')';
            //     echo '<br/>';
            //     echo 'rating: '. $rating[0]->rate;
            //     echo '<br/>';
            //     echo 'Comments:<br/>';
            //     foreach ($comments as $comment) {
            //         echo $comment->username;
            //         echo '<br/>';
            //         echo $comment->comment;
            //         echo '<br/>';
            //     }
            //     echo 'Incidents:';
            //     foreach ($incidents as $incident) {
            //         echo $incident->incident_id;
            //         echo '->';
            //         echo $incident->freq;
            //         echo '<br>';
            //     }
            // }
            ?>
            </div> -->
            <div id="info">
                <?php foreach($point as $row) {?>
                    <div id="placeTitleRow" class="row">
                        <h1><strong><?php echo $row->address; ?></strong></h1>
                        <p><?php echo '('.$row->lat.', '.$row->lng.')'; ?></p>
                    </div>
                    <hr />
                    <div id="dangerLevelRow" class="row">
                        <ul>
                            <li><img src="<?php echo site_url('img/danger_red.png')?>" style="height: 30px; width: 30px;"/></li>
                            <li><img src="<?php echo site_url('img/danger_red.png')?>" style="height: 30px; width 30px;"/></li>
                            <li><img src="<?php echo site_url('img/danger_red.png')?>" style="height: 30px; width 30px;"/></li>
                            <li><img src="<?php echo site_url('img/danger_red_fade.png')?>" style="height: 30px; width 30px;"/></li>
                            <li><img src="<?php echo site_url('img/danger_red_fade.png')?>" style="height: 30px; width 30px;"/></li>
                        </ul>
                        <p class="text-center">3.15</p>
                    </div>
                    <div id="criteriaRow" class="row">
                    <ul>
                        <li><img src="<?php echo site_url('img/theft3.png')?>" style="height: 30px; width 30px; "/></li>
                        <li><img src="<?php echo site_url('img/harass.png')?>" style="height: 30px; width 30px; "/></li>
                        <li><img src="<?php echo site_url('img/no_light.png')?>" style="height: 30px; width 30px; "/></li>
                        <li><img src="<?php echo site_url('img/kidnap.png')?>" style="height: 30px; width 30px; "/></li>
                        <li><img src="<?php echo site_url('img/abuse.png')?>" style="height: 30px; width 30px; "/></li>
                    </ul>
                    <p class="text-center">5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7</p>
                    </div>
                    <hr />
                    <div id="reviewRow" class="row">
                        <h3><strong>Reviews</strong></h3>
                        <?php foreach ($comments as $comment) { ?>
                            <strong><?php echo $comment->username; ?></strong> says...
                            <br/>
                            <p class = "thing"><?php echo $comment->comment; ?></p>
                            <br/>
                        <?php } ?>
                    </div>
                    <div id="formRow" class="row">
                        <form>
                            <fieldset>
                                <legend>Contribute</legend>

                                <!--
                                <label>Input Label
                                    <input type="text" placeholder="Inputs and other elements go inside...">
                                </label>
                                -->
                                <div id="ratingRow" class="row">
                                    <a href="<?php echo site_url('/homepage/addRating/').'/'.$point[0]->point_id?>/1" class="button small round">1</a>
                                    <a href="<?php echo site_url('/homepage/addRating/').'/'.$point[0]->point_id?>/2" class="button small round">2</a>
                                    <a href="<?php echo site_url('/homepage/addRating/').'/'.$point[0]->point_id?>/3" class="button small round">3</a>
                                    <a href="<?php echo site_url('/homepage/addRating/').'/'.$point[0]->point_id?>/4" class="button small round">4</a>
                                    <a href="<?php echo site_url('/homepage/addRating/').'/'.$point[0]->point_id?>/5" class="button small round">5</a>
                                </div>
                                <div id="checklistRow" class="row">
                                    <div class="large-12 columns">
                                        <label>Incidents:</label>
                                        <input id="box1" type="checkbox"><label for="box1">Theft</label><br/>
                                        <input id="box2" type="checkbox"><label for="box1">Kidnapping</label><br/>
                                        <input id="box3" type="checkbox"><label for="box1">Harassment</label><br/>
                                        <input id="box4" type="checkbox"><label for="box1">Lack of streetlights</label><br/>
                                        <input id="box5" type="checkbox"><label for="box1">Abuse (home, work)</label><br/>
                                    </div>
                                </div>
                                <div id="commentRow" class="row">
                                    <div class="large-12 columns">
                                        <label>Comments:
                                            <textarea placeholder="Give us information about this place."></textarea>
                                        </label>
                                        <button id="submitComment" class="small round">Submit</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div
            class="fb-like"
            data-send="true"
            data-width="450"
            data-show-faces="true">
        </div>
    </div>
    <div id="mapContainer"></div>
    <script type="text/javascript" src="<?php echo site_url('js/vendor/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/map-scripts.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/vendor/jquery-ui.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/vendor/fastclick.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/vendor/modernizr.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/vendor/placeholder.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/foundation.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/foundation/foundation.orbit.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/scripts.js');?>"></script>
    <script type="text/javascript">
    <?php foreach ($points as $row) { ?>
        var position = { lat: <?php echo $row->lat; ?>, lng: <?php echo $row->lng; ?>};
        var policeIcon;
        <?php if($row->policepoint) {?>
            policeIcon = new H.map.Icon('<?php echo site_url("img/police.png")?>');
            marker.setIcon(policeIcon);
        <?php } ?>
        var marker = new H.map.Marker(position, {icon: policeIcon});
        map.addObject(marker);
        marker.addEventListener('tap', function(event){
            console.log('tap');
            window.location = "<?php echo site_url().'homepage/viewmap/'.$row->point_id; ?>";
        });
    <?php } ?>
    map.setZoom(15);
    map.setCenter({ lat: <?php echo $point[0]->lat; ?>, lng: <?php echo $point[0]->lng; ?> });

    $(document).ready(function(){
        $('#submitComment').on('click', function(e){
            console.log("<?php echo site_url().'homepage/'.'addComment/'.$point[0]->point_id.'/'; ?>" + $('textarea').val());
            window.location.href = "<?php echo site_url().'homepage/'.'addComment/'.$point[0]->point_id.'/'; ?>" + $('textarea').val();
            e.preventDefault();
        });

        $('#searchPlace').keyup(function(event){
            if(event.keyCode == 13){
                var geocodingParams = {
                    searchText: $(this).val()
                };

                //Define callback function to process geocoding response
                var onResult = function(result){
                    var locations = result.Response.View[0].Result, position, marker;
                    // add a marker for each location found
                    for(i = 0; i < locations.length; i++){
                        var xlat = locations[i].Location.DisplayPosition.Latitude, xlng = locations[i].Location.DisplayPosition.Longitude;
                        position = {
                            lat: xlat,
                            lng: xlng
                            };
                        var marker = new H.map.Marker(position);
                        map.addObject(marker);
                        map.setZoom(15);
                        map.setCenter({ lat : xlat, lng : xlng});
                        marker.addEventListener('tap', function(event){
                            $('#info').text("info here");
                        });
                    }
                };

                //Get instance of the geocoding service
                var geocoder = platform.getGeocodingService();

                //Call geocoder, callback if error
                geocoder.geocode(geocodingParams, onResult, function(e){ alert(e); });
            }
        });
    });
    </script>
</body>
</html>