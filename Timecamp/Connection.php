<?php
namespace Timecamp;


use Timecamp\Api\Attendance;
use Timecamp\Api\AwayTime;
use Timecamp\Api\Clients;
use Timecamp\Api\ComputerActivities;
use Timecamp\Api\Invoices;
use Timecamp\Api\Tasks;
use Timecamp\Api\TimeEntries;
use Timecamp\Api\Timer;
use Timecamp\Api\Users;

/**
 * Class Connection
 * @package Timecamp
 */
class Connection
{

    /**
     * @var string
     */
    protected $base_url = 'https://www.timecamp.com/third_party/api/';
    /**
     * @var null
     */
    protected $api_token = null;

    /**
     * Connection constructor.
     * @param $api_token
     */
    public function __construct($api_token)
    {
        $this->api_token = $api_token;
    }

    /**
     * @return array
     */
    public function getAccessInfo() {
        return ['api_token' => $this->api_token,'base_url' => $this->base_url];
    }

    /**
     * @param array $options
     * @return Attendance
     */
    public function Attendance(array $options = array())
    {
        return new Attendance($this, $options);
    }

    /**
     * @param array $options
     * @return AwayTime
     */
    public function AwayTime(array $options = array())
    {
        return new AwayTime($this, $options);
    }

    /**
     * @param array $options
     * @return Clients
     */
    public function Clients(array $options = array())
    {
        return new Clients($this, $options);
    }

    /**
     * @param array $options
     * @return ComputerActivities
     */
    public function ComputerActivities(array $options = array())
    {
        return new ComputerActivities($this, $options);
    }

    /**
     * @param array $options
     * @return Invoices
     */
    public function Invoices(array $options = array())
    {
        return new Invoices($this, $options);
    }

    /**
     * @param array $options
     * @return Tasks
     */
    public function Tasks(array $options = array())
    {
        return new Tasks($this, $options);
    }

    /**
     * @param array $options
     * @return TimeEntries
     */
    public function TimeEntries(array $options = array())
    {
        return new TimeEntries($this, $options);
    }

    /**
     * @param array $options
     * @return Timer
     */
    public function Timer(array $options = array())
    {
        return new Timer($this, $options);
    }

    /**
     * @return Users
     */
    public function Users()
    {
        return new Users($this);
    }
}