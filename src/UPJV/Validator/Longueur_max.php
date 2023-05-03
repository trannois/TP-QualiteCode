<?php

/**
 * Vérifie que la taille de la chaine ne dépasse pas une certaine limite
 */

namespace UPJV\Validator;

/**
 * Class longueur_Max implémente les méthode build & check
 */
class Longueur_max implements ValidatorInterface
{
    protected int $size;

    /**
     * Récupère la taille maximum spécifier dans la conf
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
     * Test la longueur de la chaine de caractères
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return (strlen($input) <= $this->size);
    }
}
