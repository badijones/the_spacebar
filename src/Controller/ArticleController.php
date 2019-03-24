<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 3/23/19
 * Time: 8:50 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
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


    $comments = [
        'Comment 1',
        'Comment 2',
        'Comment 3',

    ];

    dump($slug,$this);
    return new Response(
        $this->render('article/show.html.twig',[
            'title'=>ucwords(str_replace('-',' ',$slug)),
            'comments' => $comments,


        ])

    );

}
}