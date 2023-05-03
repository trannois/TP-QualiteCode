<?php

/**
 * Vérifie que la chaîne de caractères ne contient uniquement de l'alphabet
 */

namespace UPJV\Validator;

/**
 * Class EstDuTexte implémente les méthodes build & check
 */
class EstDuTexte implements ValidatorInterface
{
    /**
     * Vérifie que l'input contient uniquement des caractères alphabétiques
     *
     * @param $input
     *
     * @return bool
     */
    public function build(array $param): object
    {
        return $this;
    }

    /**
     * Vérifie que l'input contient uniquement des caractères alphabétiques
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return ctype_alpha($input);
    }
}
