<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.security.request_matcher.X1icpaV' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcher.php';

return $this->privates['.security.request_matcher.X1icpaV'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api');
