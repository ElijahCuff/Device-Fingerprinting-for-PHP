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
- CF = Canvas Fingerprint
- BF = Browser Fingerprint
- AF = UserAgent Fingerprint
 



