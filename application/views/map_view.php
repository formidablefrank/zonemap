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