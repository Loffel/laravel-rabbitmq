<?php
namespace NeedleProject\LaravelRabbitMq;

use NeedleProject\LaravelRabbitMq\Consumer\ConsumerInterface;
use NeedleProject\LaravelRabbitMq\Publisher\PublisherInterface;

/**
 * Class Container
 *
 * @package NeedleProject\LaravelRabbitMq
 * @author  Adrian Tilita <adrian@tilita.ro>
 */
class Container
{
    /**
     * @var array
     */
    private $publishers = [];

    /**
     * @var array
     */
    private $consumers = [];

    /**
     * @param string $publisherName
     * @param PublisherInterface $entity
     * @return Container
     */
    public function addPublisher(string $publisherName, PublisherInterface $entity): Container
    {
        $this->publishers[$publisherName] = $entity;
        return $this;
    }

    /**
     * @param string $publisherName
     * @return PublisherInterface
     */
    public function getPublisher(string $publisherName): PublisherInterface
    {
        return $this->publishers[$publisherName];
    }

    /**
     * @return array
     */
    public function getPublishers(): array
    {
        return $this->publishers;
    }

    /**
     * @param string $consumerName
     * @param ConsumerInterface $consumer
     * @return Container
     */
    public function addConsumer(string $consumerName, ConsumerInterface $consumer): Container
    {
        $this->consumers[$consumerName] = $consumer;
        return $this;
    }

    /**
     * @param string $consumerName
     * @return mixed
     */
    public function getConsumer(string $consumerName)
    {
        return $this->consumers[$consumerName];
    }

    /**
     * @return array
     */
    public function getConsumers(): array
    {
        return $this->consumers;
    }
}
