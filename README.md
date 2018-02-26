<p align="center"><img src="https://raw.githubusercontent.com/NickTehPro/PHPhisher/master/logo.png" /></p>

## About
PHPhisher is a pack of phising pages with an automatic harvesting system.

PHPhisher works on any Linux Distribution (You have to install PHP5, mysql).

## How it works
The tool can be used on a Variety of possible attacks.
Examples:
On a Fake AC in order to gain Facebook or other type of credentials from the victim.
Can work as a Phising platform for a possible MITM attack.

## Installation 
Type the following commands:
```
Prepare OS:
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install apache2 php5 mysql-server mysql-client

Cloning & Editing the files:
git clone git://github.com/NickTehPro/phphisher PHPhisher 
mv PHPhisher/ /var/www/ 

Apache Setup:

cd ~
cd /etc/apache2/sites-enabled/
nano 000* //Change the location from /var/www/html/ to /var/www/PHPhisher/
service apache2 reload

Permissions:
chmod 777 /var/www/config.json
DONE!
```
After installing everything, edit the configuration file:
```
{
	"page": 0, // The number of the scenario you want to simulate.
	"email": "", //Use an email to send you the harvested credentials. (You need to install postfix for this)
	"page-redirect": "http://facebook.com/", //The page that your victim is going after the attack completes.
	"dbuser": "root", //Self explanatory 
	"dbpass": "phphisher", //Self explanatory 
	"dbname": "phphisher", //Self explanatory 
	"dbip": "localhost" //Self explanatory 
	"dbuse": "1" // 1 = DB 2= Email Still buggy af.
}
```
Open a web browser and navigate to http://<yourip>/. The PHPhisher will automatically guide you through the setup proccess.

After the attack completes point your browser at the admin panel to get the stolen credentials: 
Example: http://<yourip>/admin/

# Screenshot 
<p align="center"><img src="https://raw.githubusercontent.com/NickTehPro/PHPhisher/Dev/Demo.png" /></p>
## Requirements
* Linux Server with MySQL and Apache(or Nginx). 
* Your imagination.

## Credits
The pages and the project as a whole are mainly based on this project:
<a href="https://github.com/wifiphisher/wifiphisher">WifiPhisher</a>. 
More paged added from:
<a href="https://github.com/wifiphisher/extra-phishing-pages/"

DavidBouman contributed to the project! Give him love here <a href="https://github.com/davidbouman">here</a>.

Zarkopafilis made the logo and helped with testing. Give him love <a href="https://github.com/Zarkopafilis">here</a>. 

Buy me a coffee: 1JA3JRDv5WHG7f2vGiBEetVBJkwbK4Qp8

## License

PHPhisher is licensed under the MIT License. See the LICENSE.md for more information.

## Disclaimer
* Usage of PHPhisher for attacking infrastructures without prior mutual consistency can be considered as an illegal activity. 
It is the final user's responsibility to obey all applicable local, state and federal laws. 
The author assume no liability and are not responsible for any misuse or damage caused by this program.
*All pages included in this Software are licensed under their own license so keep that in mind if you edit or re-distrubute them.

## Project Status 
PHPhisher current version: 3.2