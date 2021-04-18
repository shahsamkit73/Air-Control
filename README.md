# Air-Control

Contaminated outdoor air quality is ubiquitously found in larger cities and is owing to growing industrialization that pollutes the air people breathe with pollutants like industrial dust, smog and other hazardous particles from traffic. The solution from a user perspective, is to install an air purifier system at places where most of the air pollution is produced that cleans the air from perilous air waste equipped with air quality sensing mechanism and allergens control substance. In addition, data from the sensor is uploaded to cloud for the purpose to observe and purification is done once the air quality index exaggerates the threshold which results in lessens down the environmental pollution as well as respiratory system infection.

### Dependencies ###
* #### ESP8266 NodeMCU module
* #### MQ-5 Gas Sensor
* #### Servo Motor SG-90

### Libraries ###
* #### [ESP8266HTTPClient](https://github.com/esp8266/Arduino/tree/master/libraries/ESP8266HTTPClient) 
* #### [ESP8266WiFi](https://github.com/esp8266/Arduino/tree/master/libraries/ESP8266WiFi)
* #### [Servo](https://github.com/arduino-libraries/Servo)

### How to install ESP32 in Arduino IDE :
1. In arduino IDE, go to **File > Preference**
2. Enter **http://arduino.esp8266.com/stable/package_esp8266com_index.json** into the **_Additional Board Manager URLs_** and click **OK**
3. Go to **Tools > Board > Boards Manager** and open Boards Manager
4. Search for **ESP8266** and press install for the **_esp8266 by ESP8266 community_**
5. To verify whether the esp8266 board has been successfully installed, go to **Tools > Board** and select **_Generic ESP8266 Module_**

### Circuit Connection ###

<p align="center">
  <img width="600" height="500" src="https://user-images.githubusercontent.com/43854300/115136943-c053ca80-a040-11eb-9d32-26f75beda5aa.PNG"
</p>


![air-control](https://user-images.githubusercontent.com/43854300/57903901-fa812400-788d-11e9-8b1f-ead5e791ea8c.gif)
