<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
  /**
   * @Route("/lucky/number")
   * @return \Symfony\Component\HttpFoundation\Response
   * @throws \Exception
   */
  public function number()
  {
    $number = random_int(0, 100);

    // eturn new Response('<html><body>Lucky number: '. $number . '</body></html>');
    return $this->render('lucky/number.html.twig', [
      'number' => $number,
      'controller_name' => __CLASS__,
    ]);
  }
}