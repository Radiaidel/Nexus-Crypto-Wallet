<?php

// Inclure les fichiers nécessaires
require_once 'app/controllers/Users.php'; // Assurez-vous que le chemin est correct
require_once 'app/controllers/Pages.php'; // Assurez-vous que le chemin est correct

// Créer une instance du routeur
$router = new Router(); 

// Définir les routes
$router->get('/', 'Pages@index');
$router->get('/users/register', 'Users@register');
$router->post('/users/register', 'Users@register');
$router->get('/users/login', 'Users@login');
$router->post('/users/login', 'Users@login');
$router->post('/users/verify', 'Users@verify');
// $router->addRoute('GET', '/pages/register', 'Pages@register');
// $router->get('/users/verify/{verificationCode}', 'Users@verify'); // Cette ligne a été ajoutée
$router->get('/pages/dashboard', 'Pages@dashboard');

// Vous pouvez ajouter d'autres routes en fonction de vos besoins

// Traiter la requête
$response = $router->handle($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

// Envoyer la réponse au navigateur
echo $response;