<?php

/**
 * Vérifie que le chiftre est plus grand que 3
 */

namespace UPJV\Validator;

/**
 * Class Min implémente les méthode build & check
 */
class LeMin implements ValidatorInterface
{
    protected int $size;

    /**
     * Récupère la taille minimum spécifier dans la conf
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->size = $param[0];

        return $this;
    }

    /**
     * Test que c'est le minimun
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return ($input >= $this->size);
    }
}
