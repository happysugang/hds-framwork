<?php

namespace hdsSoft;


class UnknownClassException extends \Exception
{
    public function getName()
    {
        return 'Unknown Class';
    }
}