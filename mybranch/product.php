<?php
    class Product {
        public function setPrice($price) {
            try {
                // сохраняем цену в БД
            } catch (DbException $e) {
                Logger::logError($e->getMessage());
            }
        }
    }

?>