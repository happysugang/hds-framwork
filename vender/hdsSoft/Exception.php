<?php

namespace hds;


class Exception extends \Exception
{
    public function getName()
    {
        return 'Exception';
    }
}