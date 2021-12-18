<?php require_once('includes/config.php');?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="DATENSHI REPORTING SYSTEM">
      <meta name="author" content="troke12">
      <title><?php echo $website['name'];?></title>

      <!-- Bootstrap core CSS -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
      <link href="../assets/custom.css" rel="stylesheet">
   </head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm">
<a class="navbar-brand" href="/">
    <img src="https://raw.githubusercontent.com/osu-datenshi/assets/master/logo.png" width="40" height="40" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="osu.php" style="color: #ffffff !important;">osu!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="minecraft.php" style="color: #ffffff !important;">minecraft</a>
      </li>   
    </ul>
    <?php if ( isset($_SESSION['discord']) ):?>
    <li class="nav-item dropdown text-light d-flex">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://cdn.discordapp.com/avatars/<?php echo $_SESSION['discord']['user-id'];?>/<?php echo $_SESSION['discord']['avatar-id'];?>.png" width="40" height="40" class="rounded-circle"> <?php echo $_SESSION['discord']['username'];?>
        </a>
        <div class="dropdown-menu" style="background-color: #a4508b;background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);color:#fff;text-align:center" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" style="background-color: #a4508b;background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);color:#fff;text-align:center" href="logout.php">Logout</a>
        </div>
      </li>
   <?php else:?>
      <a href="login.php" class="btn btn-secondary btn-sm active" style="background-color: #a4508b;background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);" role="button" aria-pressed="true">Login with Discord</a>
   <?php endif;?>
  </div>
</nav>

<main role="main">
    <section class="jumbotron">
        <div class="container">
        <?php if ( isset($_SESSION['discord']) ):?>
        <form>
            <div class="form-group">
                <label for="name" style="color: #ffffff !important;">Username</label>
                <input type="text" class="form-control" id="name" placeholder="cheater1">
            </div>
            <div class="form-group">
                <label for="mode" style="color: #ffffff !important;">Gamemode</label>
                <select class="form-control" id="mode">
                    <option>osu!standard</option>
                    <option>osu!taiko</option>
                    <option>osu!catch</option>
                    <option>osu!mania</option>
                </select>
            </div>
            <div class="form-group">
                <label for="reason" style="color: #ffffff !important;">Reason</label>
                <select class="form-control" id="reason">
                    <option>Multi-account</option>
                    <option>Cheating</option>
                </select>
            </div>
            <div class="form-group">
                <label for="evidence" style="color: #ffffff !important;">Evidence</label>
                <textarea class="form-control" id="evidence" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #a4508b;background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);border: none;">Submit</button>
        </form>
        <?php else:?>
        <div class="alert" style="background-color: #a4508b;background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);border: none;color:#fff;text-align:center" role="alert">
            Sorry you need to login first!
        </div>
        <?php endif;?>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <span class="text-light">© 2021 Datenshi Community</span>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>

