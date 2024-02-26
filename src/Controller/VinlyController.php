<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function symfony\Component\String\u;

class VinlyController extends AbstractController{
    #[Route("/")]
    function homepage():Response{
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];
        return $this->render('vinly/homepage.html.twig',['title'=>'iset kélibia','tracks'=>$tracks,]);
    }
    #[Route("/browse/{slug}")]
    function browse(string $slug):Response{
        $title = u(str_replace("-"," ",$slug))->title(true);
        return new Response("Genre :". $title);
    }

}