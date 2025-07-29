<?php
namespace App\Core\Module;

include_once '../src/Core/ModuleInterface.php';
include_once '../src/Core/Module/RequestManagerInterface.php';
include_once '../src/Core/MessageBusInterface.php';
include_once '../src/Core/MessageBus/ActionsInterface.php';
include_once '../src/Core/MessageBus/Actions.php';
include_once '../src/Core/Service/Router.php';
include_once '../src/Core/Service/Router/RouteInterface.php';

include_once '../src/Controller/ErrorController.php';
include_once '../src/Controller/MainController.php';

use App\Core\ModuleInterface;
use App\Core\MessageBusInterface;
use App\Core\MessageBus\ActionsInterface;
use App\Core\MessageBus\Actions;
use App\Core\Service\Router;
use App\Core\Service\Router\RouteInterface;

use App\Controller\MainController;
use App\Controller\ErrorController;

class RequestManager implements ModuleInterface, RequestManagerInterface
{
    public function __construct(
        protected Router $router
    )
    {
        $this->initRouter();
    }

    public function process(MessageBusInterface $messageBus): ActionsInterface
    {
        $actions = new Actions();

        $route = $this->router->resolve(
            $messageBus->get('route'),
            $messageBus->get('method') ?? 'GET',
            $messageBus->get('xhr')
        );

        if ($route instanceof RouteInterface) {
            $actions->addItem('headers', $messageBus->get('headers'));
            $actions->addItem('method',  $messageBus->get('method'));

            $actions->addItem('controller', $route->getControllerName());
            $actions->addItem('method',     $route->getMethodName());

            $actions->addItem('route_parameters', $route->getParameters());
            $actions->addItem('query_parameters', ($messageBus->get('query') ?? ''));
            $actions->addItem('input', ($messageBus->get('input') ?? []));
        }

        return $actions;
    }

    protected function initRouter(): void
    {
        $this->router
            // UNAUTHORIZED
            ->register('/',                     MainController::class, 'index')

            ->register('/access_denied',             ErrorController::class, 'error403')
            ->register('/not_found',                 ErrorController::class, 'error404')
            ->register('/unknown_method',            ErrorController::class, 'error405')
            ->register('/crash',                     ErrorController::class, 'error500');
    }
}