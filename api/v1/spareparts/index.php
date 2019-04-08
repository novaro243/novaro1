<?php
@$sparepart1->id=5343;
$sparepart1->title = "2Oli Lupromax";
$sparepart1->price = "50000";
$sparepart1->location = "Jakarta";

@$sparepart2->id=5344;
$sparepart2->title = "Wiper Avanza";
$sparepart2->price = "24000";
$sparepart2->location = "Yogyakarta";

@$sparepart3->id=5345;
$sparepart3->title = "Compressor AC";
$sparepart3->price = "3000000";
$sparepart3->location = "Yogyakarta";

$spareparts = array($sparepart1,$sparepart2,$sparepart3);

$sparepartsObject = json_encode($spareparts);

if(@$_GET["id"]){
    $requestedSparepartsId = $_GET["id"];
    for($i=0;$i<count($spareparts);$i++){
        if($spareparts[$i]->id==$requestedSparepartsId){
            $sparepartsObject = json_encode($spareparts[$i]);
            echo $sparepartsObject;
        }
    }
}else if(@$_POST["title"]
    && $_POST["gear"]
    && $_POST["price"]
    && $_POST["location"] ){
        $newSparepart->id = rand(1230,9999);
        $newSparepart->title = $_POST["title"];
        $newSparepart->gear = $_POST["gear"];
        $newSparepart->price = $_POST["price"];
        $newSparepart->location = $_POST["location"];
        array_push($spareparts,$newSparepart);
        $sparepartsObject = json_encode($spareparts);
        echo $sparepartsObject;
}else{
    echo $sparepartsObject;
}
?>
