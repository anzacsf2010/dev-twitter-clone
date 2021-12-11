<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="#">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Developer's Twitter Webapp</title>
        <link rel="stylesheet" type="text/css" href="../static/styles/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand sticky-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand">Developer's Twitter</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="navbar-brand">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=timeline">Your timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=yourtweets">Your tweets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=publicprofiles">Public views</a>
                        </li>
                    </ul>
                    <div class="form-inline pull-xs-right">
                        <?php if ($_SESSION['id']) { ?>
                            <a class="btn btn-outline-danger" href="?function=logout">Logout</a>
                        <?php } else { ?>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#MyModal">Sign Up / Login</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </nav>

