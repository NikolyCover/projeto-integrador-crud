<?php

require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../repository/BusinessProposalRepository.php";

function create() {
    $company = $_POST('company');
    $proposalHandler = $_POST('proposalHandler');
    $number = $_POST('number');
    $date = $_POST('date');
    $value = $_POST('value');
    $cnpj = $_POST('cnpj');
    $type = $_POST('type');
    $paymentType = $_POST('paymentType');
    $scope = $_POST('scope');
    $confidentialityText = $_POST('confidentialityText');
    $tributesText = $_POST('tributesText');
    $generalConditionText = $_POST('generalConditionText');
    $finalResultsText = $_POST('finalResultsText');
    $scheduleText = $_POST('scheduleText');
    $proposalPresentationText = $_POST('proposalPresentationText');
    $proposalTitle = $_POST('proposalTitle');
    $recipient = $_POST('recipient');

    $bp = new BusinessProposalModel();
    $bp->setCompany($company);
    $bp->setProposalHandler($proposalHandler);
    $bp->setNumber($number);
    $bp->setDate($date);
    $bp->setValue($value);
    $bp->setCnpj($cnpj);
    $bp->setType($type);
    $bp->setPaymentType($paymentType);
    $bp->setScope($scope);
    $bp->setConfidentialityText($confidentialityText);
    $bp->setTributesText($tributesText);
    $bp->setGeneralConditionText($generalConditionText);
    $bp->setFinalResultsText($finalResultsText);
    $bp->setScheduleText($scheduleText);
    $bp->setProposalPresentationText($proposalPresentationText);
    $bp->setProposalTitle($proposalTitle);
    $bp->setRecipient($recipient);

    $bpRepository = new BusinessProposalRepository();
    $id = $bpRepository->create($bp);
    $bp->setId($id);
}

function findAll()
{
    #$bpRepository = new BusinessProposalRepository();

    #$bps = $bpRepository->findAll();

    #$data['title'] = "Propostas comerciais";
    #$data['bps'] = $bps;

    Controller::loadView("index.php");
}

function deleteUserById()
{
    $idParam = $_GET['id'];
    $bpRepository = new BusinessProposalRepository();

    $bpRepository->deleteById($idParam);

    Controller::loadView("index.php");
}

?>