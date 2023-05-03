<?php

namespace UPJV\Validator\Test;

use PHPUnit\Framework\TestCase;
use UPJV\Validator\EstUnEmail;

class EstUnEmailTest extends TestCase
{
    /**
     * Teste la validation d'une adresse email valide.
     */
    public function testValidationEmailValide(): void
    {
        // Création du validateur
        $validateur = new EstUnEmail();

        // Validation d'une adresse email valide
        $resultat = $validateur->check('test@example.com');

        // Vérification que le résultat est vrai
        $this->assertTrue($resultat);
    }

    /**
     * Teste la validation d'une adresse email invalide.
     */
    public function testValidationEmailInvalide(): void
    {
        // Création du validateur
        $validateur = new EstUnEmail();

        // Validation d'une adresse email invalide
        $resultat = $validateur->check('test@example');

        // Vérification que le résultat est faux
        $this->assertFalse($resultat);
    }
}
