<?php

namespace App;

enum TechnologyEnum : string
{
    case FRONTEND = 'F';
    case BACKEND = 'B';

    public function label() : string
    {
        return match($this) {
            self::FRONTEND => 'Frontend',
            self::BACKEND => 'Backend',
        };
    }
}
