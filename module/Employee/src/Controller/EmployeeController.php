<?php

namespace Employee\Controller;

use Application\Controller\ApplicationController;
use Core\Employee\Service\IEmployeeService;
use Custom\Utility\Hydrate\GenericEntityHydrator;
use Domain\Entity\Employee\EmployeeEntity;
use Custom\Utility\JSend\Response\CustomJSendResponse;
use Student\Validator\AddStudentParamsValidator;

class EmployeeController extends ApplicationController
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
        $rowProtoType = new EmployeeEntity();
        $employeeEntity = $this->employee_hydrator->hydrate($data, $rowProtoType);
        //$validationResult = AddStudentParamsValidator::isAddStudentParamsValid($employeeEntity);
        /*if (!$validationResult->isValid()) {
            $response = CustomJSendResponse::fail(null, $validationResult->getMessage());
            $this->sendResponse($response->asArray());
        }*/
        $insertResult = $this->employee_service->addEmployee($employeeEntity);
        if (! $insertResult) {
            $response = CustomJSendResponse::fail(null, 'fail to insert data');
            $this->sendResponse($response->asArray());
        }
        $response = new CustomJSendResponse('success');
        $this->sendResponse($response->asArray());
    }
}
