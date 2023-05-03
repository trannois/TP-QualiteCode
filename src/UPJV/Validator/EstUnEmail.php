<?php

namespace UPJV\Validator;

/**
 * Classe EstUnEmail implémente les méthodes build & check de ValidatorInterface
 */
class EstUnEmail implements ValidatorInterface
{
    /**
     * Méthode de configuration pour le validateur.
     *
     * Cette méthode ne prend aucun paramètre, mais retourne l'objet validateur configuré.
     *
     * @param array $params Paramètres de configuration pour le validateur.
     * @return object L'objet validateur configuré.
     */
    public function build(array $params): object
    {
        // Ici, nous n'avons pas besoin de récupérer de paramètres pour valider une adresse email.
        // Nous pouvons simplement retourner l'objet validateur configuré tel quel.
        return $this;
    }

    /**
     * Méthode de validation pour le validateur.
     *
     * Cette méthode prend une chaîne en entrée et retourne un booléen indiquant si la chaîne est une adresse email valide ou non.
     *
     * @param mixed $input La chaîne à valider.
     * @return bool True si la chaîne est une adresse email valide, sinon False.
     */
    public function check($input): bool
    {
        // Utilisation de la fonction filter_var avec l'option FILTER_VALIDATE_EMAIL pour vérifier si la chaîne est une adresse e-mail valide.
        // La fonction filter_var retourne la valeur de la chaîne si elle est valide, sinon elle retourne false.
        return filter_var($input, FILTER_VALIDATE_EMAIL) !== false;
    }
}
