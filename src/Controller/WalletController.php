<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Wallet;

class WalletController extends AbstractController
{
    #[Route('/get-ballance', name: 'app_wallet')]
    public function getBallance(): Response
    {
        $wallet = new Wallet();
        $wallet->setBallance(20);
        return $this->json([
            'message' => $wallet->getBallance(),
            'path' => 'src/Controller/WalletController.php',
        ]);
    }
}
