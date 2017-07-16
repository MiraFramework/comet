<?php

namespace Mira;

class Comet
{
    public function __construct($helpee)
    {
        $this->helpee = $helpee;
    }

    public function date()
    {
        $date = new \DateTime($this->helpee);
        return $result = " ".$date->format('F d, Y');
    }

    public function title()
    {
        return ucwords($this->helpee);
    }

    public function excerpt()
    {
        preg_match("/(?:\w+(?:\W+|$)){0,20}/", $this->helpee, $matches);
        return $matches[0];
    }
}
