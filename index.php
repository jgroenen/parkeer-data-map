<?php
    // clone host with c9.io
    $parkingDataUri = "http://www.trafficlink-online.nl/trafficlinkdata/wegdata/IDPA_ParkingLocation.GeoJSON";
    $parkingData = file_get_contents($parkingDataUri);
    header("content-type: application/json");
    header("Access-Control-Allow-Origin: *");
    echo $parkingData;
?>
