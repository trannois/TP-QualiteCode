<?php

/**
 * Vérifie qu'un element appartient a un tableau
 */

namespace UPJV\Validator;

/**
 * Class ElementDe implémente les méthode build & check
 */
class ElementDe implements ValidatorInterface
{
    //array of string
    protected array $tabl = [];

    /**
     * Récupère le tableau spécifier dans la conf
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->tabl = $param;

        return $this;
    }

    /**
     * Test l'appartenance de l'élément au tableau
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        foreach ($this->tabl as $element) {
            if ($input === $element) {
                return true;
            }
        }

        return false;
    }
}
