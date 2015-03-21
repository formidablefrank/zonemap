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
    <div class="row" style="position:absolute; z-index:9; margin:10px 10px">
        <div class="small-3">
            <input id="searchPlace" type="text" placeholder="Search place" style=" border: 3px gray solid" />
            <br/>
            <div id="info">
                <div id="placeTitleRow" class="row">
                    <h1><strong>Makati City</strong></h1>
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

                </div>
                <div id="criteriaRow" class="row">
                <ul>
                    <li><img src="<?php echo site_url('img/theft3.png')?>" style="height: 30px; width 30px; "/></li>
                    <li><img src="<?php echo site_url('img/harass.png')?>" style="height: 30px; width 30px; "/></li>
                    <li><img src="<?php echo site_url('img/no_light.png')?>" style="height: 30px; width 30px; "/></li>
                    <li><img src="<?php echo site_url('img/kidnap.png')?>" style="height: 30px; width 30px; "/></li>
                    <li><img src="<?php echo site_url('img/abuse.png')?>" style="height: 30px; width 30px; "/></li>
                </ul>
                </div>
                <hr />
                <div id="reviewRow" class="row">
                    <h3><strong>Reviews</strong></h3>
                    <strong>user_1</strong> says...
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <strong>user_2</strong> says...
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <strong>user_3</strong> says...
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                                <a href="#" class="button round">1</a>
                                <a href="#" class="button round">2</a>
                                <a href="#" class="button round">3</a>
                                <a href="#" class="button round">4</a>
                                <a href="#" class="button round">5</a>
                            </div>
                            <div id="checklistRow" class="row">
                                <div class="large-12 columns">
                                    <label>Incidents:</label>
                                    <input id="box1" type="checkbox"><label for="box1">Theft</label>
                                    <input id="box2" type="checkbox"><label for="box1">Kidnapping</label>
                                    <input id="box3" type="checkbox"><label for="box1">Harassment</label>
                                    <input id="box4" type="checkbox"><label for="box1">Lack of streetlights</label>
                                    <input id="box5" type="checkbox"><label for="box1">Abuse (home, work)</label>
                                </div>
                            </div>
                            <div id="commentRow" class="row">
                                <div class="large-12 columns">
                                    <label>Comments:
                                        <textarea placeholder="Give us information about this place."></textarea>
                                    </label>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
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
</body>
</html>