




    <!-- Intégration du header -->
    <?php include_once('header.php'); ?>

        <h2 class="text-center mb-4">INSCRIPTION</h2>
        <form class="container">
            <div class="form-group">
                <label for="inputPseudo">Email address</label>
                <input type="text" class="form-control" id="inputPseudo" aria-describedby="emailHelp" placeholder="Pseudo">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label for="inputConfirmPassword">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </main>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>