
<!DOCTYPE html>
<html>
    <head>
        <title>
            Yazzie Web Design
        </title>

        <?php require_once ("head-utils.php");?>
        <link href="lib/css/animate.css" rel="stylesheet">
        <link href="lib/css/font-awesome.css">
        <link href="lib/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <style>
            /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */


            p.anim{
                color: #D0EAFF;
                font-family: "White Rabbit";
                font-size: 20px;
                margin: 10px 0 0 10px;
                padding-left: 172px;
                white-space: nowrap;
                overflow: hidden;
                width: 51em;
                animation: type 1s steps(60, end);
            }

            p.anim:nth-child(2){
                animation: type2 2s steps(60, end);
            }

            p.anim:nth-child(3){
                animation: type3 3.8s steps(60, end);
            }

            p.anim:nth-child(4){
                animation: type4 7.5s steps(60, end);
            }

            p a{
                color: lime;
                text-decoration: none;
            }

            span.blinker{
                animation: blink 1s infinite;
            }

            @keyframes type{
                from { width: 0; }
            }

            @keyframes type2{
                0%{width: 0;}
                50%{width: 0;}
                100%{ width: 100; }
            }

            @keyframes type3{
                0%{width: 0;}
                50%{width: 0;}
                100%{ width: 100; }
            }

            @keyframes type4{
                0%{width: 0;}
                50%{width: 0;}
                100%{ width: 100; }
            }

            @keyframes blink{
                to{opacity: .0;}
            }

            ::selection{
                background: black;
            }
        </style>

    </head>

    <body>


<div class="pictureCactus">
    <nav id="nav" role='navigation'>
      <a class="clickr fontawesome-reorder"></a>
      <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#numberOne">About Me</a></li>
        <li><a href="#numberTwo">Portfolio</a></li>
        <li><a href="#numberThree">Contact Me</a></li>
        <li><a href="#numberFour">Yazzie Web Design</a></li>
      </ul>
    </nav>

    <div class="text animated fadeIn" >
      <h1>YAZZIE WEB DESIGN</h1>
      <p>Welcome to my page! I create websites :)</p>
    </div>

    <div class="jumbotron">
        <div class="container">
            <p class="anim"><i class="fa fa-quote-left" aria-hidden="true"></i> Do not wait; the time will never be 'just right'. Start where</p>
            <p class="anim">you stand, and work with whatever tools you may have at </p>
            <p class="anim">your command and better tools will be found as you go along. <i class="fa fa-quote-right" aria-hidden="true"></i>
            <p class="anim">-George Herbert-<span class="blinker"> | </span></p>
        <div class="push">
          <a href="#numberOne">CHECK MY PAGE OUT</br></br>
          <i class="fa fa-arrow-down fa-3x" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
</div>
    <div class="second" id="numberOne">
      </br></br>

        <h1 class="one animated bounceInRight">Hello, </h1>

        <h2 class="two animated fadeInUpBig">
            my name is<strong> Dana Yazzie,</strong></br> and I'm a junior web
            developer from </br>Bloomfield in New Mexico. </br>
            I co-instruct at Cultivating Coders.
        </h2>
        <h2 class="about2" >
           My work consists of assisting as an instructor in</br> teaching
            students programming languages</br> such as the FULL stack of web development.
        </h2>

        <div id="moreA">

          <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample"
          aria-expanded="false" aria-controls="collapseExample">
            More about me
          </a>
          <div class="collapse" id="collapseExample">
            <div class="well">
              Ya'at'eeh, shi ei Dana Yazzie yinishye. Ta'neszahnii nishli, Todichinii
              bashishchiin, Kinyaa'nii dashicheii, Naashashi dashinali. Hello, my
              name is Dana. Im currently a Navajo student that has graduated from
              Cultivating Coders. I grew up in Carson, NM located about 22 miles
              south from Bloomfield, NM. When i was growing up I wanted to learn
              everything i could so i learned from my dad and my elders as best as
              i could; leading me to great storytelling and learning from this place
              we call world. I then graduated from Bloomfield High School in 2011.
              Ive attended UNM for a year hoping to major in Biology but i decided
              to change my major to Environmental Science. Ive been helping my church
              as well since then. I've been to many places; until now i have settled in Gallup, NM.
            </div>
          </div>
      </div>

    </div>

    <div class="thirdPort" id="numberTwo">
      <h2>My Portfolio</h2>
      <h3>Small Projects. More in the future, keep checking the website and
         you'll soon be amazed.</h3>

      <div class="container1">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="#" class="image fit">
              <img src="lib/images/firstSite.JPG" alt="" class="folio" /></a>
                      <header>
                          <h3>First Site Design </h3>
                      </header>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="#" class="image fit">
              <img src="lib/images/restaurant.JPG" alt="" class="folio" /></a>
                      <header>
                          <h3>HTML/CSS Design </h3>
                      </header>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="#" class="image fit">
              <img src="lib/images/Javascript.JPG" alt="" class="folio" /></a>
                      <header>
                          <h3>Javascript Design </h3>
                      </header>
          </div>
        </div>
      </div>

    </div>

    <div class="fourthCont" id="numberThree">
      <h2>Contact</h2>
        <div class="contact1">
            <div class="container">

            <header>
                <h1 class="questions">Have any questions?</h1>
            </header>

            <form method="POST" action="https://formspree.io/redcloudsaboveus01@gmail.com"
            class="col-md-6 col-md-offset-3" id="contactForm" name="contactForm">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email"
                    name="_replyto" placeholder="Email">
                </div>

                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" class="form-control" name="_subject"
                  placeholder="I need a website">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message"
                    rows="3" placeholder="Message"></textarea>
                </div>

                <button class="btn btn-success" id="submit" name="submit"
                type="submit">Send</button>
                <div class="form-group">
                </div>
            </form>
            </div>

        </div>
    </div>

    <div class="fifthYazz" id="numberFour">
      <h2>Yazzie Web Design</h2>
      <p class="webd">A little about how it started...</p>
      <p class="webd">Deadlights jack lad schooner scallywag dance the hempen jig carouser broadside
        cable strike colors. Bring a spring upon her cable holystone blow the man down
        spanker Shiver me timbers to go on account lookout wherry doubloon chase.
        Belay yo-ho-ho keelhaul squiffy black spot yardarm spyglass sheet transom heave to. </p>
      <div class="footer">
        <a href="#nav">Back to the top</a>
      </div>
    </div>


  </body>

</html>
