<?php

namespace Nectalis\CurriculumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("")
 */
class DefaultController extends Controller
{

	/**
     * @Route("", name="homepage")
     */

    public function indexAction()
    {
    	return new Response('');

    }
}
