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
            <?php
            foreach ($point as $row) {
                echo $row->address;
                echo '<br/>';
                echo '(';
                echo $row->lat;
                echo ',';
                echo $row->lng;
                echo ')';
                echo '<br/>';
                echo 'rating: '. $rating[0]->rate;
                echo '<br/>';
                echo 'Comments:<br/>';
                foreach ($comments as $comment) {
                    echo $comment->username;
                    echo '<br/>';
                    echo $comment->comment;
                    echo '<br/>';
                }
            }
            ?>
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
    <script type="text/javascript">
    <?php foreach ($points as $row) { ?>
        var position = { lat: <?php echo $row->lat; ?>, lng: <?php echo $row->lng; ?>};
        var marker = new H.map.Marker(position);
        <?php if($row->policepoint) {?>
            marker.setIcon
        <?}?>
        map.addObject(marker);
        marker.addEventListener('tap', function(event){
            console.log('tap');
            window.location = "<?php echo site_url().'homepage/viewmap/'.$row->point_id; ?>";
        });
    <?php } ?>
    map.setZoom(15);
    map.setCenter({ lat: <?php echo $point[0]->lat; ?>, lng: <?php echo $point[0]->lng; ?> });
    </script>
</body>
</html>