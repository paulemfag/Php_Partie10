<?php
$page = 'TP 2';
include 'header.php';
if (isset($_POST['gender']) 
        && preg_match('/^[A-Z|a-zéèçàïîêëôöûü]+([A-Z|a-z_éèçàïîêëôöûü_ _-])*$/', $_POST['lastname']) 
        && preg_match('/^[A-Z|a-zéèçàïîêëôöûü]+([A-Z|a-z_éèçàïîêëôöûü_ _-])*$/', $_POST['firstname']) 
        && isset($_POST['society'])) {
    ?>
    <div class="container col-4">
        <form method="POST" action="#">
            <div class="form-group">
                <label for="gender">Civilité :</label>
                <select name="gender" id="gender">
                    <option disabled selected value><?= $_POST['gender'] ?></option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastname">Nom : </label>
                <input  type="text" id="lastname" name="lastname" placeholder="<?= $_POST['lastname'] ?>">
            </div>
            <div class="form-group">
                <label for="firstname">Prénom : </label>
                <input  type="text" id="firstname" name="firstname" placeholder="<?= $_POST['firstname'] ?>">
            </div>
            <div class="form-group">
                <label for="age">Age :</label>
                <input name="age" id="age" type="number" min="18" max="99" placeholder="<?= $_POST['age'] ?>">  
            </div>
            <div class="form-group">
                <label for="society">Société :</label>
                <input type="text" name="society" id="society" placeholder="<?= $_POST['society'] ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary col-12 mb-2">
        </form>
    </div>
    <?php echo 'Bonjour ' .$_POST['gender']. ' ' .$_POST['lastname']. ' ' .$_POST['firstname']. ', vous avez ' .$_POST['age']. ' ans et votre société est ' .$_POST['society']. '.';} else { ?>
    <div class="container col-4">
        <form method="POST" action="#">
            <div class="form-group">
                <label for="gender">Civilité :</label>
                <select name="gender" id="gender">
                    <option disabled selected value>-- sélectionner votre civilité : --</option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastname">Nom : </label>
                <input  type="text" id="lastname" name="lastname" placeholder="ex : Valjean">
            </div>
            <div class="form-group">
                <label for="firstname">Prénom : </label>
                <input  type="text" id="firstname" name="firstname" placeholder="ex : Jean">
            </div>
            <div class="form-group">
                <label for="age">Age :</label>
                <input name="age" id="age" type="number" min="18" max="99">  
            </div>
            <div class="form-group">
                <label for="society">Société :</label>
                <input type="text" name="society" id="society">
            </div>
            <input type="submit" name="submit" class="btn btn-primary col-12 mb-2">
        </form>
    </div>
<?php }
include 'footer.php';
?>
