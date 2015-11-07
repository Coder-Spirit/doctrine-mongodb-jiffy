<?php


namespace Litipk\Jiffy\Doctrine\ODM\MongoDB;


use Litipk\Jiffy\UniversalTimestamp;
use Doctrine\ODM\MongoDB\Types\Type;


/**
 * Class UniversalTimestampType
 * @package Litipk\Jiffy\Doctrine\ODM\MongoDB
 */
class UniversalTimestampType extends Type
{
    /**
     * @param \MongoDate|\DateTimeInterface $mongoTimestamp
     * @return null|UniversalTimestamp
     */
    public function convertToPHPValue($mongoTimestamp)
    {
        return (null !== $mongoTimestamp) ? UniversalTimestamp::fromWhatever($mongoTimestamp) : null;
    }

    /**
     * @param UniversalTimestamp $timestamp
     * @return null|\MongoDate
     */
    public function convertToDatabaseValue($timestamp)
    {
        return (null !== $timestamp) ? $timestamp->asMongoDate() : null;
    }

    /**
     * @return string
     */
    public function closureToPHP()
    {
        return '$return = (null !== $value) ? \Litipk\Jiffy\UniversalTimestamp::fromWhatever($value) : null;';
    }

    /**
     * @return string
     */
    public function closureToMongo()
    {
        return '$return = (null !== $v) ? $v->asMongoDate() : null;';
    }
}
