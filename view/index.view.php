<?php
use ImonesApp\Render;
use ImonesApp\Manager;
use ImonesApp\Tester;
use ImonesApp\Programmer;

$manager1 = new Manager("Tom", "Nemesis", rand(10000000000, 99999999999), "86".rand(1000000, 9999999));
$manager2 = new Manager("John", "F. Kennedy", rand(10000000000, 99999999999), "86".rand(1000000, 9999999));
$dev1 = new Programmer("Manny", "Cromberg", rand(10000000000, 99999999999), "86".rand(1000000, 9999999));
$dev2 = new Programmer("Victor", "Nartisenko", rand(10000000000, 99999999999), "86".rand(1000000, 9999999));
$tester1 = new Tester("Tony", "Montana", rand(10000000000, 99999999999), "86".rand(1000000, 9999999));
$tester2 = new Tester("Motori", "Kishimoto", rand(10000000000, 99999999999), "86".rand(1000000, 9999999));

$dev1->setLastName("Iceberg");
$manager2->setLastName("Ded");
?>

<!DOCTYPE>
<html>
<head>
    <title>Darbuotojai</title>
    <link rel="stylesheet" href="inc/style.css">
</head>
<body>
    <h2>IT Įmonės darbuotojų lentelė</h2>
<table>
    <tr class="yes">
        <th class="y">Vardas</th>
        <th class="y">Pavardė</th>
        <th class="y">Asmens kodas</th>
        <th class="y">Telefono numeris</th>
    </tr>
        <?php
        Render::printData($manager1->showManager());
        Render::printData($manager2->showManager());
        Render::printData($dev1->showDev());
        Render::printData($dev2->showDev());
        Render::printData($tester1->showTester());
        Render::printData($tester2->showTester());
        ?>
</table>
</body>
</html>
