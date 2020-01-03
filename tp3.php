<?php
$page = 'TP 3';
include 'header.php';
?>
<div class="container col-10">
    <table class="table">
        <thead class="thead-dark">
        <th>Prénom :</th>
        <th>Nom :</th>
        <th>Photo :</th>
        </thead>
        <tbody class="bg-secondary">
            <?php

            function portraits() {
                $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
                $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
                $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
                $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
//    if (preg_match('/^(http)(.)*$/', $value){
//    $value2 = '<img src="'$value'">';
//    }
//    foreach (preg_match('/^(http)(.)*$/', $portrait1 as $value){
//        $value = '<img src="'$value'">';
//    }
                ?><tr><?php
//        foreach ($value as $portrait) {
//            $value = '<img src="'$value'">';
//        }
                    foreach ($portrait1 as $value) {
                        echo '<td>' . $value . '</td>';
                    }
                    ?></tr><tr><?php
                    foreach ($portrait2 as $value) {
                        echo '<td>' . $value . '</td>';
                    }
                    ?></tr><tr><?php
                        foreach ($portrait3 as $value) {
                            echo '<td>' . $value . '</td>';
                        }
                        ?></tr><tr><?php
                        foreach ($portrait4 as $value) {
                            echo '<td>' . $value . '</td>';
                        }
                        ?></p><?php
                    }

                    portraits();
                    ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>
