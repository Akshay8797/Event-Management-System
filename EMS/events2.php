<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EMS :: Events</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">June</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/bdayevent.jpg" height="400px" width="400px" class="img-responsive img-thumbnail">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Rohit's Birthday</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                                Private Dining Room, Park Street, Mumbai
                            </p>
                            <p class="definition"><!--event content definition-->
                                Rohit Kumar of Pune, Maharashtra welcomes everyone to his grand birthday celeberation
                                on 20th July 2020 at Park Street, Mumbai. 
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-primary btn-lg" onclick="DetailsFun()"><!--view details button (no function implemented)-->
                                View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">June</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">28</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/fashevent.jpg" height="400px" width="400px" class="img-responsive img-thumbnail">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Dress to Impress</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                                Ananas Bar & Brasserie, Cubbon Park, Bengaluru
                            </p>
                            <p class="definition"><!--event content definition-->
                                One of the most popular fashion event of India is back!...<br>
                                Dress To Impress this season brings fashion to a whole new level, The winner
                                of this season would be awarded a sum of 3 Lakhs INR.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-primary btn-lg" onclick="DetailsFun()"><!--view details button (no function implemented)-->
                                View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">July</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">10</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/wedevent.jpg" height="400px" width="400px" class="img-responsive img-thumbnail">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Randhawa's 10th Anniversary</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                                Munich Brauhaus South Wharf, Dharavi, Mumbai
                            </p>
                            <p class="definition"><!--event content definition-->
                                The Randhawa Family wants each one of their guests to share their's joy as they
                                celebrate the 10th Anniversary of their son and daughter.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-primary btn-lg" onclick="DetailsFun()"><!--view details button (no function implemented)-->
                                View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">July</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">18</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/meetevent.jpg" height="400px" width="400px" class = "img-responsive img-thumbnail">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Career Talk</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                                Private Dining Room, Park Street, Mumbai
                            </p>
                            <p class="definition"><!--event content definition-->
                                The MNC's from all around the Globe are coming together to discuss about the Global Economic
                                Crisis in every corner of the world and also share some of their opinions and their future strategy.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-primary btn-lg" onclick="DetailsFun()"><!--view details button (no function implemented)-->
                                View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
                <script>
                    function DetailsFun() {
                        alert("For More Details Contact Us On Social Media");
                    }
                </script>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
