<?php
namespace NeedleProject\LaravelRabbitMq;

/**
 * Interface PublisherInterface
 *
 * @package NeedleProject\LaravelRabbitMq\Publisher
 * @author  Adrian Tilita <adrian@tilita.ro>
 */
interface PublisherInterface
{
    /**
     * Publish a new message
     *
     * @param string $message
     * @param array $messageProperties
     * @param string $routingKey
     * @return mixed
     */
    public function publish(string $message, array $messageProperties = [], string $routingKey = '');
}
