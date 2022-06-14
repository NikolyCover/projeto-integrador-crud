<?php

require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../models/BusinessProposalModel.php";

function create($recipient, $company, $proposalHandler, $number, $date, $value, $cnpj, $type, $paymentType, $schedule, $scope, $confidentialityText, $tributesText, $generalConditionText, $finalResultsText, $scheduleText, $proposalPresentationText, $proposalTitle) {
    $bp = new BusinessProposalModel();
    $bp->setRecipient($recipient);
    $bp->setCompany($company);
    $bp->setProposalHandler($proposalHandler);
    $bp->setNumber($number);
    $bp->setDate($date);
    $bp->setValue($value);
    $bp->setCnpj($cnpj);
    $bp->setType($type);
    $bp->setPaymentType($paymentType);
    $bp->setSchedule($schedule);
    $bp->setScope($scope);
    $bp->setConfidentialityText($confidentialityText);
    $bp->setTributesText($tributesText);
    $bp->setGeneralConditionText($generalConditionText);
    $bp->setFinalResultsText($finalResultsText);
    $bp->setScheduleText($scheduleText);
    $bp->setProposalPresentationText($proposalPresentationText);
    $bp->setProposalTitle($proposalTitle);

    $bpRepository = new BusinessProposalRepository();
    $id = $bpRepository->create($bp);
    $bp->setId($id);
}