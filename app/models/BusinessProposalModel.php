<?php

    class BusinessProposalModel {

        private $recipient;
        private $company;
        private $proposalHandler;
        private $number;
        private $date;
        private $value;
        private $cnpj;
        private $type;
        private $paymentType;
        private $schedule = array();
        private $scope;
        private $confidentialityText;
        private $tributesText;
        private $generalConditionText;
        private $finalResultsText;
        private $scheduleText;
        private $proposalPresentationText;
        private $proposalTitle;
        
        public function getRecipient()
        {
                return $this->recipient;
        }

        public function setRecipient($recipient)
        {
                $this->recipient = $recipient;

                return $this;
        }

        public function getCompany()
        {
                return $this->company;
        }

        public function setCompany($company)
        {
                $this->company = $company;

                return $this;
        }

        public function getProposalHandler()
        {
                return $this->proposalHandler;
        }

 
        public function setProposalHandler($proposalHandler)
        {
                $this->proposalHandler = $proposalHandler;

                return $this;
        }

        public function getNumber()
        {
                return $this->number;
        }

        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }

        public function getDate()
        {
                return $this->date;
        }

        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        public function getValue()
        {
                return $this->value;
        }

        public function setValue($value)
        {
                $this->value = $value;

                return $this;
        }

        public function getCnpj()
        {
                return $this->cnpj;
        }

        public function setCnpj($cnpj)
        {
                $this->cnpj = $cnpj;

                return $this;
        }

        public function getType()
        {
                return $this->type;
        }

        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        public function getPaymentType()
        {
                return $this->paymentType;
        }

        public function setPaymentType($paymentType)
        {
                $this->paymentType = $paymentType;

                return $this;
        }

        public function getSchedule()
        {
                return $this->schedule;
        }

        public function setSchedule($schedule)
        {
                $this->schedule = $schedule;

                return $this;
        }

        public function getScope()
        {
                return $this->scope;
        }

        public function setScope($scope)
        {
                $this->scope = $scope;

                return $this;
        }

        public function getConfidentialityText()
        {
                return $this->confidentialityText;
        }

        public function setConfidentialityText($confidentialityText)
        {
                $this->confidentialityText = $confidentialityText;

                return $this;
        }

        public function getTributesText()
        {
                return $this->tributesText;
        }

        public function setTributesText($tributesText)
        {
                $this->tributesText = $tributesText;

                return $this;
        }

        public function getGeneralConditionText()
        {
                return $this->generalConditionText;
        }

        public function setGeneralConditionText($generalConditionText)
        {
                $this->generalConditionText = $generalConditionText;

                return $this;
        }

        public function getFinalResultsText()
        {
                return $this->finalResultsText;
        }

        public function setFinalResultsText($finalResultsText)
        {
                $this->finalResultsText = $finalResultsText;

                return $this;
        }

        public function getScheduleText()
        {
                return $this->scheduleText;
        }

        public function setScheduleText($scheduleText)
        {
                $this->scheduleText = $scheduleText;

                return $this;
        }

        public function getProposalPresentationText()
        {
                return $this->proposalPresentationText;
        }

        public function setProposalPresentationText($proposalPresentationText)
        {
                $this->proposalPresentationText = $proposalPresentationText;

                return $this;
        }

        public function getProposalTitle()
        {
                return $this->proposalTitle;
        }

        public function setProposalTitle($proposalTitle)
        {
                $this->proposalTitle = $proposalTitle;

                return $this;
        }
    }

?>