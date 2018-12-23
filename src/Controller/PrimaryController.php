<?php
namespace App\Controller;

use App\Entity\Client;
use App\Entity\ClientGroup;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PrimaryController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller{

    public function getGroups(){
        $groups = $this->getDoctrine()->getRepository(ClientGroup::class)->findAll();

        $serializer = new Serializer(array(new ObjectNormalizer()));
        $data = $serializer->normalize($groups, null, array('attributes' => array('id', 'name')));

        return $this->json($data);
    }

    public function getClients(Request $request){
        $groupId = $request->get("group");

        $clients = $this->getDoctrine()->getRepository(Client::class)->findByGroup($groupId);
        return $this->json(array_column($clients, "id"));
    }


}