<?php
namespace App\Controller;

use App\Entity\Record;
use Symfony\Component\HttpFoundation\Request;

class RecordController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller{

    public function getLastRecord(Request $request){
        $client = $request->get("client");
    }

    public function addRecord(Request $request){
        $clientId = $request->get("client");
        $value = $request->get("value");
        $anomaly = $request->get("anomaly");

        $record = new Record();
        $record->setDatetime(new \DateTime());
        $record->setNote($request->get("note"));
        $record->setClientId($clientId);
        $record->setValue($value);
        $record->setAnomalyId($anomaly);

        $em = $this->getDoctrine()->getManager();
        $em->persist($record);
        $em->flush();

        return $this->json(true);
    }
}