<?php
/**
 * type dependant; will be used as a service
 */

namespace Graviton\TestServicesBundle\Service;

use Graviton\CoreBundle\ValueInitializer\ValueInitializer;
use Graviton\RestBundle\Event\EntityPrePersistEvent;
use Graviton\RestBundle\RestListener\RestListenerAbstract;
use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * @author  List of contributors <https://github.com/libgraviton/graviton/graphs/contributors>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://swisscom.ch
 */
class TypeDependentInitializer extends RestListenerAbstract
{

    private array $typeLength = [];
    private string $typeFieldname;

    public function __construct(string $typeFieldname)
    {
        $this->typeFieldname = $typeFieldname;
    }

    public function addTypeLength(string $type, int $countDays) {
        $this->typeLength[$type] = $countDays;
    }

    /**
     * called before the entity is persisted
     *
     * @param EntityPrePersistEvent $event event
     *
     * @return EntityPrePersistEvent event
     */
    public function prePersist(EntityPrePersistEvent $event)
    {
        $entity = $event->getEntity();
        $accessor = PropertyAccess::createPropertyAccessor();

        $currentType = $accessor->getValue($entity, $this->typeFieldname);

        // don't reset existing value
        $currentExpiry = $accessor->getValue($entity, 'expireDateField');
        if (!is_null($currentExpiry)) {
            return $event;
        }

        $addDays = 0;
        if (isset($this->typeLength[$currentType])) {
            $addDays = $this->typeLength[$currentType];
        }

        $newDate = new \DateTime();
        if ($addDays > 0) {
            $newDate->add(new \DateInterval('P'.$addDays.'D'));
        }

        // add
        $accessor->setValue($entity, 'expireDateField', $newDate);

        $event->setEntity($entity);

        return $event;
    }
}
