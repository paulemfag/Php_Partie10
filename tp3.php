<?php
$page = 'TP 3';
include 'header.php';
?>
<div class="container col-10">
    <table class="table mt-5">
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
        foreach($portrait1 as $key => $value){
            if($key == 'portrait'){
                $portrait1['portrait'] = '<img src="' .$value. '" height="50" width="50">';
            }
        }
        foreach($portrait2 as $key => $value){
            if($key == 'portrait'){
                $portrait2['portrait'] = '<img src="' .$value. '" height="50" width="50">';
            }
        }
        foreach($portrait3 as $key => $value){
            if($key == 'portrait'){
                $portrait3['portrait'] = '<img src="' .$value. '" height="50" width="50">';
            }
        }
        foreach($portrait4 as $key => $value){
            if($key == 'portrait'){
                $portrait4['portrait'] = '<img src="' .$value. '" height="50" width="50">';
            }
        }
        ?>
        <tr><?php
            foreach ($portrait1 as $value) {
                echo '<td>' . $value . '</td>';
            }
            ?></tr>
        <tr><?php
            foreach ($portrait2 as $value) {
                echo '<td>' . $value . '</td>';
            }
            ?></tr>
        <tr><?php
            foreach ($portrait3 as $value) {
                echo '<td>' . $value . '</td>';
            }
            ?></tr>
        <tr><?php
            foreach ($portrait4 as $value) {
                echo '<td>' . $value . '</td>';
            }
            }

            portraits();
            ?>
        </tr>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>
