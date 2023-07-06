<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ParrainageController extends Controller
{
    public function parrainer($codeParrain)
    {
        // Vérification si le parrain existe
        $parrain = User::where('code_parrain', $codeParrain)->first();

        if ($parrain) {
            // Création de l'utilisateur avec le parrain correspondant
            $utilisateur = User::create([
                // Champs supplémentaires de l'utilisateur
                'code_parrain' => $codeParrain,
            ]);

            return "Vous avez été parrainé avec succès !";
        } else {
            return "Le code parrain n'est pas valide.";
        }
    }
}
