<?php


namespace ApiBundle\Controller\V1;


use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\Validator\ConstraintViolation;

class BaseController extends FOSRestController
{

    /**
     * @param $object
     * @param array|null $groups
     * @return null|\Symfony\Component\HttpFoundation\Response
     */
    protected function validate($object, $groups = null)
    {
        $validator = $this->getValidator();
        $errors = $validator->validate($object, null, $groups);

        if (count($errors)) {
            $errorsArray = [];
            /** @var ConstraintViolation $error */
            foreach ($errors as $error) {
                $errorsArray[$error->getPropertyPath()] = $error->getMessage();
            }
            $view = $this->view($errorsArray, 400);
            return $this->handleView($view);
        }

        return null;
    }

    /**
     * Creates a view.
     *
     * Convenience method to allow for a fluent interface.
     *
     * @param mixed $data
     * @param int   $statusCode
     * @param array $headers
     *
     * @return View
     */
    protected function view($data = null, $statusCode = null, array $headers = [])
    {
        if ((int) ($statusCode / 200) == 1) {
            $data = [
                'success' => true,
                'code' => $statusCode,
                'data' => $data,
            ];
        } else {
            $data = [
                'success' => false,
                'code' => $statusCode,
                'errors' => $data,
            ];
        }

        return parent::view($data, $statusCode, $headers);
    }

    /**
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializer()
    {
        return $this->get('api.serializer.default');
    }

    /**
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidator()
    {
        return $this->get('validator');
    }
}