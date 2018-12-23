<?php
namespace App\Controller;

use App\Entity\User;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class OperatorController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller{


    public function login(Request $request){
        return $this->json(true);
    }

    public function signUp(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $email = $request->get("email");
        $password = $request->get("password");

        $user = new User();
        $user->setPassword($passwordEncoder->encodePassword($user, $password));
        $user->setEmail($email);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        try{
            $em->flush();
        }catch (UniqueConstraintViolationException $e){
            return $this->json(false);
        }

        return $this->json(true);
    }
}