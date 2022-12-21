<?php require_once 'core/boot.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
   
<?php include 'inc/header.php'; ?>
<?php include 'inc/banner.php'; ?>
    <div class="container mt-5">
        <div class="row product">
            <?php $product_list = get_all_products() ?>
            <?php foreach ($product_list as $product) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                        <div class="card-top">
                           <a href="./product-detail.php?id=<?php echo $product['id'];?>">
                           <img src="<?php echo $product['img']?>" alt="">
                           </a>
                        </div>
                        <div class="card-body">
                            <h3><?php echo $product['name']?></h3>
                            <p>price: <small><?php echo $product['price']?></small>$</p>
                            <a href="./product-detail.php?id=<?php echo $product['id'];?>" class="boder">View more</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div> 
    </div>
    <div class="main-banner">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-banner-top"><img src="img/00fc27e6e769a1c404a49de0d3f12901.jpeg" alt=""></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-banner-body">
                <div class="text-main-banner">
                    <h2 class="text-main-banner-top">Shoei Ex-Zero Helmet Review</h2>
                    <h5 class="text-main-banner-body">AN UPDATED VERSION OF SHOEI'S 1980s' OFF-ROAD HELMET</h5>
                    <p class="u-text u-text-3">&nbsp; &nbsp;The off-road helmet with its large, open-visor aperture and extended
                        nose piece was invented by Bell back in the 1970s. Known even then as the Moto 3, every modern, off-road
                        helmet still carries elements of
                        the original’s DNA.<br>&nbsp; &nbsp;Back in the day, everybody jumped on the bandwagon and, within a few
                        years, most helmet manufacturers had their own version of a Moto 3; including, of course, players like Arai
                        and
                        Shoei.</p>
                    <a href="" class="boder">View more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-banner">
        <div class="footer-banner-img"><img src="img/Bo-doi-sieu-pham-trieu-do-Lamborghini-Sian-cap-ben-Anh-Quoc-s--3--1612086919-127-width660height440.jpg" alt=""></div>
    </div>
    <div class="media">
        <div class="media-content">
            <h2 class="content-media-top">New Helmet Collection</h2>
            <h5 class="content-media-body">enjoy the ride</h5>
            <p class="u-text-3">Now, last year, Bell re-introduced their Moto 3, as a way of combatting all those artisanal
                makers who were copying it. There was, and is, nothing wrong with the Bell helmet, per se. But unlike some of
                the larger manufacturers who
                have different head fits for the American, European and Asian markets, Bell produces only one fit. It’s a rather
                round, American fit, and not everybody over here gets on with it. In fact, we reckon nearly 50% of visitors to
                our
                shop in Guildford fail to make a Bell work for them. Which is a shame, because no brand has a heritage to equal
                Bell’s.</p>
            <a href="" class="boder boder1">View more</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 content-right mb-2">
                <div>
                    <h1>Neotec II</h1>
                    <span>STARTING AT $699.00</span>
                    <p>An every-occasion helmet with the adaptability to excel no matter where your next journey takes you, the
                        NEOTEC II does it all with style and precision. The convenient “flip-up” versatility of a true two-in-one
                        helmet combined with next-level aerodynamics, an internal sun shield, the Pinlock® EVO fog-resistant system,
                        and the ability to seamlessly integrate with the all-new SENA SRL Communication System, the NEOTEC II is the
                        pinnacle of modular helmet design for today’s hybrid motorcyclists.</p>
                    <a href="" class="boder">view more</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 img-left"></div>
        </div>
    </div>
    <div class="main-footer">
        <h1 class="text-center pt-3">What's In The Box</h1>
    </div>
    <div class="footer">
        <div class="footer-content"><img src="img/6cc4627e101bf92ddf910f98fb639991.png" alt="">
            <h3 class="u-custom-font u-font-trebuchet-ms u-text u-text-1">Send us a note and we’ll get back to you as quickly as possible.</h3>
            <form action="#" id="form-wrap">
                <div class="row form-group">
                    <div class="col-md-12 mb-2">
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                </div>
                <div class="row form-group mb-2">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="email" placeholder="Enter a valid mail address">
                    </div>
                </div>
                <div class="row form-group mb-2">
                    <div class="col-md-12">
                        <textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Enter your message"></textarea>
                    </div>
                </div>
                <div class="row form-group mt-2">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-outline-dark btn-lg" value="Submit Form">
                    </div>
                </div>

            </form>

        </div>

    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>