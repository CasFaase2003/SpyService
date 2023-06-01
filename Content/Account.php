<br>
<br>
<h3>Account Aanmaken</h3>
<br>
<form action="config/AccAanmaak.php" method="post">

    <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <!-- Name input -->
            <div class="display">
                <div class="mb-3">
                    <input class="form-control" name="gebruikersnaam" type="text" placeholder="Gebruikersnaam"
                        required />
                </div>
            </div>

            <!-- FirstName input -->
            <div class="display">
                <div class="mb-3">
                    <input class="form-control" name="voornaam" type="text" placeholder="Voornaam" required />
                </div>
            </div>

            <!-- Wachwoord input -->
            <div class="display">
                <div class="mb-3">
                    <input class="form-control" name="wachtwoord" type="password" placeholder="Wachtwoord" required />
                </div>
            </div>
            <input type="submit" name="submit" class="LoginButton"></input>&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://localhost/SpyService/Login">Ik heb al een account</a>
        </div>
        <div class="col-sm"></div>
    </div>
    </div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>