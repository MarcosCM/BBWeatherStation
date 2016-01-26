#!/bin/bash
$(ifconfig eth0 up 10.3.16.242 netmask 255.255.255.0 broadcast 10.3.16.255)
$(route add -net 10.3.16.0 netmask 255.255.255.0 dev eth0)
$(route add default gw 10.3.16.254)
echo "nameserver 8.8.8.8" > /etc/resolv.conf
echo BB-BONE-WTHR-01 > /sys/devices/bone_capemgr.7/slots