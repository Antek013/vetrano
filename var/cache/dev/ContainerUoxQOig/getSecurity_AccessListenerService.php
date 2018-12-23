<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_listener' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\AccessListener.php';

return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['debug.security.access.decision_manager'] ?? $this->load('getDebug_Security_Access_DecisionManagerService.php')), ($this->privates['security.access_map'] ?? $this->load('getSecurity_AccessMapService.php')), ($this->privates['security.authentication.manager'] ?? $this->load('getSecurity_Authentication_ManagerService.php')));
