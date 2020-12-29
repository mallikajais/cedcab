<?php

$pickup=$_POST['pickup'];
$drop=$_POST['drop'];
$cabtype=$_POST['cabtype'];
$weight=$_POST['weight'];
// echo "Pickup : ".$pickup;
// echo ", Destination : ".$drop;

$distance=array(
    "Charbagh" => 0,
    "Indira Nagar" => 10,
    "BBD"=> 30,
    "Barabanki"=> 60,
    "Faizabad" => 100,
    "Basti"=> 150,
    "Gorakhpur"=> 210
);

if($pickup=="Charbagh"){
    $distance=$distance[$drop];
    echo "  Distance : ".$distance;
}
else{
    $distance=$distance[$drop]-$distance[$pickup];
    echo "  Distance : ".$distance;
}

class fare{
    function totalfare($cabtype,$weight){
        global $fixedfare,$fare,$distance,$totalfare;
//cedmicro
        if($cabtype=='CedMicro'){
            $fixedfare=50;
            if($distance<=10){
                $fare=$fixedfare+13.50*$distance;
                echo " , Fare without luggage : ". $fare;
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+135+($distance-10)*12.00;
                echo " , Fare without luggage : ".$fare;
            }
            elseif($distance>50 && $distance<=100){
                $fare=($fixedfare+135+600+($distance-60)*10.20);
                echo " , Fare without luggage : ".$fare;
            }
            elseif($distance >100){
                $fare=($fixedfare+135+600+10.20*100+($distance-160)*8.50);
                echo " , Fare without luggage : ".$fare;
            }
        }
        //cedmini
        elseif($cabtype=='CedMini'){
            $fixedfare=150;
            if($distance<=10){
                $fare=$fixedfare+14.50*$distance;
                echo " , Fare : ".$fare;
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+135+($distance-10)*13.00;
                echo " , Fare : ".$fare;
            }
            elseif($distance>50 && $distance<=100){
                $fare=($fixedfare+135+600+($distance-60)*11.20);
                echo " , Fare : ".$fare;
            }
            elseif($distance >100){
                $fare=($fixedfare+135+600+10.20*100+($distance-160)*9.50);
                echo " , Fare : ".$fare;
            }
        }
        //cedroyal
        elseif($cabtype=='CedRoyal'){
            $fixedfare=200;
            if($distance<=10){
                $fare=$fixedfare+15.50*$distance;
                echo " , Fare : ".$fare;
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+135+($distance-10)*14.00;
                echo " , Fare : ".$fare;
            }
            elseif($distance>50 && $distance<=100){
                $fare=$fixedfare+135+600+($distance-60)*12.20;
                echo " , Fare : ".$fare;
            }
            elseif($distance >100){
                $fare=$fixedfare+135+600+10.20*100+($distance-160)*10.50;
                echo " , Fare : ".$fare;
            }
        }
        else{
            $fixedfare=250;
            if($distance<=10){
                $fare=$fixedfare+16.50*$distance;
                echo " , Fare : ".$fare;
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+135+($distance-10)*15.00;
                echo " , Fare : ".$fare;
            }
            elseif($distance>50 && $distance<=100){
                $fare=$fixedfare+135+600+($distance-60)*13.20;
                echo " , Fare : ".$fare;
            }
            elseif($distance >100){
                $fare=$fixedfare+135+600+10.20*100+($distance-160)*11.50;
                echo " , Fare : ".$fare;
            }
        }
        if($cabtype=='CedMicro'){
            
            echo "";
        }
        
        elseif($cabtype==('CedMini' || 'CedRoyal')){
            if($weight<=10){
                $totalfare=$fare+50;
                echo "  , Fare with luggage : ".$totalfare;
            }
            elseif($weight>10 && $weight<=20){
                $totalfare=$fare+100;
                echo "  , Fare with luggage : ".$totalfare;
            }
            else{
                $totalfare=$fare+200;
                echo "  , Fare with luggage: ".$totalfare;
            }
        }
        elseif($cabtype=='CedSUV'){
            if($weight<=10){
                $totalfare=$fare+(2*50);
                echo "  , Fare with luggage : ".$totalfare;
            }
            elseif($weight>10 && $weight<=20){
                $totalfare=$fare+(2*100);
                echo "  , Fare with luggage : ". $totalfare;
            }
            else{
                $totalfare=$fare+(2*200);
                echo  "  , Fare with luggage : ".$totalfare;
            }
        }
    }
}
$obj=new fare;
$obj->totalfare($cabtype,$weight);


?>