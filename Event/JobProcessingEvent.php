<?php

namespace SfCod\QueueBundle\Event;

use SfCod\QueueBundle\JobContract\JobContractInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class JobProcessingEvent
 * Event before job starts
 *
 * @author Virchenko Maksim <muslim1992@gmail.com>
 *
 * @package SfCod\QueueBundle\Events
 */
class JobProcessingEvent extends Event
{
    /**
     * The connection name.
     *
     * @var string
     */
    protected $connectionName;

    /**
     * The job instance.
     *
     * @var JobContractInterface
     */
    protected $job;

    /**
     * Create a new event instance.
     *
     * @param string $connectionName
     * @param JobContractInterface $job
     * @param array $config
     */
    public function __construct(string $connectionName, JobContractInterface $job)
    {
        $this->job = $job;
        $this->connectionName = $connectionName;
    }

    /**
     * @return string
     */
    public function getConnectionName(): string
    {
        return $this->connectionName;
    }

    /**
     * @return JobContractInterface
     */
    public function getJob(): JobContractInterface
    {
        return $this->job;
    }
}
