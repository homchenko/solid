<?php
    class Product {

        public $logger;

        public function __construct($logger){
            $this->logger = $logger;
        }

        public function setPrice($price) {
            try {
                // сохраняем цену в БД
            } catch (DbException $e) {
                //$this->logError($e->getMessage());
                $this->logger->logError($e->getMessage());
            }
        }
    }

?>