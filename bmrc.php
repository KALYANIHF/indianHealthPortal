<?php

include 'header&footer/header.php';
?>
<link rel="stylesheet" href="css/jnm.css">
</head>

<body>
    <ul id="slides">
        <li class="slide showing">Weolcome BMRC</li>
        <li class="slide">Weolcome BMRC</li>
        <li class="slide">Weolcome BMRC</li>
        <li class="slide">Weolcome BMRC</li>
        <li class="slide">Weolcome BMRC</li>
    </ul>
    <section class="box1">
        <h1> Need help? Want Appoirment? Dont Worry! </h1>
    </section>
    <section class="flexbox">
        <div class="one1">
            <div class="docname">
                <h3>Name:&nbsp; Dr. Susovan Halder</h3>
                <h5>Specialist :&nbsp; CARDIOLOGY</h5>
                <h5>Degree: &nbsp;MBBS,BDS</h5>
                <a href="appointment.php?type=25"><button class="btn btn-primary">appoinment</button></a>
            </div>
            <div class="docname">
                <h3>Name:&nbsp; DR. Nilima Tudu</h3>
                <h5>Specialist :&nbsp; NEUROLOGY</h5>
                <h5>Degree: &nbsp;MBBS,BDS,BMBS</h5>
                <a href="appointment.php?type=26"><button class="btn btn-primary">appoinment</button></a>
            </div>
            <div class="docname">
                <h3>Name:&nbsp;Dr. Debjyoti Dutta</h3>
                <h5>Specialist :&nbsp; GYNECOLOGY</h5>
                <h5>Degree: &nbsp;MBBS</h5>
                <a href="appointment.php?type=27"><button class="btn btn-primary">appoinment</button></a>
            </div>
            <div class="docname">
                <h3>Name:&nbsp; DR. Aparna Kundu</h3>
                <h5>Specialist :&nbsp; ORTHOPAEDICS</h5>
                <h5>Degree: &nbsp;MBBS,BDS,MBCHB</h5>
                <a href="appointment.php?type=28"><button class="btn btn-primary">appoinment</button></a>
            </div>
        </div>
        <div class="one2">
            <div class="docname">
                <h3>Name:&nbsp; DR. R Mallick</h3>
                <h5>Specialist :&nbsp; GASTROENT</h5>
                <h5>Degree: &nbsp;MBBS,BDS</h5>
                <a href="appointment.php?type=29"><button class="btn btn-primary">appoinment</button></a>
            </div>
            <div class="docname">
                <h3>Name:&nbsp; Dr. Abhishek Ghosh</h3>
                <h5>Specialist :&nbsp;PHARMACY</h5>
                <h5>Degree: &nbsp;MBBS</h5>
                <a href="appointment.php?type=30"><button class="btn btn-primary">appoinment</button></a>
            </div>
            <div class="docname">
                <h3>Name:&nbsp; DR.Arjun Kundu</h3>
                <h5>Specialist :&nbsp; SURGERY</h5>
                <h5>Degree: &nbsp;MBBS,BDS,MMSC</h5>
                <a href="appointment.php?type=31"><button class="btn btn-primary">appoinment</button></a>
            </div>
            <div class="docname">
                <h3>Name:&nbsp;Dr.S .B .Nagori</h3>
                <h5>Specialist :&nbsp; HE</h5>
                <h5>Degree: &nbsp;MBBS</h5>
                <a href="appointment.php?type=32"><button class="btn btn-primary">appoinment</button></a>
            </div>
        </div>
    </section>
    <section class="bfoo">
        <div class="container">
            <div style="padding-top: 1rem;" class="row">
                <div class="col col-sm-6">
                    <h3>Indian health Portal</h3>
                    <h5>Our chairman: John doe</h5>
                    <h5>Our vice chairman: Asim saha</h5>
                    <h5>Our contact_No: (033) 2563562</h5>
                    <h5>Our email_id: indianhealportal@outlook.com</h5>
                </div>
                <div class="col col-sm-6">
                    <h3>all the important links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blood.php">Blood</a></li>
                        <li><a href="specialist.php">specialist</a></li>
                        <li><a href="give&honour.php">give and honerable</a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="noticebord.php">recent notice</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script>
        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 2000);

        function nextSlide() {
            slides[currentSlide].className = 'slide';
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }
    </script>
</body>

</html>