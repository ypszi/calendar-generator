<?php declare(strict_types=1);

namespace Ypszi\CalendarGenerator\App;

use DI\Bridge\Slim\App as BaseApp;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Twig_Extension_Debug;

class App extends BaseApp
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(
            [
                Twig::class => function (ContainerInterface $container) {
                    $twig = new Twig(
                        SRC_PATH . '/views',
                        [
                            'cache' => ROOT_PATH . '/var/cache/twig',
                            'auto_reload' => true,
                            'debug' => true,
                        ]
                    );

                    $twig->addExtension(
                        new TwigExtension(
                            $container->get('router'),
                            $container->get('request')->getUri()
                        )
                    );

                    $twig->addExtension(new Twig_Extension_Debug());

                    return $twig;
                },
            ]
        );
    }
}
