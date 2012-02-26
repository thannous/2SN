<?php

namespace Mysn\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function userAction($login)
    {
	// On récupère la requête.
        $request = $this->get('request');

	//$var = $request->query->get('xxx'); // paramètre GET
	//$var = $request->cookies->get('xxx'); // paramètre cookie
	//$var = $request->request->get('xxx'); // paramètre POST

	//if ($request->getMethod() == 'POST' || 'GET')  // Récupérer méthode de requete HTTP

	// On utilise la méthode « $this->generateUrl() » pour obtenir l'URL
	// On utilise la méthode « $this->redirect('url') » pour être redirigé 

	// On utilise la méthode render()
	return $this->render('MysnUserBundle:User:user.html.twig', array(
            'login' => $login
	));
    }
}
