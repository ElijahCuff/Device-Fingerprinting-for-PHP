<?php 

if (hasParam('cf'))
{
   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json;charset=UTF-8");
   header("HTTP/1.1 200 OK");
   http_response_code(200);

$cf = $_POST['cf'];
$bf = $_POST['bf'];
$af = $_POST['af'];

           echo json_encode(
        array("Canvas Fingerprint" => $cf,"Browser Fingerprint" => $bf,
              "Agent Fingerprint" => $af
    ), JSON_PRETTY_PRINT);
          exit();

}
else
{
 echo 'No Data Found';
}

function hasParam($param) 
{
   if (array_key_exists($param, $_REQUEST))
    {
       return array_key_exists($param, $_REQUEST);
    } 
}
?>