<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <title>Korepetycje Młody Albert</title>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/head.php"); ?>
  <script>var navNumber = 5;</script>
  <style>
    .format {
      padding-left: 10%;
    }
  </style>

</head>


<body>


  <div id="header-placeholder"><?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php"); ?></div>
  <div class="container" id="nav-placeholder" style="padding-top: 20px"><?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/nav.php"); ?></div>



  <div class="container" style="padding-top: 10px">
    <h2>Kontakt do nas</h2>
    <div class="row" style="padding-top: 20px">
      <div class="col-sm-4">

        <h4><i class="fas fa-map-marker-alt fa-fw"></i> Lokalizacja </h4>
        <p class="format">Tczew <br> 83-110 <br> Ul. Kubusia Puchatka 5/16</p>
        <h4><i class="fas fa-mobile-alt fa-fw"></i> Telefon </h4>
        <p class="format">+48 609 979 345</p>
        <h4><i class="fas fa-envelope-open-text fa-fw"></i> e-mail </h4>
        <p class="format">mlodyalbert.ma@gmail.com</p>


      </div>

      <div class="col-sm-8">
        <h4><i class="fas fa-map-marked-alt"></i> My na mapach</h4>
        <div style="border:4px solid #0061c0; border-radius: 3px;">
          <div id="Map" style="height:400px; width:100%"></div>
          <script src="OpenLayers.js"></script>
          <script>
            var lat = 54.09077;
            var lon = 18.76988;
            var zoom = 18;

            var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
            var toProjection = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
            var position = new OpenLayers.LonLat(lon, lat).transform(fromProjection, toProjection);

            map = new OpenLayers.Map("Map");
            var mapnik = new OpenLayers.Layer.OSM();
            map.addLayer(mapnik);

            var markers = new OpenLayers.Layer.Markers("Markers");
            map.addLayer(markers);
            markers.addMarker(new OpenLayers.Marker(position));

            map.setCenter(position, zoom);
          </script>
        </div>


      </div>




    </div>







  </div>




</body>

</html>