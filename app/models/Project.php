<?php

class Project extends Eloquent
  {
  
  public function company() {
    return $this->hasOne('company');
  }
}