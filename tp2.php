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
                <select name="gender" id="gender" required>
                    <option disabled selected value><?= $_POST['gender'] ?></option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastname">Nom : </label>
                <input  type="text" id="lastname" name="lastname" value="<?= $_POST['lastname'] ?>" required>
            </div>
            <div class="form-group">
                <label for="firstname">Prénom : </label>
                <input  type="text" id="firstname" name="firstname" value="<?= $_POST['firstname'] ?>" required>
            </div>
            <div class="form-group">
                <label for="age">Age :</label>
                <input name="age" id="age" type="number" min="18" max="99" value="<?= $_POST['age'] ?>" required>
            </div>
            <div class="form-group">
                <label for="society">Société :</label>
                <input type="text" name="society" id="society" value="<?= $_POST['society'] ?>" value>
            </div>
            <input type="submit" name="submit" class="btn btn-primary col-12 mb-2">
        </form>
    </div>
    <?php echo 'Bonjour ' .$_POST['gender']. ' ' .$_POST['lastname']. ' ' .$_POST['firstname']. ', vous avez ' .$_POST['age']. ' ans et votre société est ' .$_POST['society']. '.';
  } else { ?>
    <div class="container col-4">
        <form method="POST" action="#">
            <div class="form-group">
                <label for="gender">Civilité :</label>
                <select name="gender" id="gender" required>
                    <option disabled selected value>-- sélectionner votre civilité : --</option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastname">Nom : </label>
                <input  type="text" id="lastname" name="lastname" placeholder="ex : Valjean" required>
            </div>
            <div class="form-group">
                <label for="firstname">Prénom : </label>
                <input  type="text" id="firstname" name="firstname" placeholder="ex : Jean" required>
            </div>
            <div class="form-group">
                <label for="age">Age :</label>
                <input name="age" id="age" type="number" min="18" max="99" required>
            </div>
            <div class="form-group">
                <label for="society">Société :</label>
                <input type="text" name="society" id="society" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary col-12 mb-2">
        </form>
    </div>
<?php }
include 'footer.php';
?>
