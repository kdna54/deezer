<?php

  namespace App\Dto\Moods;

  class MoodsDefaultDto extends \Simplon\Abstracts\AbstractDto
  {
    protected function getObjects()
    {
      return array(

        'id' => array(
          'vo' => 'getId',
        ),

        'tag' => array(
          'vo' => 'getTag',
        ),

      );
    }

  }
