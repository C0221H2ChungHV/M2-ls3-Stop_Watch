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
            $this->startTime = microtime(true);

        }
        public function stop()
        {
            $this->endTime = microtime(true);
        }
        public function getElapsedTime()
        {
            return $this->endTime - $this->startTime;
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $time = new StopWatch();
    $array = [];
    for($i=0;$i<10000;$i++) {
        $array[] = rand(1, 10000);
    }
    $time->start();
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$i])
                $min = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $min;
            }
    }
    $time->stop();
    echo "So mili giay troi qua: ".$time->getElapsedTime();
?>
</body>
</html>
