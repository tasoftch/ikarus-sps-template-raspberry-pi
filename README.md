# Ikarus SPS Template (on a Raspberry Pi)
This template contains all required packages and several examples to create a SPS on a Raspberry Pi

### Installation
```bin
$ composer create-project ikarus/sps-template-raspberry-pi ./my-sps-project
```

### Run the SPS
Probably you will need to perform the SPS with admin privileges to access the GPIO headers.
```bin
$ sudo php ./ikarus.php
```
or add the following lines to the file: /etc/rc.local
````bin
cd /home/pi/my-sps-project
sudo php ikarus.php &
````