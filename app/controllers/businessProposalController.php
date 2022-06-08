<?php

require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../models/BusinessProposalModel.php";

function create($recipient, $company, $proposalHandler, $number, $date, $value, $cnpj, $type, $paymentType, $schedule, $scope, $confidentialityText, $tributesText, $generalConditionText, $finalResultsText, $scheduleText, $proposalPresentationText, $proposalTitle) {
    $businessProposal = new BusinessProposalModel();
    $businessProposal->setRecipient($recipient);
    $businessProposal->setCompany($company);
    $businessProposal->setProposalHandler($proposalHandler);
    $businessProposal->setNumber($number);
    $businessProposal->setDate($date);
    $businessProposal->setValue($value);
    $businessProposal->setCnpj($cnpj);
    $businessProposal->setType($type);
    $businessProposal->setPaymentType($paymentType);
    $businessProposal->setSchedule($schedule);
    $businessProposal->setScope($scope);
    $businessProposal->setConfidentialityText($confidentialityText);
    $businessProposal->setTributesText($tributesText);
    $businessProposal->setGeneralConditionText($generalConditionText);
    $businessProposal->setFinalResultsText($finalResultsText);
    $businessProposal->setScheduleText($scheduleText);
    $businessProposal->setProposalPresentationText($proposalPresentationText);
    $businessProposal->setProposalTitle($proposalTitle);
}