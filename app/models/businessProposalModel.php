<?php

    class businessProposalModel {

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
        

        /**
         * Get the value of recipient
         */ 
        public function getRecipient()
        {
                return $this->recipient;
        }

        /**
         * Set the value of recipient
         *
         * @return  self
         */ 
        public function setRecipient($recipient)
        {
                $this->recipient = $recipient;

                return $this;
        }

        /**
         * Get the value of company
         */ 
        public function getCompany()
        {
                return $this->company;
        }

        /**
         * Set the value of company
         *
         * @return  self
         */ 
        public function setCompany($company)
        {
                $this->company = $company;

                return $this;
        }

        /**
         * Get the value of proposalHandler
         */ 
        public function getProposalHandler()
        {
                return $this->proposalHandler;
        }

        /**
         * Set the value of proposalHandler
         *
         * @return  self
         */ 
        public function setProposalHandler($proposalHandler)
        {
                $this->proposalHandler = $proposalHandler;

                return $this;
        }

        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }
    }

?>