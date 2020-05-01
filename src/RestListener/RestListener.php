<?php

namespace Graviton\TestServicesBundle\RestListener;

use Graviton\RestBundle\Event\EntityPrePersistEvent;
use Graviton\RestBundle\Listener\DynService\RestListenerAbstract;

/**
 * Generated Graviton Pipeline class
 */
class RestListener extends RestListenerAbstract
{

    public function prePersist(EntityPrePersistEvent $event) {
        $entity = $event->getEntity();
        $entity['thirdField'] = "DDSFDSF";

        $event->setEntity($entity);

        return $event;
    }

}
