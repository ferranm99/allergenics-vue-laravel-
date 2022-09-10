<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Execute an action on the controller.
     *
     * @param string $method
     * @param array $parameters
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function callAction($method, $parameters)
    {
        if(method_exists($this,'setSubdomain')){
            //ray(__METHOD__)->large()->green();
            $this->setSubdomain(request()->country);
        }

        return parent::callAction($method, $parameters);
    }



}
