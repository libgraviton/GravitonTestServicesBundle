<?php
/**
 * DatetimeDeserializationTestController class file
 */
namespace Graviton\TestServicesBundle\Controller;

use Graviton\RestBundle\Controller\RestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author   List of contributors <https://github.com/libgraviton/graviton/graphs/contributors>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://swisscom.ch
 */
class DatetimeDeserializationTestController extends RestController
{
    /**
     * @param Request $request Request
     * @return Response $response Response
     */
    public function postAction(Request $request)
    {
        $this->formValidator->checkJsonRequest(
            $request,
            $this->getResponse()
        );

        $inputData = $this->formValidator->checkForm(
            $this->formValidator->getForm($request, $this->getModel()),
            $this->getModel(),
            $this->formDataMapper,
            $request->getContent()
        );

        $response = $this->getResponse()
            ->setStatusCode(Response::HTTP_OK)
            ->setContent($this->serialize($inputData));

        return $this->render(
            'GravitonRestBundle:Main:index.json.twig',
            ['response' => $response->getContent()],
            $response
        );
    }

    /**
     * Dummy action
     *
     * @param Request $request Request
     * @param string  $id      ID
     * @return Response Response
     */
    public function getAction(Request $request, $id)
    {
        return $this->getResponse()->setStatusCode(Response::HTTP_NOT_FOUND);
    }

    /**
     * Dummy action
     *
     * @param Request $request Request
     * @return Response Response
     */
    public function allAction(Request $request)
    {
        return $this->getResponse()->setStatusCode(Response::HTTP_NOT_FOUND);
    }

    /**
     * Dummy action
     *
     * @param string  $id      ID
     * @param Request $request Request
     * @return Response Response
     */
    public function putAction($id, Request $request)
    {
        return $this->getResponse()->setStatusCode(Response::HTTP_NOT_FOUND);
    }

    /**
     * Dummy action
     *
     * @param string  $id      ID
     * @param Request $request Request
     * @return Response Response
     */
    public function patchAction($id, Request $request)
    {
        return $this->getResponse()->setStatusCode(Response::HTTP_NOT_FOUND);
    }
}
