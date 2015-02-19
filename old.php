<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Go Print &amp; Design | Print, Media &amp; Design Solutions</title>

    <link href="assets/vendor/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="assets/stylesheets/style.less" rel="stylesheet/less" type="text/css" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">

      <section class="go--intro">
        <div class="go-logo">
          <img src="assets/images/logo.svg" />

          <div class="container">
            <h1 class="go-tag">
              Print, Media &amp; Design solutions across North West
            </h1>
          </div>
        </div>

        <nav class="navbar" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a href="#top">Go Print &amp; Design</a>
            </div>

            <ul class="nav navbar-nav">
              <li>
                <a href="#about">
                  <i class="visible-xs fa fa-umbrella"></i>
                  <span class="hide-affix">About Us</span>
                </a>
              </li>
              <li>
                <a href="#services">
                  <i class="visible-xs fa fa-gear"></i>
                  <span class="hide-affix">Our Services</span>
                </a>
              </li>
              <li>
                <a href="#team">
                  <i class="visible-xs fa fa-sitemap"></i>
                  <span class="hide-affix">Meet the Team</span>
                </a>
              </li>
              <li>
                <a href="#contact">
                  <i class="visible-xs fa fa-envelope-o"></i>
                  <span class="hide-affix">Get in Touch</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </section>

      <div class="go-bg-1">
        <div class="col-sm-6 col-sm-offset3"></div>
      </div>

      <section id="about" class="go--about">
        <div class="container">
          <h1>About Go Print &amp; Desgin</h1>

          <p>
            We are full service print broker based in North West. We offer a wide range of print
            from paper to vinyl.
          </p>

          <p>
            The team look into each customers enquiries and match their needs and requirements to a
            product and service to suit the job. We tailor each job to use specialist printers and designers
            to meet the specification required, being cost effective and maximizing our knowledge to offer
            the best possible service to our customers.
          </p>
        </div>
      </section>

      <section id="services" class="go--services">
        <div class="container">
          <h1>Our Products &amp; Services</h1>


        </div>
      </section>

      <section id="team" class="go--team">
        <div class="container-fluid">
          <div class="row">

            <?php include("team.php");?>
            <?php foreach( $members as $member ) { ?>

              <div class="col-sm-3">

                <a href="#show-more" class="more">
                  <img class="img-responsive" src="assets/images/team/<?=$member["firstname"];?>.jpg" alt="<?=$member["firstname"] . ' ' . $member["lastname"];?>">
                  <i class="fa fa-eye"></i>
                </a>

                <h2><?=$member["firstname"] . ' ' . $member["lastname"];?></h2>
                <p><?=$member["role"];?></p>

                <div class="col-sm-9 hide">
                  <a href="#meet-team" class="close"><i class="fa fa-times"></i></a>
                  <p> <?=$member["description"];?> </p>

                  <div class="social">
                    <p>Connect with <?=$member["firstname"];?></p>

                    <?php foreach( $member["social"] as $networks ) { ?>

                      <a data-toggle="tooltip" data-placement="top" href="<?=$networks['url'] . $networks['id'];?>" class="btn btn-lg btn-outline btn-circle btn-<?=$networks['name'];?>" title="<?=$networks['title'];?>">
                        <i class="fa fa-<?=$networks['name'];?>"></i>
                      </a>

                    <?php } ?>

                  </div>
                </div>
              </div>

            <?php } ?>

          </div>
        </div>
      </section>

<!--       <div class="go-bg-4">
        <div class="col-sm-6 col-sm-offset3"></div>
      </div> -->

      <section class="go--social">
        <div class="go--body">
          <div class="container">
            <div class="row">
              <div class="hidden-xs col-sm-9">
                <h3>Stay connected</h3>
              </div>

              <div class="col-sm-12 col-sm-3">
                <ul class="list-inline social-icons">
                  <li>
                    <a class="btn btn-circle btn-facebook" href="https://www.facebook.com/equusfirst?fref=website">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>

                  <li>
                    <a class="btn btn-circle btn-twitter" href="https://twitter.com/Equus_First?ref=website">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 social social--facebook">
                <div class="row social_head">
                  <div class="col-sm-12">
                    <h3><i class="fa fa-facebook-square"></i> Go Print &amp; Design</h3>
                  </div>
                </div>

                <div class="row social_body">
                  <div class="col-sm-12">

                    <?php include "sdk/facebook/feed.php"; ?>

                  </div>
                </div>
              </div>

              <div class="col-sm-6 social social--twitter">
                <div class="row social_head">
                  <div class="col-sm-12">
                    <h3><i class="fa fa-twitter"></i> @GOPrintdesign1</h3>
                  </div>
                </div>

                <div class="row social_body">
                  <div class="col-sm-12">

                    <?php include "sdk/twitter/feed.php"; ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="go--contact">
        <div class="container">
          <div class="row">

          </div>
        </div>
      </section>
    </div>

    <footer>
      <div class="container">

        <img class="img-responsive" src="assets/images/studio51.png" alt="Development &amp; Design by Studio51 Creative Services" title="Development &amp; Design by Studio51 Creative Services" />
      </div>
    </footer>

    <script src="assets/vendor/jquery.js"></script>
    <script src="assets/vendor/less.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/javascript/go.js"></script>

    <script>
      less.watch();
    </script>
  </body>
</html>
