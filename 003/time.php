<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Stopwatch {
            private $starttime;
            private $stoptime;
            public function getstarttime(){
                return $this->starttime;
            }
            public function getstoptime(){
                return $this->stoptime;
            }
            public function start(){
                $this->starttime=microtime(true);
            }
            public function stop(){
                $this->stoptime=microtime(true);
            }
            public function display(){
                echo $this->stoptime - $this->starttime;
            }
        }

        $time=new Stopwatch();
        $time->start();
        usleep(10000000);
        $time->stop();
        $time->display();
        // $starttime=microtime(true);
        // usleep(1000000);
        // $stoptime=microtime(true);
        // echo $starttime."<br>";
        // echo $stoptime;

    ?>
</body>
</html>