<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmocast</title>
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet">
</head>

<body>
    <?php include "navbar.php"; ?>
    <section>
        <div class="jumbotron text-center mt-2 heroBg" id="Home">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="img-fluid" src="/images/hero-logo-transp.png" alt="">
                        <p class="sub-title pt-5">We are here to revolutionize the Space technology industry,
                            democratize access to space technology and satellite data</p>

                    </div>
                </div>
            </div>
        </div>

        <a onclick="location.href='#About'" class="scroll-down"></a>

    </section>
    <section>
        <div class="container sectionSeperator" id="About">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>About us</h1>
                    <p>With the space economy generating close to a third of a trillion dollars globally each year and
                        headed to being a trillion-dollar economy, it's clear a new generation of risks and
                        opportunities are created.</p>
                    <p>As commercial space ventures and newly-formed space agencies from every corner of the globe
                        compete for their place in the emerging economy, Cosmocast is here to assist and address risks
                        and opportunities.</p>
                    <p>We help you accelerate your efforts to reduce your time-to-insight, empower & extend your
                        internal capabilities, and maximize your business value through our services.</p>
                    <p><strong>Our mission is to democratize access to space technology and satellite data.</strong></p>
                    <p>Moreover, with Cosmocast, you can find and listen to the world's best space podcast.</p>
                    <button type="button" class="btn primeBtn" onclick="location.href='/cosmocast/service_homepage.php'">See our
                        services</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container sectionSeperator" id="Products">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Services</h1>
                    <p?>Our professional services team helps you accelerate your efforts to reduce your time-to-insight,
                        empower & extend your internal capabilities, and maximize your business value.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6 col-12 text-center pt-5">
                    <img class="img-fluid imgShadow" src="/images/wshop-400x400.jpeg" alt="">
                    <h4 class="pt-5">Space Technology</h4>
                    <h6>Our broad area of expertise is focused on space and its applications. Nevertheless, we believe
                        in cross-fertilisation of industry’s best practices and our consultants have gained experience
                        in other sectors as well</h6>
                </div>
                <div class="col-md-6 col-12 text-center mt-md-0 mt-2 pt-5">
                    <img class="img-fluid imgShadow" src="/images/bc-400x400.jpeg" alt="">
                    <h4 class="pt-5">Sky View</h4>
                    <h6>We provide satellite data that helps businesses and researchers understand the physical world
                        and take action. We are here to revolutionize the Earth observation industry and democratizing
                        access to satellite data</h6>
                </div>
                <div class="col-md-6 col-12 text-center pt-5">
                    <img class="img-fluid imgShadow" src="/images/pod-400x400.jpeg" alt="">
                    <h4 class="pt-5">Podcasts</h4>
                    <h6>Listen to all our space podcast for free on all leading platforms</h6>
                </div>
                <div class="col-md-6 col-12 text-center mt-md-0 mt-2 pt-5">
                    <img class="img-fluid imgShadow" src="/images/events-400x400.png" alt="">
                    <h4 class="pt-5">Events</h4>
                    <h6>Attend our live events like stargazing, solar eclipse and much more</h6>
                </div>
            </div>
        </div>

        <div class="col-12 text-center">
              <button type="button" class="btn primeBtn" onclick="location.href='/cosmocast/service_homepage.php'">See our services</button>
        </div>


    </section>
    <section>
        <div class="container sectionSeperator" id="News">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Latest News at Cosmocast</h1>
                </div>
                <div class="col-md-2 col-12 text-center pt-5">
                    <img class="img-fluid imgShadow" src="/images/jwt-200x200.png" alt="">
                </div>
                <div class="col-md-10 col-12  pt-5">
                    <strong>Participants have great time learning about James Webb Space Telescope at Cosmocast
                        event</strong>
                    <p>Participants got a look into the science and engineering behind the largest and most powerful
                        space telescope ever built while exploring ways to engage learners in the mission. The James
                        Webb Space Telescope will look back at some of the earliest stages of the universe, gather views
                        of early star and galaxy formation, and provide insights into the formation of planetary
                        systems, including our own solar system. Read on to learn more about what the space-based
                        observatory will do, how it works, and how to engage learners in the science and engineering
                        behind the mission.</p>
                </div>
                <div class="col-md-2 col-12 pt-5 text-center">
                    <img class="img-fluid imgShadow" src="/images/deal-200x200.jpeg" alt="">
                </div>
                <div class="col-md-10 col-12 pt-5">
                    <strong>Earthscape signs new deal with Cosmocast</strong>
                    <p>Earthscape has signed a new deal with Cosmocast for their daily satellite data needs. Cosmocat,
                        with there cutting-edge space technology, will fulfill the evolving needs in the space sector.
                        Cosmocast is one of the leading suppliers of Very High Resolution (VHR) imagery. </p>
                </div>
                <div class="col-md-2 col-12 pt-5 text-center">
                    <img class="img-fluid imgShadow" src="/images/rover-200x200.jpeg" alt="">
                </div>
                <div class="col-md-10 col-12 pt-5">
                    <strong>Model School students build mini Curosity Rover</strong>
                    <p>Students built there very own Mars rover! With the help of the JPL Open Source Rover, students
                        built a scaled-down version of the six-wheel rover design that JPL uses to explore the surface
                        of Mars. The Open Source Rover is designed almost entirely out of consumer off-the-shelf (COTS)
                        parts. This project is intended to be a teaching and learning experience for those who want to
                        get involved in mechanical engineering, software, electronics, or robotics.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container sectionSeperator" id="Contacts">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Contacts</h1>
                    <address class="text-center pt-5">
                        <p>Secured section: Login to access company contacts</p>
                        <button type="button" class="btn primeBtn"
                            onclick="location.href='/cosmocast/login.php'">Login</button>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Copyright © Cosmocast. This is a demo website created as part of an assignment for class CMPE-272
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/bootstrap-4.4.1.js"></script>
    <script src="../js/site.js"></script>
</body>

</html>