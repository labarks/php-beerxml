<?php


namespace BeerXML\Record;


class MashStep
{

    const TYPE_INFUSION    = 'Infusion';
    const TYPE_TEMPERATURE = 'Temperature';
    const TYPE_DECOCTION   = 'Decoction';

    /**
     * Name of the mash step – usually descriptive text such as "Dough In” or "Conversion”
     * @var string
     */
    private $name;

    /**
     * Version of the mash step record.  Should always be "1” for this version of the XML standard.
     * @var int
     */
    private $version = 1;

    /**
     * May be "Infusion”, "Temperature” or "Decoction” depending on the type of step.  Infusion denotes adding hot water,
     * Temperature denotes heating with an outside heat source, and decoction denotes drawing off some mash for boiling.
     * @var string
     */
    private $type;

    /**
     * The volume of water in liters to infuse in this step.  Required only for infusion steps, though one may also add
     * water for temperature mash steps.  One should not have an infusion amount for decoction steps.
     * @var number
     */
    private $infuseAmount;

    /**
     * The target temperature for this step in degrees Celsius.
     * @var number
     */
    private $stepTemp;

    /**
     * The number of minutes to spend at this step – i.e. the amount of time we are to hold this particular step
     * temperature.
     * @var number
     */
    private $stepTime;

    /**
     * Time in minutes to achieve the desired step temperature – useful particularly for temperature mashes where it may
     * take some time to achieve the step temperature.
     * @var number
     */
    private $rampTime;

    /**
     * the temperature you can expect the mash to fall to after a long mash step.  Measured in degrees Celsius.
     * @var number
     */
    private $endTemp;

    /**
     * @param number $endTemp
     */
    public function setEndTemp($endTemp)
    {
        $this->endTemp = $endTemp;
    }

    /**
     * @return number
     */
    public function getEndTemp()
    {
        return $this->endTemp;
    }

    /**
     * @param number $infuseAmount
     */
    public function setInfuseAmount($infuseAmount)
    {
        $this->infuseAmount = $infuseAmount;
    }

    /**
     * @return number
     */
    public function getInfuseAmount()
    {
        return $this->infuseAmount;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param number $rampTime
     */
    public function setRampTime($rampTime)
    {
        $this->rampTime = $rampTime;
    }

    /**
     * @return number
     */
    public function getRampTime()
    {
        return $this->rampTime;
    }

    /**
     * @param number $stepTemp
     */
    public function setStepTemp($stepTemp)
    {
        $this->stepTemp = $stepTemp;
    }

    /**
     * @return number
     */
    public function getStepTemp()
    {
        return $this->stepTemp;
    }

    /**
     * @param number $stepTime
     */
    public function setStepTime($stepTime)
    {
        $this->stepTime = $stepTime;
    }

    /**
     * @return number
     */
    public function getStepTime()
    {
        return $this->stepTime;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }


}