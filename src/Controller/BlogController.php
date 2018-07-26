<?php
/**
 * Created by PhpStorm.
 * User: mstandeven
 * Date: 7/25/2018
 * Time: 5:43 PM
 */

namespace App\Controller;


use App\Service\Greeting;
use App\Service\VeryBadDesign;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog")
 */
class BlogController
{
    /**
     * @var \Twig_Environment
     */
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/{name}", name="blog_index")
     */
    public function index($name)
    {
        $html = $this->twig->render("base.html.twig");

        return new Response($html);
    }

    /**
     * @Route("/add", name="blog_add")
     */
    public function add()
    {

    }

    /**
     * @Route("/show/{id}", name="blog_show")
     */
    public function show($id)
    {

    }
}