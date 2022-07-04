<?php

require_once "./vendor/autoload.php";

echo "======================Mallard Duck=========================\n";
(new \DesignPattern\Strategy\Main())->main(new \DesignPattern\Strategy\MallardDuck());
echo "======================RedHead Duck=========================\n";
(new \DesignPattern\Strategy\Main())->main(new \DesignPattern\Strategy\RedheadDuck());
echo "======================Decoy Duck=========================\n";
(new \DesignPattern\Strategy\Main())->main(new \DesignPattern\Strategy\DecoyDuck());
echo "======================Weird Duck=========================\n";
(new \DesignPattern\Strategy\Main())->main(new \DesignPattern\Strategy\WeirdDuck());