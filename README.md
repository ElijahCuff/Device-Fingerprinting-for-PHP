# Device Fingerprinting for PHP
JavaScript + PHP project to assist in Device Fingerprinting.



## Usage
* Place Hidden IFrame in HTML 
* Load Page to perform Fingerprinting in background
* Handle the data with Handler.php for logging etc..

## Installation
* Copy files to host  
* Edit Handler to manage to data
* Add the IFrame & Handler SRC link to your page.


## How does it work ?
* Your user opens the Website and loads the IFrame
* The Iframe builds Multiple Device Fingerprints
* The Iframe submits the loaded data to the Handler
* The Handler logs the data or uses it for identification
* The handler will be sent the data via POST consisting of 3 parameters,    
 CF = Canvas Fingerprint     
 BF = Browser Fingerprint    
 AF = UserAgent Fingerprint     
     
   
Example Response,    
`{    
     "Canvas Fingerprint": "1585552575",`   
    `"Browser Fingerprint": "d9de46aa60100957b387f6839f707a71ebe492c099b5842178d8949090601f98",`   
    `"Agent Fingerprint": "66c1c292285d728ed86b2cd1b69b059837da77d1f45f12cac799275ba54d610b" }`   

 



