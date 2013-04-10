Curriculum
==========

Welcome to Curriculum- a application that you can use to create, share and print your resume in HTML-format.

This document contains information on how to download, install, and start
using Curriculum. 

Installing Curriculum
------------------------

As Curriculum uses [Composer][1] to manage its dependencies, the recommended way
to install the project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command where you want the project to be installed (ex: /Sites):

    curl -s http://getcomposer.org/installer | php

Then, use the following command to create your local copy of parameters.yml:

    cp app/config/parameter.yml.dist app/config/parameter.yml

Composer will install Curriculum and all its dependencies (including /bin/phpunit) under your current directory by using the command:

    php composer.phar install --dev

Now you can access the homepage of Curriculum project under /Curriculum/web (production mode) or curriculum/web/app_dev.php (developer mode) and also run the unit test using:

    ./bin/phpunit -c app/ 

> **Hint** : you can create an alias for phpunit so you don't have to type **bin/phpunit** each time :

    ## ~/.bash_profile
    alias phpunit="bin/phpunit"

Enjoy!

[1]:  http://getcomposer.org/
