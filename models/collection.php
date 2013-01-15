<?php

class Collection extends Model {
    public static $_table = 'jobs';

    public function __construct() {}
    public function Collection() {return $this->__construct();}

    public function profiles() {
    	return $this->has_many('Profile');
    }
    public function jobs() {
    	return $this->belongs_to('Job');
    }
}