<?php


namespace Litipk\Jiffy\Doctrine\ODM\MongoDB;


use Doctrine\ODM\MongoDB\Mapping\Annotations\AbstractField;


/**
 * @Annotation
 */
class UniversalTimestampField extends AbstractField
{
    public $type = 'UniversalTimestamp';
}
