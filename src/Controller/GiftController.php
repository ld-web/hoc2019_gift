<?php

namespace App\Controller;

use App\Repository\GiftRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GiftController extends AbstractController
{
    /**
     * @Route("/gifts", name="gifts")
     */
    public function index(GiftRepository $giftRepository)
    {
        $gifts = $giftRepository->findAll();

        return $this->render(
            'gift/index.html.twig',
            ['gifts' => $gifts]
        );
    }
}
