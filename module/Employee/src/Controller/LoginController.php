<?php

namespace Employee\Controller;

use Application\Controller\ApplicationController;
use Core\Employee\Service\IEmployeeService;
use Custom\Utility\Hydrate\GenericEntityHydrator;
use Domain\Entity\Employee\EmployeeEntity;
use Custom\Utility\JSend\Response\CustomJSendResponse;
use Domain\Entity\Employee\LoginEntity;
use Domain\Entity\ResultEntity;

class LoginController extends ApplicationController
{
    /**
     * @var IEmployeeService
     */
    protected $employee_service;

    /**
     * @var GenericEntityHydrator
     */
    protected $employee_hydrator;

    public function __construct(GenericEntityHydrator $employeeHydrator, IEmployeeService  $employeeService)
    {
        $this->employee_hydrator = $employeeHydrator;
        $this->employee_service = $employeeService;
    }

    public function create($data)
    {
        $response = null;
        $rowProtoType = new LoginEntity();
        $loginEntity = $this->employee_hydrator->hydrate($data, $rowProtoType);
        /**
         * @var ResultEntity
         */
        $resultEntity = $this->employee_service->login($loginEntity);
        if (! $resultEntity->getIsSuccess()) {
            $response = CustomJSendResponse::fail(null, 'fail to insert data');
            $this->sendResponse($response->asArray());
        }
        $response = new CustomJSendResponse('success', $resultEntity->getResult()[0]->toArray());
        $this->sendResponse($response->asArray());
    }
}
