<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

/**
 * Pre something, place to put things that depend on route taken, before we route things to actual controller to handle
 * 
 * Transfer here: 
 *  - Get path to variables and do some sanitation of data
 *  - Setting up system to have function called based on controller name:
 *    - example handling jwt token when going to user controller - you have valid token if logged in for example
 * 
 * 
 * Seriously: More appropriate name would be prehandler, but since this is supposed to run bofere router,
 * it is now prerouter
 * 
 * 17.10.2023 - As of now no functionality yet implemented
 */

class Prerouter
{
    private $preRouterRunState = false;

    public function __construct()
    {
        $this->preRouterRunState = false;

        // Add initialisation of data system needed by this
    }

    public function execute()
    {
        // Set internal state as run when executed
        $this->preRouterRunState =  true;

    }
    /**
     * Allow getting internal state is Prerouter executed yet: true/false
     */
    public function getState()
    {
        return $this->$preRouterRunState;
    }
}

?>