<?php

namespace Custom\Utility\Hydrate;

use \Custom\Domain\Dto\Result\DefaultResultDto;

class GenericDtoHydrator
{
    public function hydrate($originalArray, $rowPrototype)
    {
        /**
         * @var DefaultResultDto
         */
        $rowPrototypeEntity = new $rowPrototype;
        $rowPrototypeEntity->exchangeArray($originalArray);
        return $rowPrototypeEntity;
    }
}
