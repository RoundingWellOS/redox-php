<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Discharge\Patient;

use RoundingWell\Redox\AbstractMessage;
class Identifier extends AbstractMessage
{
    /**
     * @var string
     */
    public $ID;
    /**
     * @var string
     */
    public $IDType;
}