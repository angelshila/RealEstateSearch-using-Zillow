<?php

    header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
       $street_add= $_GET["SA"];
       $city=$_GET["City"];
       $state=$_GET["state"];
      
       $state1=urlencode($state);
       $url="http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz1b2l90uvdor_6o78e&address=".urlencode($street_add)."&citystatezip=".urlencode($city)."%2C+".$state1."&rentzestimate=true";
       $xml=simplexml_load_file($url);

    

$url1="http://www.zillow.com/app?chartDuration=1year&chartType=partner&height=300&page=webservice%2FGetChart&service=chart&showPercent=true&width=600&zpid=".$xml->response->results->result->zpid;
$url2="http://www.zillow.com/app?chartDuration=5years&chartType=partner&height=300&page=webservice%2FGetChart&service=chart&showPercent=true&width=600&zpid=".$xml->response->results->result->zpid;
$url3="http://www.zillow.com/app?chartDuration=10years&chartType=partner&height=300&page=webservice%2FGetChart&service=chart&showPercent=true&width=600&zpid=".$xml->response->results->result->zpid;



$header=$xml->response->results->result->address->street.", ".$xml->response->results->result->address->city.", ".$xml->response->results->result->address->state."-".$xml->response->results->result->address->zipcode;
        $code=(string)$xml->message->code;
        $homedetails=(string)$xml->response->results->result->links->homedetails;
        $lastsoldprice=(int)$xml->response->results->result->lastSoldPrice;
        $lastsolddate=date("d-M-Y",strtotime((string)$xml->response->results->result->lastSoldDate));
        $valuechange=(int)$xml->response->results->result->zestimate->valueChange;
         if($valuechange<0){
             $valuechange*=-1;
        }
        $lastupdated=date("d-M-Y",strtotime((string)$xml->response->results->result->zestimate->{'last-updated'}));
        $amount=(int)$xml->response->results->result->zestimate->amount;
        $valuationrangelow=(int)$xml->response->results->result->zestimate->valuationRange->low;
        $valuationrangehigh=(int)$xml->response->results->result->zestimate->valuationRange->high;
        $lastupdated2=date("d-M-Y",strtotime((string)$xml->response->results->result->rentzestimate->{'last-updated'}));
        $amount2=(int)$xml->response->results->result->rentzestimate->amount;
        $valuechange2=(int)$xml->response->results->result->rentzestimate->valueChange;
         if($valuechange2<0){
             $valuechange2*=-1;
        }
        $taxassessment=(int)$xml->response->results->result->taxAssessment;
        $valuationrangelow2=(int)$xml->response->results->result->rentzestimate->valuationRange->low;
        $valuationrangehigh2=(int)$xml->response->results->result->rentzestimate->valuationRange->high;
        $finishedsqft=(int)$xml->response->results->result->finishedSqFt;
        $lotsize=(int)$xml->response->results->result->lotSizeSqFt;
        $imguparrow="http://cs-server.usc.edu:45678/hw/hw6/up_g.gif";
        $imgdownarrow="http://cs-server.usc.edu:45678/hw/hw6/down_r.gif";
        
       if($xml->response->results->result->zestimate->valueChange<0)
           $valuechangesign="-";
        else if($xml->response->results->result->zestimate->valueChange==0)
           $valuechangesign="";
        else if($xml->response->results->result->zestimate->valueChange=="")
           $valuechangesign="";
        else
            $valuechangesign="+";
        
        
        if($xml->response->results->result->rentzestimate->valueChange<0)
           $valuechangesign2="-";
        else if($xml->response->results->result->rentzestimate->valueChange==0)
           $valuechangesign2="";
        else if($xml->response->results->result->rentzestimate->valueChange=="")
           $valuechangesign2="";
        else
            $valuechangesign2="+";
    

$resultarr=array("code"=>$code,"homedetails"=>$homedetails,"street"=>(string)$xml->response->results->result->address->street,"city"=>(string)$xml->response->results->result->address->city,"state"=>(string)$xml->response->results->result->address->state,"zipcode"=>(string)$xml->response->results->result->address->zipcode,"latitude"=>(string)$xml->response->results->result->address->latitude,"longitude"=>(string)$xml->response->results->result->address->longitude,"useCode"=>(string)$xml->response->results->result->useCode,"lastSoldPrice"=>number_format($lastsoldprice,2),"yearBuilt"=>(string)$xml->response->results->result->yearBuilt,"lastSoldDate"=>$lastsolddate,"lotSizeSqFt"=>number_format($lotsize),"estimateLastUpdate"=>$lastupdated,"estimateAmount"=>number_format($amount,2),"finishedSqFt"=>number_format($finishedsqft),"estimateValueChangeSign"=>$valuechangesign,"imgn"=>$imgdownarrow,"imgp"=>$imguparrow,"estimateValueChange"=>number_format($valuechange,2),"bathrooms"=>(string)$xml->response->results->result->bathrooms,"estimateValuationRangeLow"=>number_format($valuationrangelow,2),"estimateValuationRangeHigh"=>number_format($valuationrangehigh,2),"bedrooms"=>(string)$xml->response->results->result->bedrooms,"restimateLastUpdate"=>$lastupdated2,"restimateAmount"=>number_format($amount2,2),"taxAssessmentYear"=>(string)$xml->response->results->result->taxAssessmentYear,"restimateValueChangeSign"=>$valuechangesign2,"restimateValueChange"=>number_format($valuechange2,2),"taxAssessment"=>number_format($taxassessment,2),"restimateValuationRangeLow"=>number_format($valuationrangelow2,2),"restimateValuationRangeHigh"=>number_format($valuationrangehigh2,2));
$oney=array("url"=>$url1);
$fivey=array("url"=>$url2);
$teny=array("url"=>$url3);
$chartarr=array("1year"=>$oney,"5years"=>$fivey,"10years"=>$teny);

$arr=array("result"=>$resultarr,"chart"=>$chartarr);

echo json_encode($arr);

?>

