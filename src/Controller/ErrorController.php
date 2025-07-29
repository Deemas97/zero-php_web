<?php
namespace App\Controller;

include_once '../src/Core/Controller/ControllerResponseInterface.php';
include_once '../src/Core/Service/Renderer.php';
include_once '../src/Core/Controller/ControllerRendering.php';

use App\Core\Controller\ControllerResponseInterface;
use App\Core\Service\Renderer;
use App\Core\Controller\ControllerRendering;

class ErrorController extends ControllerRendering
{
    public function __construct(
        Renderer $renderer
    )
    {
        parent::__construct($renderer);
    }

    public function error404(): ControllerResponseInterface
    {
        $this->renderer->enableCaching(true);

        $data = [
            'title' => '404 Error'
        ];

        return $this->render('error_404.html.php', $data, 404);
    }
}