<?php

    require_once __DIR__ . "/../connection/Connection.php";
    require_once __DIR__ . "/../models/BusinessProposalModel.php";

    class BusinessProposalRepository {
        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(BusinessProposalModel $bp) {
            
            try {
                $query = "INSERT INTO `businessproposals` (" .
                "`company`,".
                "`proposalHandler`,".
                "`number`,".
                "`date`,".
                "`value`,".
                "`cnpj`,".
                "`type`,".
                "`paymentType`,".
                "`scope`,".
                "`confidentialityText`,".
                "`tributesText`,".
                "`generalConditionText`,".
                "`finalResultsText`,".
                "`scheduleText`,".
                "`proposalPresentationText`,".
                "`proposalTitle`,".
                "`recipient`)".
                "VALUES(
                :company,
                :proposalHandler,
                :number,
                :date,
                :value,
                :cnpj,
                :type,
                :paymentType,
                :scope,
                :confidentialityText,
                :tributesText,
                :generalConditionText,
                :finalResultsText,
                :scheduleText,
                :proposalPresentationText
                :proposalTitle,
                :recipient";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":company", $bp->getCompany());
            $prepare->bindValue(":proposalHandler", $bp->getProposalHandler());
            $prepare->bindValue(":number", $bp->getNumber());
            $prepare->bindValue(":date", $bp->getDate());
            $prepare->bindValue(":value", $bp->getValue());
            $prepare->bindValue(":cnpj", $bp->getCnpj());
            $prepare->bindValue(":type", $bp->getType());
            $prepare->bindValue(":paymentType", $bp->getPaymentType());
            $prepare->bindValue(":scope", $bp->getScope());
            $prepare->bindValue(":confidentialityText", $bp->getConfidentialityText());
            $prepare->bindValue(":tributesText", $bp->getTributesText());
            $prepare->bindValue(":generalConditionText", $bp->getGeneralConditionText());
            $prepare->bindValue(":finalResultsText", $bp->getFinalResultsText());
            $prepare->bindValue(":scheduleText", $bp->getScheduleText());
            $prepare->bindValue(":proposalPresentationText", $bp->getProposalPresentationText());
            $prepare->bindValue(":proposalTitle", $bp->getProposalTitle());
            $prepare->bindValue(":recipient", $bp->getRecipient());
            $prepare->execute();

            return $this->conn->lastInsertId();

            } catch(Exception $e) {
                print("Error inserting business proposal in database");
            }
        }

        public function findAll(): array {

            $table = $this->conn->query("SELECT * FROM `businessproposals`");
            $bps  = $table->fetchAll(PDO::FETCH_ASSOC);
        
            return $bps;
        }

        
        public function update(BusinessProposalModel $bp) {

            $query = "UPDATE `businessproposals` SET 
                    company = :company,
                    proposalHandler = :proposalHandler,
                    number = :number,
                    date = :date,
                    value = :value,
                    cnpj = :cnpj,
                    type = :type,
                    paymentType = :paymentType,
                    scope = :scope,
                    confidentialityText = :confidentialityText,
                    tributesText = :tributesText,
                    generalConditionText = :generalConditionText,
                    finalResultsText = :finalResultsText,
                    scheduleText = :scheduleText,
                    proposalPresentationText = :proposalPresentationText,
                    proposalTitle = :proposalTitle,
                    recipient = :recipient,
                    WHERE id = :id";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":company", $bp->getCompany());
            $prepare->bindValue(":proposalHandler", $bp->getProposalHandler());
            $prepare->bindValue(":number", $bp->getNumber());
            $prepare->bindValue(":date", $bp->getDate());
            $prepare->bindValue(":value", $bp->getValue());
            $prepare->bindValue(":cnpj", $bp->getCnpj());
            $prepare->bindValue(":type", $bp->getType());
            $prepare->bindValue(":paymentType", $bp->getPaymentType());
            $prepare->bindValue(":scope", $bp->getScope());
            $prepare->bindValue(":confidentialityText", $bp->getConfidentialityText());
            $prepare->bindValue(":tributesText", $bp->getTributesText());
            $prepare->bindValue(":generalConditionText", $bp->getGeneralConditionText());
            $prepare->bindValue(":finalResultsText", $bp->getFinalResultsText());
            $prepare->bindValue(":scheduleText", $bp->getScheduleText());
            $prepare->bindValue(":proposalPresentationText", $bp->getProposalPresentationText());
            $prepare->bindValue(":proposalTitle", $bp->getProposalTitle());
            $prepare->bindValue(":recipient", $bp->getRecipient());
            $prepare->bindValue(":id", $bp->getId());
            $prepare->execute();
        }

        public function deleteById($id) {

            $query = "DELETE FROM `businessproposals` WHERE id = :id";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":id", $id);
            $prepare->execute();
        }
    }