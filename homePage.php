<!DOCTYPE html>
<html lang="en">
<head>
  <title>Oundle Choral Society</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php include_once("navbar.php") ?>
  <style>
  body {
    font: 400 17px/1.8 Lato, sans-serif;
  }
  h3, h4 {
    margin: 10px 0 30px 0;    
    font-size: 20px;
    color: #a51f2f;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color:#a51f2f;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #a51f2f !important;
  }
  .carousel-indicators li {
  width: 20px;
  height: 10px;
  }
  .carousel-indicators li {
  width: 20px;
  height: 10px;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #a51f2f;
    color: #a51f2f;
  }
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #a51f2f;
  }
  .btn {
    padding: 10px 20px;
    color: #f1f1f1;
    border-radius: 0;
    transition: 0.2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #7badf8;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #7badf8;
    border: 0;
    font-size: 15px !important;
    letter-spacing: 4px;
    opacity: 1;
    height:80px;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #7badf8!important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #fff;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>



<!--<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:75px;">
    <ul class="carousel-indicators  ">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ul>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img1.png" alt="" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>
      
    </div>
</div>-->

<div id="About" >
  <!--<br>
  <br>
  <h2 style="color:#a51f2f; padding-right: 20%; padding-left: 20%;"><marquee><strong>New term starts Monday 4th September - new members welcome!</strong></marquee></h2>-->
  <!--<h2 style="background-color: #28a745; color: #fff; text-align: center;">Next concert<br>Songs from the Shows<br>Saturday 16th December 7:30pm</h2>-->
  <!--<h1 style="color: #a51f2f; text-align: center;"><strong>Welcome to the Oundle & District Choral Society</strong></h1>
  <p style="padding-left: 20%;padding-right: 20%; font-size: 16.5px;">We are a mixed voice choir who have been in existence for over 100 years. We draw our membership from a 
    fairly wide rural area and currently have approximately seventy voices who meet for rehearsals <strong>every 
    Monday during term time.</strong>
    <br><br>
    Although we are an independent choral society, we have close links with Oundle School with whom we often
     perform and who regularly support our concerts.<strong> Our rehearsals are held in Laxton Junior School Hall, 
     East Road, Oundle, PE8 4BX, from 7.30pm until 9.30pm.</strong>
     <br><br>
     There is no requirement to audition and all singers are made welcome no matter what skill level you have.
      We are grateful to Oundle Town Council for their continuing financial support but, much like most 
      societies, we are a registered charity and are obliged to charge a subscription fee. However, 
      don’t let that stop you from coming along to see if you like us!
      <br><br>
      If you are interested in joining our society please contact us for more information by 
      telephoning/emailing using the details below.
      <br><br>
      Registered charity number: 1098947
  </p>
  <div class="row" style="background-color: #b0343c; color: #fff;" id="Classes">
  <br><br><br>
    <h1 style="text-align: center;"><strong><br>Previous Concerts and Events</strong></h1>
    <div class="col-sm-3">
      <p class="text-center"><img src="img9.png" alt="" width="80%"></p><br>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><img src="img10.jpg" alt="" width="80%"></p><br>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><img src="img11.png" alt="" width="80%"></p><br>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><img src="img12.jpg" alt="" width="80%"></p><br>
    </div>
  </div>
</div>-->

<!-- Container (TOUR Section) -->

<div class="row" style="background-color: #fff; color: #a51f2f;" id="Members">
  <!--<div class="col-sm-1"></div>
  <div class="col-sm-3">
    <br><br><br>
    <h3 class="text-center" style="font-size: 150%;"><b>Accompanist<br>Elizabeth Arkell</b></h3><br>
    <p class="text-center"><img src="Elizabeth.png" alt="" width="279" height="348.75"><br><br> 
    <button style="background-color: #18a4bc; border-radius: 4px;" class="btn"  data-toggle="modal" data-target="#Arkell">Bio</button></p>
  </div>
  <div class="col-sm-1"></div>
  <div class="col-sm-2">
    <br><br><br>
    <h1 class="text-center"><b>Members</b></h1><br>
    <p style="text-align: center; color: #000;">Chairman : Jane Piercy-Hughes
      <br><br>
      Treasurers: John Davies
      <br><br>
      Secretary: Janet Ollerenshaw
      <br><br>
      Legal: John Davies
      <br><br>
      Website: Tessa Leuchars</p>
  </div>
  <div class="col-sm-1"></div>
  <div class="col-sm-3">
    <br><br><br>
    <h3 class="text-center" style="font-size: 150%;"><b>Musical Director & Conductor<br>Quentin Thomas</b></h3><br>
    <p class="text-center"><img src="Quentin.png" alt="" width="279" height="348.75"><br><br> 
    <button style="background-color: #18a4bc; border-radius: 4px;" class="btn"  data-toggle="modal" data-target="#Quentin">Bio</button></p>
  </div>
  <div class="col-sm-1"></div>
</div>-->

<div id="tour" class="bg-1">
  <!--<div class="modal fade" id="Arkell" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 style="color: #000;"><b>Elizabeth Arkell</b></h3>
        </div>
        <div class="modal-body">
          <p style="color: #000;">Elizabeth was a music scholar at Ardingly College and organ scholar at 
            Sidney Sussex College, Cambridge, where she read for a degree in music. A Fellow of the Royal 
            College of Organists, Elizabeth is an experienced organist and accompanist, having worked with 
            many choirs and choral societies. Her career in music education has seen her teach in schools in 
            Berkshire, Hampshire and Staffordshire, and she is currently Head of Academic Music and School 
            Organist at Oundle School. Elizabeth is a senior examiner for Pearson GCSE Music and also an 
            examiner for the ABRSM. Elizabeth has been Organist and Director of Music at St John’s in 
            Peterborough since December 2014 and has accompanied Oundle and District Choral Society since 
            2017.</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-right" style="background-color: #fff; color: #000; border: #fff;" 
          data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="Quentin" role="dialog">
    <div class="modal-dialog" style="width: 50%; text-align: center;">
      <div class="modal-content">
        <div class="modal-header">
          <h3 style="color: #000;"><b>Quentin Thomas</b></h3>
        </div>
        <div class="modal-body">
          <p style="color: #000; ;">Quentin Thomas was born into a musical family and became Head Chorister at Westminster Abbey singing for the daily services, many important 
            occasions, recordings, films, tours, and was regularly called upon as a soloist, often recording with Deutsche Grammophon. He gained full scholarships to The King’s 
            School Canterbury, then to Oxford University, to the Guildhall School of Music & Drama for post-graduate studies in Advanced Composition and then Conducting and 
            Repetiteuring, and finally to the National Film & Television School to compose Screen Music. His four Masters’ Degrees and Associateship to the Royal College of 
            Organists are indicative of his diverse interests across the music world that have encompassed composition, conducting, performing and music education.
            <br><br>
            Quentin has toured extensively as a recitalist and accompanist on both piano and organ appearing in the BBC Proms, on Radio 3 and ClassicFM. He was for three years 
            the invited organist and repetiteur for the European Union Youth Orchestra working closely with guests such as Vladimir Ashkenazy and Sir Colin Davis, and recorded 
            Alison Balsom’s first CD (organ and trumpet) to wide acclaim with EMI.
            <br><br>
            Composing hi-lights include two Oscar nominations in Hollywood’s Short Film category; being an in-house composer for a publisher whilst still at school; three operas, 
            one opening a Deutsche Oper am Rhein, Dusseldorf season. He has written diverse works ranging from song cycles to orchestral works, sound designs to choral and dance 
            works for leading artists and ensembles in most of the London major concert venues.
            <br><br>
            As a conductor, Quentin has considerable experience in bringing the best out of semi-professional and amateur outfits, be they massed choruses, community choirs, 
            orchestras or school ensembles. He has formed and run many a festival such as the Guildhall School’s Festival of Contemporary Music, and the St John’s Hyde Park 
            Festival. He is presently a trustee of Creative Oundle.
            <br><br>
            As an educationalist, Quentin has been Director of Music at Oundle since 2013. He was for eight years Director of Music at Haileybury, taking the choir to the finals 
            of the BBC Songs of Praise Choir of the Year in the three times they entered the competition. Prior to this, he taught at the Yehudi Menuhin School and worked with 
            the London Sinfonietta Education Programme.</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-right" style="background-color: #fff; color: #000; border: #fff;" 
          data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="Privacy" role="dialog">
    <div class="modal-dialog" style="width: 95%;">
      <div class="modal-content">
        <div class="modal-header">
          <h3 style="color: #a51f2f;"><b>Privacy Policy</b></h3>
        </div>
        <div class="modal-body">
          <p style="color: #a51f2f;">At Oundle & District Choral Society, we always respect your personal 
            privacy. We do collect information from you, but it is our company policy and priority to ensure 
            that all personal information remains private and secure. To earn your trust and confidence in 
            the internet and in Oundle & District Choral Society, we are disclosing our privacy practices 
            and the uses of the information we gather. To protect your privacy, Oundle & District Choral 
            Society:
            <br>
            Will not release any information about you without first obtaining your consent, unless required 
            to do so by law or in the good-faith belief that such action is necessary in order to conform 
            to the edicts of the law or comply with a legal process served on our company.
            <br>
            Will not knowingly use any information from children younger than 16 without parental consent
            <br>
            Will inform you when we change our privacy policy, either by e-mail or via a link on our home 
            page
            <br>
            Oundle & District Choral Society reserves the right to amend this Privacy Statement at any 
            time without prior notice, and only the current Privacy Statement may be deemed effective.
            <br>
            1. What general information does Oundle & District Choral Society collect about me and how is 
            it used? When you visit the Oundle & District Choral Society web site, we collect some basic 
            information about your computer, such as: IP address (your computer's unique signature). 
            Operating system (e.g., Windows XP). Browser software (e.g., Microsoft Internet Explorer, 
            Firefox). Internet Service Provider (e.g., Pipex, Demon, AOL, etc.) Other numeric codes used 
            to identify a computer. The information we collect is aggregated to reflect the population 
            and not focused on individuals. We use it to help us better understand the people who visit 
            the Oundle & District Choral Society web site. In addition, like many other sites with paid 
            advertising, we disclose some of this aggregate information to advertisers to inform them of 
            the number of people who have seen and clicked on their links or advertisements.
            <br>
            2. What personal information does Oundle & District Choral Society collect about me and how 
            is it used? During the process of completing our email form, we ask you to supply personal 
            information, including your name and an e-mail address. Any information submitted is kept for 
            our records only. It is never passed on to third parties, nor is it added to any list or used 
            to send unsolicited e-mail or correspondence of any type.
            <br>
            3. How do third-party advertisers use my information? Oundle & District Choral Society does not 
            pass on any personal information of any description to third-party advertisers. Any information 
            we pass on is of a general nature as outlined above regarding numbers of visitors, page views, 
            etc. If you receive an email from a third party stating that it is associated with Oundle & 
            District Choral Society, yet you do not recall asking for the information, please follow the 
            third party's removal procedures. If this procedure is not successful, please forward the 
            e-mail with a summary of your experience to enquiries@oundlechoralsociety.org.uk. Additionally, 
            be aware that when you click on links, you may be brought to other sites not operated by Oundle 
            & District Choral Society. You are responsible for information you provide these sites. 
            We recommend that you review the privacy policy of any site that requests personal information.
            <br>
            4. How may I protect my privacy on the Internet and within Oundle & District Choral Society? - 
            Know the risks? If you provide your e-mail address to public domains such as chat rooms or 
            newsgroups, or you provide it to web sites which don't respect your privacy, you may begin to 
            receive unsolicited e-mail. Unsolicited e-mail is also known as spam. Oundle & District Choral 
            Society has strict rules prohibiting spam; it is generally a good idea to provide your e-mail 
            address only to people or groups that you trust.
            <br>
            5. Educate yourself! Look for a privacy statement on every site you visit on the Web, and search 
            for information on how to protect your privacy. Tell your children: "Never talk to strangers!" 
            Teach children not to give out their names or other personal information. Tell them never to 
            fill out online registration forms without your knowledge and consent. We always respect your 
            personal privacy. We do collect information from you, but it is our company policy and priority 
            to ensure that all personal information remains private and secure. To earn your trust and 
            confidence in the internet and in Oundle & District Choral Society, we are disclosing our 
            privacy practices and the uses of the information we gather.
          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-right" style="background-color: #fff; color: #000; border: #fff;" 
          data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="padding-left: 20%; padding-right: 20%;">
  <h1 style="text-align: center; color: #a51f2f;">Why we enjoy singing with ODCS</h1>
  <h4 style="color: #000;">"I enjoy singing with the choir because the practicing is pleasingly challenging 
    with lovely results when it all comes together. And Quentin is a charismatic, humorous and talented 
    leader."<br><br>
  <small style="color: #777;">- Anne</small></h4>
  <h4 style="color: #000;">"ODCS is the most friendly, relaxed and enjoyable choral society I have ever 
    belonged to."<br><br>
  <small style="color: #777;">- Trisha</small></h4>
  <h4 style="color: #000;">"I love the thrill of singing in 4-part harmony. It gives me that tingling 
    feeling!"<br><br>
  <small style="color: #777;">- Clare</small></h4>
  <h4 style="color: #000;">" Singing is the perfect form of exercise and relaxation, focussing your mind, 
    whatever the day has thrown at you!"<br><br>
  <small style="color: #777;">- Tessa</small></h4>
</div>
<div style="background-color: #ac303e; color: #fff; padding-left: 5%; padding-right: 5%;" id="Music">
  <br><br>
  <h1><b>Music</b></h1>
  <p style="font-size: 90%;">
    Spring 2023 - Karl Jenkins' The Armed Man and Rutter's Requiem
    <br><br>
    Autumn 2022 - Magnificat in D Major - J.S Bach and Mass in G Major - Franz Schubert
    <br><br>
    Spring 2022 - Dvorak's Mass in D Minor, Vaughan Williams' Five Mystical Songs and Arensen's Eja Mater
    <br><br>
    Autumn 2019 - Britten - St Nicolas, Chilcott - Time of Snow Mid Winter, Whitacre - Lux Aurumque, Rutter - Nativity, Candlelight & Shepherds Pipe Carols.
    <br><br>
    Spring 2019 - Vivaldi GLORIA & Tippett 'Five Spirituals
    <br><br>
    Autumn 2018 - G.F. Handel - Messiah Part 1
    <br><br>
    Spring 2018 - Gioacchino Rossini’s - Petite Messe Solennelle
    <br><br>
    Autumn 2017 - Benjamin Britten's - A Ceremony of Carols
    <br><br>
    Spring 2017 - Handel’s Israel in Egypt - A joint concert with Uppingham Choral Society and the Bardi Orchestra on Saturday 8th April 2017 in Uppingham
    <br><br>
    Spring 2016 - Creation by F. J. Haydn
    <br><br>
    Spring 2015 - Mass in C Minor K.427 by Mozart
    <br><br>
    Spring 2014 - Now is the Month of Maying - A Concert for May Day!
    <br><br>
    Autumn 2013 - The Nelson Mass by F. J. Haydn
    <br><br>
    Spring 2013 - Messe Solennelle by Louis Vierne (Oundle School Chapel)
    <br><br>
    Autumn 2012 - Messiah by G F Handel
    <br><br>
    Spring 2012 - The Music Makers by Edward Elgar (Peterborough Cathedral with Oundle School)
    <br><br>
    Autumn 2011 - Messa di Gloria by Giacomo Puccini
    <br><br>
    Spring 2011- Requiem by W. A. Mozart
  </p>
</div>-->

<!-- Footer -->
<!--<div style="color: #a71f2f;" id="Contact">
  <footer class="text-center">
    <h1><b>Contact Us</b></h1><br>
    <p>Jane Piercy-Hughes - Chairman<br>Janet Ollerenshaw - Secretary or Phone 07979332744<br>
      Tessa Leuchars - Website</p>
      <button style="background-color: #18a4bc; border-radius: 4px;" class="btn"  data-toggle="modal" data-target="#Privacy">Privacy Policy</button></p>
      <p><img src="redLogo.png" alt=""></p>
      <br>
  </footer>
</div>-->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>