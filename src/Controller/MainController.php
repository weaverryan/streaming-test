<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    #[Route('/')]
    public function __invoke()
    {
        return new StreamedResponse(function () {
            $i = 0;
            while ($i < 5) {
                echo time()."\n";
                ob_flush();
                flush();
                sleep(1); // TODO: shorten
                $i++;
            }
        }, 200, [
            'Content-Type' => 'text/event-stream',
            'Cache-Control' => 'no-cache',
            'X-Accel-Buffering' => 'no',
        ]);
    }
}
