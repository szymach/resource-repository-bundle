<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Bundle\ResourceRepositoryBundle\Model;

use DateTimeImmutable;
use DateTimeInterface;

class Resource implements ResourceValue
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $textValue;

    /**
     * @var DateTimeInterface
     */
    protected $datetimeValue;

    /**
     * @var DateTimeInterface
     */
    protected $dateValue;

    /**
     * @var DateTimeInterface
     */
    protected $timeValue;

    /**
     * @var int
     */
    protected $numberValue;

    /**
     * @var int
     */
    protected $integerValue;

    /**
     * @var bool
     */
    protected $boolValue;

    public function __construct()
    {
        $this->boolValue = false;
    }

    /**
     * {@inheritdoc}
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function setTextValue($textValue)
    {
        $this->textValue = $textValue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTextValue()
    {
        return $this->textValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setDateValue($dateValue)
    {
        $this->dateValue = $dateValue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDateValue()
    {
        return $this->convertDateToImmutable($this->dateValue);
    }

    /**
     * {@inheritdoc}
     */
    public function setDatetimeValue($datetimeValue)
    {
        $this->datetimeValue = $datetimeValue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDatetimeValue()
    {
        return $this->convertDateToImmutable($this->datetimeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function setTimeValue($timeValue)
    {
        $this->timeValue = $timeValue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTimeValue()
    {
        return $this->convertDateToImmutable($this->timeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function setNumberValue($numberValue)
    {
        $this->numberValue = $numberValue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNumberValue()
    {
        return $this->numberValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setIntegerValue($integerValue)
    {
        $this->integerValue = $integerValue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getIntegerValue()
    {
        return $this->integerValue;
    }

    /**
     * {@inheritdoc}
     */
    public function setBoolValue($boolValue)
    {
        $this->boolValue = $boolValue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBoolValue()
    {
        return $this->boolValue;
    }

    /**
     * @param DateTimeInterface $value
     * @return DateTimeImmutable
     */
    private function convertDateToImmutable(DateTimeInterface $value)
    {
        return new DateTimeImmutable($value->getTimestamp(), $value->getTimezone());
    }
}
