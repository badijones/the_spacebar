<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 3/23/19
 * Time: 8:50 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{

    /**
     * @Route("/")
     */
public function homepage(){


    return new Response('home page');
}

    /**
     * @Route("/news/{slug}")
     */
public function show($slug){

    return new Response(
        sprintf('the slug is: %s',$slug)

    );

}
}