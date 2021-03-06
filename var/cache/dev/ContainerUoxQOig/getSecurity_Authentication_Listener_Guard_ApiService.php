<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.guard.api' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Guard\\Firewall\\GuardAuthenticationListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Guard\\GuardAuthenticatorHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategy.php';

$a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), array(0 => 'api_login', 1 => 'api_signUp', 2 => 'api'));
$a->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

return $this->privates['security.authentication.listener.guard.api'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($this->privates['security.authentication.manager'] ?? $this->load('getSecurity_Authentication_ManagerService.php')), 'api', new RewindableGenerator(function () {
    yield 0 => ($this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $this->load('getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService.php'));
}, 1), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));
