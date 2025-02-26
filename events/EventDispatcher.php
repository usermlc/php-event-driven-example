<?php
// events/EventDispatcher.php

class EventDispatcher
{
    private $listeners = [];

    // Додає обробник для конкретної події
    public function addListener($eventName, $listener)
    {
        $this->listeners[$eventName][] = $listener;
    }

    // Викликає всі обробники для конкретної події
    public function dispatch(Event $event)
    {
        $eventName = get_class($event);
        if (isset($this->listeners[$eventName])) {
            foreach ($this->listeners[$eventName] as $listener) {
                $listener($event);
            }
        }
    }
}