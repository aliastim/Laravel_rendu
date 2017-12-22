<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcomecontroller extends Controller
{
    public function Welcome()
    {
        $prenom = 'Timothée';
        $nom = 'CORRADO';

        /*
        return view('welcome',
            [
                'monPrenom' => $prenom,
                'monNom' => $nom
            ]); /*nom de la page .blade.php pour l'index*/

        return view('welcome', compact('prenom', 'nom'));
    }
}
