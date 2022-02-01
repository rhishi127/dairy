<?php

namespace Employee\Data\Hydrator;

use Custom\Utility\Hydrate\GenericEntityHydrator;

class EmployeeHydratorFactory
{
    public function __invoke():GenericEntityHydrator
    {
        return new GenericEntityHydrator();
    }
}
