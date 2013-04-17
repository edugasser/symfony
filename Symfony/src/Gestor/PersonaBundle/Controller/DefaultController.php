<?php

namespace Gestor\PersonaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestor\PersonaBundle\Form\PersonaType;
use Gestor\PersonaBundle\Entity\Persona;
use Doctrine\ORM\Mapping as ORM;
class DefaultController extends Controller
{
    public function indexAction($name)
    {

        return $this->render('PersonaBundle:Default:index.html.twig', array('name' => 'hola'));
    }

    public function pruebaAction($name)
    {

       	$em = $this->getDoctrine()->getManager();
		$consulta = $em->createQuery('SELECT c FROM PersonaBundle:Persona c');
		$personas = $consulta->getResult();
		return $this->render('PersonaBundle:Default:iterar.html.twig', array('personas' => $personas));
    }
    public function formularioAction()
    {
    	$usuario = new Persona();
        $peticion = $this->getRequest();
		$formulario = $this->createForm(new PersonaType(), $usuario);
        $em = $this->getDoctrine()->getEntityManager();    
        if ($peticion->getMethod() == 'POST') {
            $formulario->bind($peticion);
            if ($formulario->isValid()) {
                $registration = $formulario->getData();

                $em->persist($registration);
                $em->flush();
                echo "siiii";
            }
        // Validar los datos enviados y guardarlos en la base de datos
        }

		return $this->render(
		'PersonaBundle:Default:formulario.html.twig',
		array('formulario' => $formulario->createView())
		);
    }
}
