<?php

namespace App\Controllers;

class Controller
{
    /**
     * @var \Slim\Container $container
     */
    protected $container;

    /**
     * @var \Medoo\Medoo $db
     */
    protected $db;

    /**
     * Controller constructor.
     *
     * @param \Slim\Container $container
     */
    public function __construct($container)
    {
        $this->container = $container;
        $this->db        = $this->container->db;
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        } else {
            return null;
        }
    }

    /**
     * The view method returning TwigRenderer's Class
     *
     * @param \Psr\Http\Message\ResponseInterface|\Slim\Http\Response $res
     * @param string                                                  $template
     * @param array                                                   $args
     *
     * @return \Psr\Http\Message\ResponseInterface|\Slim\Http\Response
     */
    public function view($res, $template, $args = [])
    {
        return $this->container->view->render($res, $template . '.twig', $args);
    }
}
