<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.anonymous.api_signUp' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\AuthenticationManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider.php';

return $this->privates['security.authentication.provider.anonymous.api_signUp'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'));
