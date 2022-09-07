<?php

declare(strict_types=1);

namespace Slim\Views;

use Psr\Http\Message\ResponseInterface;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

interface TwigInterface
{
    /**
     * Fetch rendered string
     *
     * @param string               $string String
     * @param array<string, mixed> $data   Associative array of template variables
     *
     * @return string
     * @throws SyntaxError When an error occurred during compilation
     *
     * @throws LoaderError When the template cannot be found
     */
    public function fetchFromString(string $string = '', array $data = []): string;

    /**
     * Output rendered template
     *
     * @param ResponseInterface    $response
     * @param string               $template Template pathname relative to templates directory
     * @param array<string, mixed> $data     Associative array of template variables
     *
     * @return ResponseInterface
     * @throws SyntaxError  When an error occurred during compilation
     * @throws RuntimeError When an error occurred during rendering
     * @throws LoaderError  When the template cannot be found
     */
    public function render(ResponseInterface $response, string $template, array $data = []): ResponseInterface;
}
