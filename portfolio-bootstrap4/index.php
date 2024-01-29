<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCACezGHtW1zc7jU6pxqe6GA&key=AIzaSyD0fralpvxyLm2zl7nsK5__IseKBw45fF8');

$youtubeProfilePicture = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subcriber = $result['items'][0]['statistics']['subscriberCount'];


// ini untuk lates video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyD0fralpvxyLm2zl7nsK5__IseKBw45fF8&channelId=UCACezGHtW1zc7jU6pxqe6GA&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--My CSS-->
  <style>
    section {
      min-height: 420px;
    }
  </style>

  <link rel="stylesheet" href="css/style.css">


  <title>Portfolio</title>
</head>

<body>

  <nav class="navbar fix-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">PORTFOLIO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item nav-link" href="#">Portfolio</a>
          <a class="nav-item nav-link disabled" href="#">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="img/profile.png" width="25%" class="rounded-circle img-thumbnail">
      <h1 class="display-4">Aziz Nurul Hidayat</h1>
      <p class="lead">System Analyst, Web Developer,Front End Developer, Peneliti & Surveyor</p>
    </div>
  </div>

  <section class="about" id="about">
    <div class="container">
      <div class="row mb-4">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, veritatis accusamus? Repellat quos in hic nam magnam vero! Minus delectus voluptatum commodi unde possimus iusto aliquam soluta aliquid quos explicabo?</p>
          </div>
          <div class="col-md-5 text-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, error ea voluptatibus blanditiis dolorum aliquid rerum porro, temporibus obcaecati aspernatur tenetur impedit assumenda corrupti dicta rem! Nostrum quos labore harum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sosial" class="cosial bg-light ">
    <div class="container">
      <div class="row pt-4">
        <div class="col-md-12 text-center">
          <h2>Sosial Media</h2>
          <hr>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="<?= $youtubeProfilePicture; ?>" width="200" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5><?= $channelName; ?></h5>
              <p><?= $subcriber; ?> Subcriber.</p>
              <div class="g-ytsubscribe" data-channelid="UCACezGHtW1zc7jU6pxqe6GA" data-layout="default" data-count="default"></div>
            </div>
          </div>
          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId ?>?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfoliopb-4">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col-md-12">
          <h2 class="text-center">Portfolio</h2>
          <hr>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/1.png">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/2.png">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/3.png">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/4.png">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/5.png">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/6.png">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact mb-5 bg-light ">
    <div class="container">
      <div class="row mt-4 pb-4">
        <div class="col-md-12 text-center">
          <h2>Contact</h2>
          <hr>
        </div>
      </div>
      <div class="row  justify-content-center ">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, non!</p>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item">
              <h1>Location</h1>
            </li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Perum Mustika Cipaku Blok F9, Kabupaten Bandung</li>
            <li class="list-group-item">Jawa Barat, Indonesia</li>
          </ul>
        </div>
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="telp">No Telepon</label>
              <input type="text" class="form-control" id="telp">
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea name="pesan" id="pesan" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white">

    <div class="container text-center">
      <div class="row pt-3">
        <div class="col-md-12">
          <p>Copyright 2023.</p>
        </div>
      </div>
    </div>

  </footer>









  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>