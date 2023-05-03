<?php

/**
 * Vérifie que le nombre est égale à 6 (valeur specifier dans la conf)
 */

namespace UPJV\Validator;

/**
 * Class EgaleA implémente la méthode check
 */

class EgaleA implements ValidatorInterface
{
    protected int $number;

    /**
     * Récupère la valeur spécifier dans la conf
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->number = $param[0];

        return $this;
    }

    /**
     * Test la valeur du nombre donner dans le formEgaleA
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return ($input === $this->number);
    }
}
