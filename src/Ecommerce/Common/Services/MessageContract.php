<?php

namespace Ecommerce\Common\Services;

use Ecommerce\Common\Events\Event;

interface MessageContract
{
    public function publish(Event $event): void;
    public function getUnprocessedEvents(): array;
}
