# itop-fontawesome5-pack
Extension for iTop: Use new icon sets for both portal &amp; console.

# iTop extension: molkobain-fontawesome5-pack

### Description
Use [Font Awesome 5](https://fontawesome.com/) new icon sets in both portal & console.

![Description decoration](https://raw.githubusercontent.com/Molkobain/itop-fontawesome5-pack/master/docs/mfp-icon-examples.PNG)

### Compatibility
Compatible with iTop 2.4+

### Installation
* Unzip the extension
* Copy the ``dist/molkobain-fontawesome5-pack`` folder under ``<PATH_TO_ITOP>/extensions`` folder of your iTop
* Run iTop setup & select extension *Portal: Service catalog as mosaic by default*

*Your folders should look like this*

![Extensions folder](https://raw.githubusercontent.com/Molkobain/itop-fontawesome5-pack/master/docs/mfp-install.PNG)

### Configuration
#### Portal: Change a brick's icon
Let's say that for example you would like to change the *New request* icon with [this one](https://fontawesome.com/icons/book-open?style=solid). Just alter the portal XML to change the ``/itop_design/module_designs/module_design[@id="<PORTAL_ID>"]/bricks/brick[@id="services"]/decoration_class/default`` tag value with *fas fa-book-open fa-2x*

![Before](https://raw.githubusercontent.com/Molkobain/itop-fontawesome5-pack/master/docs/mfp-example-01-01.PNG)
![After](https://raw.githubusercontent.com/Molkobain/itop-fontawesome5-pack/master/docs/mfp-example-01-02.PNG)

Run iTop setup and your portal home page should look like this!

![Extensions folder](https://raw.githubusercontent.com/Molkobain/itop-fontawesome5-pack/master/docs/mfp-example-01-03.PNG)

### Licensing
This extension is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).
