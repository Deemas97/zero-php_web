<?php
namespace App\Controller;

include_once '../src/Core/Controller/ControllerRendering.php';
include_once '../src/Core/Controller/ControllerResponseInterface.php';
include_once '../src/Core/Service/Renderer.php';

use App\Core\Controller\ControllerRendering;
use App\Core\Controller\ControllerResponseInterface;
use App\Core\Service\Renderer;

class MainController extends ControllerRendering
{
    public function __construct(
        Renderer $renderer
    )
    {
        parent::__construct($renderer);
    }

    public function index(): ControllerResponseInterface
    {
        $this->renderer->enableCaching(true);

        $data = [
            'title' => 'Альянс',
            'meta_description' => 'Здесь находится meta-описание'
        ];

        return $this->render('main.html.php', $data);
    }
}