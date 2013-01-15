<?php

class Profile extends Model {
    public static $_table = 'profiles';

    public function __construct() {}
    public function Profile() {return $this->__construct();}

    public function jobs() {
    	return $this->belongs_to('Job');
    }
    public function collections() {
    	return $this->belongs_to('Collection');
    }
}