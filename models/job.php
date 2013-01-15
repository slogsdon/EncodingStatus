<?php

class Job extends Model {
    public static $_table = 'jobs';

    public function __construct() {}
    public function Job() {return $this->__construct();}

    public function profile() {
    	return $this->has_one('Profile');
    }
    public function collection() {
    	return $this->has_one('Collection');
    }
    public static function completed($orm) {
    	return $orm->where_not_null('finished_at');
    }
    public static function not_completed($orm) {
    	return $orm->where_null('finished_at');
    }
}