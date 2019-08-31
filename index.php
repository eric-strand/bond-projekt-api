<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bond project API test</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div style="background-color: #e3e7ea">
<div class="container">
    <h1 style="padding-top:20px">Bond Project API test</h1>

    <p>The defualt settings for the search are:</p>

    <ol>
        <li><i>Google News</i></li>
        <li><i>All locations in Sweden</i></li>
        <li><i>Articles will be in Swedish</i></li>
    </ol>

    <form method="POST" action="app.php" style="padding-bottom:25px">
        <div class="form-group">
            <label for="queryInput">Query keyword</label>
            <input name="query" type="text" class="form-control w-25" id="queryInput" aria-describedby="queryHelp" placeholder="Enter a query keyword">
            <small id="queryHelp" class="form-text text-muted">Ex. try "Aspect Properties", "Hallarnas Bygg" or "Koggbron"</small>
        </div>

        <button type="submit" class="btn btn-primary">Get API result</button>
    </form>
</div>
</div>

<div class="container">
    <p><?php echo $_SESSION['data']; ?></p>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--<script src="app.js"></script>-->
</body>
</html>

