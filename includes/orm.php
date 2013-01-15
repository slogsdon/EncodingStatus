<?php

ORM::configure('mysql:host=localhost;dbname=encodingstatus');
ORM::configure('username', getenv('MYSQL_USR'));
ORM::configure('password', getenv('MYSQL_PWD'));
ORM::configure('logging', false);

foreach (glob("./models/*.php") as $filename)
{
    include $filename;
}