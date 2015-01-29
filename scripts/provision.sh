#!/bin/bash

# simple vagrant provisioning script
# installs : apache2, php 5.4 and mysql-server and client
# installs : laravel in /vagrant shared folder

# some coloring in outputs.
COLOR="\033[;35m"
COLOR_RST="\033[0m"

echo -e "${COLOR}---updating system---${COLOR_RST}"
apt-get update

echo -e "${COLOR}---installing some tools: zip,unzip,curl, python-software-properties---${COLOR_RST}"

apt-get install -y software-properties-common
apt-get install -y python-software-properties
apt-get install -y zip unzip
apt-get install -y curl
apt-get install -y build-essential
apt-get install -y vim
apt-get install -y git
apt-get install -y htop

#tmux & node ppas
add-apt-repository -y ppa:pi-rho/dev

apt-get update
apt-get install -y tmux
apt-get install -y python g++ make

# installing mysql
# pre-loading a default password --> yourpassword
debconf-set-selections <<< "mysql-server mysql-server/root_password password 1234"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password 1234"
echo -e "${COLOR}---installing MySql---${COLOR_RST}"
apt-get install -y mysql-server mysql-client

# installing apache2
echo -e "${COLOR}---installing Apache---${COLOR_RST}"
apt-get install -y apache2
rm -rf /var/www
ln -fs /vagrant /var/www

# installing php 5.3
echo -e "${COLOR}---installing php 5.3---${COLOR_RST}"
apt-get install -y php5 libapache2-mod-php5 php5-mcrypt php5-curl php5-mysql php5-xdebug php5-gd

#setup the database
cd /vagrant
echo -e "${COLOR}---installing pencilem database---${COLOR_RST}"
mysql -u root -p1234 -e "create database wordpress;"

# setup xdebug uncomment below if you want to enable xdebug, requires a client
# on the host os to be listening for xdebug connections

#cat << EOF | sudo tee -a /etc/php5/conf.d/xdebug.ini
#xdebug.remote_enable = 1
#xdebug.remote_host = 127.0.0.1
#xdebug.remote_connect_back = 1
#xdebug.remote_port = 9000
#xdebug.profiler_enable = 1
#xdebug.profiler_output_dir = "<AMP home\tmp>"
#xdebug.idekey = PHPSTORM
#xdebug.remote_autostart = 1
#EOF

#mysql -u root -p1234 pencilem_v2 < scripts/sql/v2.sql

#make sure we can use local .htaccess
echo -e "${COLOR}---allow overrides for .htaccess---${COLOR_RST}"
sudo sed -i 's_www/html_www_' /etc/apache2/sites-available/default
sudo sed -i 's_</VirtualHost>_Include /vagrant/scripts/allow-override.conf\n</VirtualHost>_' /etc/apache2/sites-available/default
sudo sed -i 's_www-data_vagrant_' /etc/apache2/envvars
a2dissite default && a2ensite default


# enable mod rewrite for apache2
echo -e "${COLOR}---enabling rewrite module---${COLOR_RST}"
if [ ! -f /etc/apache2/mods-enabled/rewrite.load ] ; then
    a2enmod rewrite
fi

#deflat module for apache2
if [ ! -f /etc/apache2/mods-enabled/deflate.load ] ; then
    a2enmod deflate
fi

# restart apache2
echo -e "${COLOR}---restarting apache2---${COLOR_RST}"
sudo chown vagrant:vagrant /var/lock/apache2
service apache2 restart