<div class="container">
    <br><br>
    <h4>Documenten</h4>
    U moet ingelogd zijn om de geheime documenten te bekijken
    <br><br>
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <form action="config/db_config.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>
                <!-- Name input -->
                <div class="display">
                    <div class="mb-3">
                        <input class="form-control" name="Naam" type="text" placeholder="Gebruikersnaam" />
                    </div>
                </div>
                <br>
                <!-- Wachwoord input -->
                <div class="display">
                    <div class="mb-3">
                        <input class="form-control" name="Wachtwoord" type="password" placeholder="Wachtwoord" />
                    </div>
                </div>
                <br>
                <input type="submit" href="Document" name="Submit" class="LoginButton"></input> &nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://localhost/SpyService/Account">Maak Account Aan</a>
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>
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
<br>
<br>