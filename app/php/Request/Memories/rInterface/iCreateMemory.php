<?php

  namespace App\Request\Memories\rInterface;

  interface iCreateMemory extends \Simplon\Abstracts\iAbstractRequest
  {
    public function getTrackId();
    public function getUserId();
    public function getMoodTag();
    public function getMemory();
  }