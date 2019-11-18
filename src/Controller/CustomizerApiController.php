<?php

namespace Friendlyit\Theme\Controller;

use Pagekit\Application as App;


/**
 * @Route("customizer", name="customizer")
 */
class CustomizerApiController
{
	/**
     * @Route("/", methods="GET")
     * @Request({"view":"string"})
     */
    public function indexAction($view = 'all')
    {
	
        return 'Hellou';
    }
}