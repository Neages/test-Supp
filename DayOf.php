<?php

class DayOf
{
  public function __construct($arr, $allNames)
  {
    $this->arr = $arr;
    $this->allNames = $allNames;
  }
  public $firstPlaceArr;
  public $secondPlaceArr;
  public $thirdPlaceArr;
  public $arr;
  public $flag;
  public function initFirst()
  {
    foreach ($this->arr as $key) {
      if($this->firstPlaceArr['hours'] < $key['hours']){
        $this->firstPlaceArr['employee_id'] = $key['employee_id'];
        $this->firstPlaceArr['hours'] = $key['hours'];
      }
    }
    for ($i=0; $i < count($this->arr); $i++) { 
      if($this->arr[$i]['employee_id'] == $this->firstPlaceArr['employee_id']){
        unset($this->arr[$i]);
        $this->arr = array_values($this->arr);
      }
    }
  }
  public function initSecond()
  {
    if($this->arr){
      foreach ($this->arr as $key) {
        if($this->secondPlaceArr['hours'] < $key['hours']){
          $this->secondPlaceArr['employee_id'] = $key['employee_id'];
          $this->secondPlaceArr['hours'] = $key['hours'];
        }
      }
      for ($i=0; $i < count($this->arr); $i++) { 
        if($this->arr[$i]['employee_id'] == $this->secondPlaceArr['employee_id']){
          unset($this->arr[$i]);
          $this->arr = array_values($this->arr);
        }
      }
      
    }else{
      $this->secondPlaceArr = 'Nobody  :(';
    }
  }

  public function initThird()
  {
    if($this->arr){
      foreach ($this->arr as $key) {
        if($this->thirdPlaceArr['hours'] < $key['hours']){
          $this->thirdPlaceArr['employee_id'] = $key['employee_id'];
          $this->thirdPlaceArr['hours'] = $key['hours'];
        }
      }
      for ($i=0; $i < count($this->arr); $i++) { 
        if($this->arr[$i]['employee_id'] == $this->thirdPlaceArr['employee_id']){
          unset($this->arr[$i]);
        }
      }
    }else{
      $this->thirdPlaceArr = 'Nobody  :(';
    }
  }
  public function initName()
  {
    for ($i=0; $i < count($this->allNames); $i++) { 
      if(gettype($this->firstPlaceArr) ==='array' AND $this->allNames[$i]['id'] == $this->firstPlaceArr['employee_id']){
        $this->firstPlaceArr['name'] = $this->allNames[$i]['name'];
      } elseif (gettype($this->secondPlaceArr) === 'array' && $this->allNames[$i]['id'] == $this->secondPlaceArr['employee_id']) {
        $this->secondPlaceArr['name'] = $this->allNames[$i]['name'];
      }elseif (gettype($this->thirdPlaceArr) === 'array' && ($this->allNames[$i]['id'] == $this->thirdPlaceArr['employee_id'])) {
        $this->thirdPlaceArr['name'] = $this->allNames[$i]['name'];
        
      }
    }
  }
}
