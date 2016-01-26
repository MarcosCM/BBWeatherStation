#!/bin/bash
#Measure temperature
echo $(date +%T | sed 's/\([0-9]*\):\([0-9]*\):.*/\1:\2:00/') $(cat /sys/bus/i2c/devices/i2c-1/1-0040/temp1_input) >> /www/pages/res/WC1/temperature.txt
tail -n 30 /www/pages/res/WC1/temperature.txt > /www/pages/res/WC1/temperature_tmp.txt; mv /www/pages/res/WC1/temperature_tmp.txt /www/pages/res/WC1/temperature.txt
#Measure pressure
echo $(date +%T | sed 's/\([0-9]*\):\([0-9]*\):.*/\1:\2:00/') $(cat /sys/bus/i2c/devices/i2c-1/1-0077/pressure_input) >> /www/pages/res/WC1/pressure.txt
tail -n 30 /www/pages/res/WC1/pressure.txt > /www/pages/res/WC1/pressure_tmp.txt; mv /www/pages/res/WC1/pressure_tmp.txt /www/pages/res/WC1/pressure.txt
#Measure humidity
echo $(date +%T | sed 's/\([0-9]*\):\([0-9]*\):.*/\1:\2:00/') $(cat /sys/bus/i2c/devices/i2c-1/1-0040/humidity1_input) >> /www/pages/res/WC1/humidity.txt
tail -n 30 /www/pages/res/WC1/humidity.txt > /www/pages/res/WC1/humidity_tmp.txt; mv /www/pages/res/WC1/humidity_tmp.txt /www/pages/res/WC1/humidity.txt