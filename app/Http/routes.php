<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 |------------------------------------------------------------------------
 | Plusieurs routes et paramètres de route (page 24)
 |------------------------------------------------------------------------
 | 
 | Création de 3 URL : 1 ; 2 et 3. Chacue d'elle sera sur une seule ligne.
 | Le '/' est uniquement utiliser pour la racine.
 | Création de 3 autres URL : 4 ; 5 et 6. Cette fois tout ne tiendra pas sur une ligne.
 |
 */
Route::get('1', function() { return 'Je suis la page 1 ! <br /><hr>Attention tout de même, aucune page n\'existe physiquement. Il s\'agit simplement du routing de Laravel.'; });
Route::get('2', function() { return 'Je suis la page 2 ! <br /><hr>Attention tout de même, aucune page n\'existe physiquement. Il s\'agit simplement du routing de Laravel.'; });
Route::get('3', function() { return 'Je suis la page 3 ! <br /><hr>Attention tout de même, aucune page n\'existe physiquement. Il s\'agit simplement du routing de Laravel.'; });

Route::get('4', function() { 
    return 'Je suis la page 4 ! <br /><hr>Attention tout de même, aucune page n\'existe physiquement. Il s\'agit simplement du routing de Laravel.'; 
});
Route::get('5', function() { 
    return 'Je suis la page 5 ! <br /><hr>Attention tout de même, aucune page n\'existe physiquement. Il s\'agit simplement du routing de Laravel.'; 
});
Route::get('6', function() { 
    return 'Je suis la page 6 ! <br /><hr>Attention tout de même, aucune page n\'existe physiquement. Il s\'agit simplement du routing de Laravel.'; 
});

/*
 |------------------------------------------------------------------------
 | Une route paramétrée - Dans mon cas 'n' correspond 'nombre'
 |------------------------------------------------------------------------
 | 
 | Un paramètre se fait avec les accolade soit : {n} qui sera associé 
 | à la function ou on stipulera que '{n]' vaut la variable $n.
 | Comme en PHP ce paramètre sera concaténé afin de l'exploiter.
 |
 */
 
Route::get('{nombre}', function($nombre){
    return 'Vous êtes sur la page : ' . $nombre;
});

/*
 |------------------------------------------------------------------------
 | Une route paramétrée mais limité grâce à une expression régulière
 |------------------------------------------------------------------------
 | 
 | on ajoute à notre dernière parenthèse une flèche avec le mot clé where suivie de parenthèse ou on inscrit : 
 | 'nombre', '[10-13]' puis on ferme la parenthèse et on ajoute le point virgule ;
 |
 | Information utile - Sur les 9 primières pages, seule la page 7 ne sera pas accessible et vous obtiendrez un message d'erreur. Au dessus bien entendu rien ne fonctionnera'
 |
 */
Route::get('{nombre}', function($nombre){
    return 'Vous êtes bien sur la page : ' . $nombre . '. <br /><hr>A savoir que seulement les pages 8 et 9 peuvent être affiché à l\'écran avec ce message là !';
})->where('nombre', '[8-9+]');

/*
 |------------------------------------------------------------------------
 | Une route nommée
 |------------------------------------------------------------------------
 | 
 | 
 |
 */
Route::get('/admin', ['as'=>'administration', function(){
    return 'Je suis sur la page d\'administration ! <br /><hr>Attention tout de même, aucune page n\'existe physiquement. Il s\'agit simplement du routing de Laravel.';
}]);
