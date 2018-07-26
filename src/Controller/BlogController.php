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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @var Greeting
     */
    private $greeting;
    /**
     * @VerybadDesign
     */
    private $badDesign;

    public function __construct(Greeting $greeting)
    {
        $this->greeting = $greeting;
    }

    /**
     * @Route("/", name="blog_index")
     */
    public function index(Request $request)
    {
        return $this->render("base.html.twig", ['message' => $this->greeting->greet(
            $request->get('name')
        )]);
    }
}