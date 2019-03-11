<!DOCTYPE html>
<html lang="en">
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/datetimepicker.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="container">

    <header>
        <h1>My blog</h1>
    </header>

    <nav>
      <ul class="nav">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <?php if (Auth::isLoggedin()) : ?>

              <li class="nav"><a class="nav-link" href="/admin">Admin</a></li>
              <li class="nav"><a class="nav-link"href="/logout.php">Logout</a></li>

          <?php else : ?>

              <li class="nav"><a class="nav-link" href="/login.php">Login</a></li>

          <?php endif; ?>

          <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
                    
      </ul>
    </nav>

    <main>
