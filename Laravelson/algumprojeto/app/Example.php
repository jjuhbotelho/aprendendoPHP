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

  protected $collaborator;

  protected $foo;

  public function __construct(Collaborator $collaborator, $foo)
  {
    $this->collaborator = $collaborator;
    $this->foo = $foo;
  }
}
