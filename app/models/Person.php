<?php

class Person extends \Eloquent {
    protected $table = 'person';
    protected $fillable = [];

    public function getSerializedData() {
        return array(
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname
        );
    }
}