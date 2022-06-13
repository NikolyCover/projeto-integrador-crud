<?php

    class Activity {
        private string $description;
        private int $duration;

        public function getDescription()
        {
                return $this->description;
        }

        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        public function getDuration()
        {
                return $this->duration;
        }

        public function setDuration($duration)
        {
                $this->duration = $duration;

                return $this;
        }
    }

?>