<?php
    class StopWatch {
        private $startTime;
        private $endTime;
        public function getStarttime()
        {
            return $this->startTime;
        }
        public function getEndTime()
        {
            return $this->endTime;
        }
        public function start()
        {
            $this->statrTime = date_default_timezone_set('Asia/Ho_Chi_Minh');
        }
        public function stop()
        {
            $this->endTime = date_default_timezone_set('Asia/Ho_Chi_Minh');
        }
        public function getElapsedTime()
        {

        }
    }
?>
