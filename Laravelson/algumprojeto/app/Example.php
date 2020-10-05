<?php

namespace App;

class Example
{
  /*
  |--------------------------------------------------------------------------
  | Exemplificação de Container sem implementação muito real
  |--------------------------------------------------------------------------
  |public function go()
  |{
  | dump('it works!');
  } */

    public function __construct($apiKey)
  {
    $this->apiKey = $apiKey;
  }

  public function handle()
  {
    die('it works');
  }


}
