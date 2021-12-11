        <footer class="footer">
            <div class="container">
                <p class="text-muted">&copy; Developer's Twitter Webapp -
                    <?php echo date("M Y"); ?>
                </p>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="MyModal" tabindex="-1" aria-labelledby="MyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="LoginTitle">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="modal-body">
                        <div class="alert alert-danger" id="LoginAlert" style="display: none; font-size: small"></div>
                        <p id="RequiredFields" style="color: red; font-size: small">Both Email and Password fields are required!</p>
                        <input type="hidden" name="LoginSignupToggle" id="LoginSignupToggle" value="1">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="e.g. abc@xyz.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <a id="ToggleLogin" href="#">Sign Up</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="LoginButton" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../static/js/toggleLoginStatus.js"></script>
        <script type="text/javascript" src="../static/js/loginSignupForm.js"></script>
        <script type="text/javascript" src="../static/js/toggleFollow.js"></script>
        <script type="text/javascript" src="../static/js/postTweet.js"></script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>

