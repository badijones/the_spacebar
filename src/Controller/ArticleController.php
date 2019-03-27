<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 3/23/19
 * Time: 8:50 PM
 */

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{

    /**
     * @Route("/",name="app_homepage")
     */
public function homepage(){


    return $this->render('article/homepage.html.twig');

}

    /**
     * @Route("/news/{slug}", name="article_show")
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
            'slug' => $slug,
            'comments' => $comments,


        ])

    );

}

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */

    public function toggleArticleHeart($slug, LoggerInterface $logger){
        //  TODO - heart/unheart article

        $logger->info('Article is being hearted.');

        return new JsonResponse(['hearts' => rand(4,100)]);

    }
}