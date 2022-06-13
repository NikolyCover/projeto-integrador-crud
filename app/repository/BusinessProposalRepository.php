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
                
            }
        }
    }