<?php

namespace XMultibyte\Landing\Traits;

use DateTimeInterface;

trait HasDateTimeFormatter
{
    protected function serializeDate( DateTimeInterface $date )
    {
        return $date->format($this->getDateFormat());
    }
}
