<?php
/**
 * controller for base controller calls
 */

namespace Graviton\TestServicesBundle\Controller;

use Graviton\RestBundle\Controller\RestController;
use Graviton\TestServicesBundle\Service\Random;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author   List of contributors <https://github.com/libgraviton/graviton/graphs/contributors>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://swisscom.ch
 */
class TestcaseBaseControllerCallController extends RestController
{

    /**
     * @var Random
     */
    private $randomService;

    /**
     * @param Random $randomService
     */
    public function setRandomService(Random $randomService): void
    {
        $this->randomService = $randomService;
    }

    public function allAction(Request $request)
    {
        $data = $this->getModel()->findAll($request);

        foreach ($data as $idx => $record) {
            $record->setRandom($this->randomService->getRandomString());
            $data[$idx] = $record;
        }

        $response = $this->getResponse()
            ->setStatusCode(Response::HTTP_OK)
            ->setContent($this->serialize($data));

        return $response;
    }
}
