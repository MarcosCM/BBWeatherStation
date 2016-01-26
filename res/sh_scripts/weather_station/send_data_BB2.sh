#!/bin/bash
#Measure temperature
ssh root@10.3.16.241 "echo $(date +%T | sed 's/\([0-9]*\):\([0-9]*\):.*/\1:\2:00/') $(cat /sys/bus/i2c/devices/i2c-1/1-0040/temp1_input) >> /www/pages/res/WC2/temperature.txt"
ssh root@10.3.16.241 'tail -n 30 /www/pages/res/WC2/temperature.txt > /www/pages/res/WC2/temperature_tmp.txt; mv /www/pages/res/WC2/temperature_tmp.txt /www/pages/res/WC2/temperature.txt'
#Measure pressure
ssh root@10.3.16.241 "echo $(date +%T | sed 's/\([0-9]*\):\([0-9]*\):.*/\1:\2:00/') $(cat /sys/bus/i2c/devices/i2c-1/1-0077/pressure_input) >> /www/pages/res/WC2/pressure.txt"
ssh root@10.3.16.241 'tail -n 30 /www/pages/res/WC2/pressure.txt > /www/pages/res/WC2/pressure_tmp.txt; mv /www/pages/res/WC2/pressure_tmp.txt /www/pages/res/WC2/pressure.txt'
#Measure humidity
ssh root@10.3.16.241 "echo $(date +%T | sed 's/\([0-9]*\):\([0-9]*\):.*/\1:\2:00/') $(cat /sys/bus/i2c/devices/i2c-1/1-0040/humidity1_input) >> /www/pages/res/WC2/humidity.txt"
ssh root@10.3.16.241 'tail -n 30 /www/pages/res/WC2/humidity.txt > /www/pages/res/WC2/humidity_tmp.txt; mv /www/pages/res/WC2/humidity_tmp.txt /www/pages/res/WC2/humidity.txt'