<?php

namespace App\Services;

class CheckFormService
{
  public static function checkGender($data){

    if($data->gender === 0 ){
      $gender = '男性';
  } else{
      $gender = '女性';
  }
  return $gender;
  }

  public static function checkAge($data){

    if($data->age === 1){ $age = '~19';}
        if($data->age === 2){ $age = '20~29';}
        if($data->age === 3){ $age = '30~39';}
        if($data->age === 4){ $age = '40~49';}
        if($data->age === 5){ $age = '50~59';}
        if($data->age === 6){ $age = '60~';}

        return $age;
  }
}