<?php

namespace Nectalis\CurriculumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("")
 */
class DefaultController extends Controller
{

	/**
     * @Route("", name="homepage")
     * @Template()
     */

    public function indexAction()
    {
    	return array();	
    }
}
