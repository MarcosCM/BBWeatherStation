# BBWeatherStation
BeagleBone (BB) Web Server offering weather measures taken from Weather Capes of other BeagleBones.
This is a simple project to use data measured by the Weather Cape over the BB.

# Project
Project developed by:
* [Marcos Canales Mayo](https://github.com/MarcosCM)
* [Carlos Escuín Blasco](https://github.com/xarlieskin)

# Hardware
* BB White Rev A6a
* Weather Cape
 
# Software
* Web server lighttpd
* PHP5 with PHP-CGI

# Weather data collection
Data collected reading inputs under /sys/bus/i2c/devices/i2c-1/ folder:
* Temperature (ºC)
* Pressure (bar)
* Humidity (%)

Periodically (using cron or a background service), every BB reads its parameters and sends them to the main BB in order to be stored there.

# Current version
* BB2 periodically measures the weather params (temperature, pressure and humidity) and sends them to BB1
* BB1 periodically measures the weather params and stores them. This BB also runs a web server to show collected data among every BB.
