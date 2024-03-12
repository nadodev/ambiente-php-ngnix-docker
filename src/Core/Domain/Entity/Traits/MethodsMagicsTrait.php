<?php

namespace Core\Domain\Entity\Traits;

use Exception;

trait MethodsMagicsTrait
{


    public function __get($proprity)
    {
        if (isset($this->{$proprity}))
            return $this->{$proprity};

            $className = get_class($this);

            throw new Exception('property ' . $proprity . ' not found in ' . $className . ' class');

    }

}
