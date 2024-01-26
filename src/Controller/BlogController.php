<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
  #[Route('/blog', name: 'blog_list')]
  public function list(): Response
  {
    $list = ['Article 1', 'Article 2'];
    return $this->render('blog/articles.html.twig', [
      'articles' => $list
    ]);
  }
}
