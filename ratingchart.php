<!DOCTYPE html>



<html lange="en">



<link rel="icon" href="45.png">



<title>TweetAnalyzer</title>



<link href="ProjectCSS.css" type="text/css" rel="stylesheet">

<head>

</head>

<body style="border: 1px solid transparent;
    padding-bottom: 100px;">
    <div id="main">

        <header>
            <div class="panel-body">
                <div id="page" class="navigator">
                    <ul>






                        <a href="http://localhost/webproject.php#home">Home</a>
                        <a href="http://localhost/webproject.php#aboutus">About Us</a>
                        <div class="dropdown">
                            <button class="dropbtn">Series
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="http://localhost/Genres.php#series">Genres</a>
                                <a href="http://localhost/ratingchart.php#ratings">Rating Charts</a>
                                <a href="http://localhost/RatingsTable.php">Ratings Table</a>

                            </div>

                        </div>

                        <a href="http://localhost/contact.php">Contact</a>

                        <a href="http://localhost/search.php">Search</a>
                    </ul>
                </div>
        </header>








        <body>

            <div class="slideshow-container">

                <div class="mySlides fade">

                    <div class="numbertext">2 / 3</div>

                    <h2 class="piechartheader">Bar Chart of Top 10 Series</h2>

                    <ul class="bar-graph">

                        <li class="bar-graph-axis">

                            <div class="bar-graph-label">100%</div>

                            <div class="bar-graph-label">80%</div>

                            <div class="bar-graph-label">60%</div>

                            <div class="bar-graph-label">40%</div>

                            <div class="bar-graph-label">20%</div>

                            <div class="bar-graph-label">0%</div>

                        </li>

                        <li class="bar primary" style="height: 7.76%;" title="Black Mirror-7.76%">

                            <div class="percent">7.76<span>%</span></div>

                            <div class="description">Black Mirror</div>

                        </li>

                        <li class="bar secondary" style="height: 68.31%;" title="Game Of Thrones-68.31%">

                            <div class="percent">68.31<span>%</span></div>

                            <div class="description">Game Of Thrones</div>

                        </li>

                        <li class="bar success" style="height: 0.37%;" title="House Of Cards-0.37%">

                            <div class="percent">0.37<span>%</span></div>

                            <div class="description">House Of Cards</div>

                        </li>

                        <li class="bar warning" style="height: 0.87%;" title="La Casa De Papel-0.87%">

                            <div class="percent">0.87<span>%</span></div>

                            <div class="description">La Casa De Papel</div>

                        </li>

                        <li class="bar alert" style="height: 1.12%;" title="Narcos-1.12%">

                            <div class="percent">1.12<span>%</span></div>

                            <div class="description">Narcos</div>

                        </li>

                        <li class="bar primary2" style="height: 2.35%;" title="Peaky Blinders-2.35%">

                            <div class="percent">2.35<span>%</span></div>

                            <div class="description">Peaky Blinders</div>

                        </li>

                        <li class="bar secondary2" style="height: 3.38%;" title="Stranger Things-3.38%">

                            <div class="percent">3.38<span>%</span></div>

                            <div class="description">Stranger Things</div>

                        </li>

                        <li class="bar success2" style="height: 0.34%;" title="The Crown-0.34%">

                            <div class="percent">0.34<span>%</span></div>

                            <div class="description">The Crown</div>

                        </li>

                        <li class="bar warning2" style="height: 13.62%;" title="The Protector-13.62%">

                            <div class="percent">13.62<span>%</span></div>

                            <div class="description">The Protector</div>

                        </li>

                        <li class="bar alert2" style="height: 1.83%;" title="The Umbrella Academy-1.83">

                            <div class="percent">1.83<span>%</span></div>

                            <div class="description">The Umbrella Academy</div>

                        </li>

                    </ul>

                </div>



                <div class="mySlides fade">

                    <div class="numbertext">3 / 3</div>

                    <h2 class="piechartheader">Pie Chart of Top 10 Series</h2>



                    <div id="piechart"></div>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                    <script type="text/javascript">
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });

                        google.charts.setOnLoadCallback(drawChart);



                        function drawChart() {

                            var data =
                                google.visualization.arrayToDataTable([



                                    ['TV Series',

                                        'Ratings'

                                    ],



                                    ['Black Mirror',
                                        7.76
                                    ],



                                    ['Game Of Thrones',
                                        68.31
                                    ],



                                    ['House Of Cards',
                                        0.37
                                    ],



                                    ['La Casa De Papel',
                                        0.87
                                    ],



                                    ['Narcos', 1.12],



                                    ['Peaky Blinders', 2.35],



                                    ['Stranger Things',
                                        3.38
                                    ],



                                    ['The Crown',
                                        0.34
                                    ],



                                    ['The Umbrella Academy',
                                        1.83
                                    ],



                                    ['The Protector',
                                        13.62
                                    ],





                                ]);







                            // Optional; add a title and set the width and height of the chart



                            var

                                options = {

                                    'width': 1000,

                                    'height': 500,

                                    // 'chartArea': {'width': '50%', 'height': '50%'},

                                    'chartArea': {
                                        'left': 400,
                                        'top': 20,
                                        'width': '50%',
                                        'height': '50%'
                                    },

                                    // 'pieHole': 0.4,

                                    'is3D': true,

                                    // legend: {

                                    // alignment: 'center',

                                    // }

                                    // pieSliceText: 'percentage',

                                    pieSliceText: 'none',

                                    slices: {

                                        4: {

                                            offset: 0.5

                                        },

                                        2: {

                                            offset: 0.6

                                        },

                                        3: {

                                            offset: 0.3

                                        },

                                        6: {

                                            offset: 0.2

                                        },

                                        7: {

                                            offset: 0.5

                                        },

                                        8: {

                                            offset: 0.1

                                        },

                                    },

                                };



                            // Display the chart inside the <div> element with id="piechart"



                            var

                                chart = new google.visualization.PieChart(document.getElementById('piechart'));



                            chart.draw(data, options);



                        }
                    </script>

                    <div id="piechart"></div>

                </div>







                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>



                <a class="next" onclick="plusSlides(1)">&#10095;</a>







            </div>



            <br>







            <!-- <div style="text-align:center">



                <span class="dot" onclick="currentSlide(1)"></span>



                <span class="dot" onclick="currentSlide(2)"></span>



                <span class="dot" onclick="currentSlide(3)"></span>



            </div>  -->







            <script>
                var

                    slideIndex =

                    1;



                showSlides(slideIndex);







                function

                plusSlides(n) {



                    showSlides(slideIndex +=

                        n);



                }







                function

                currentSlide(n) {



                    showSlides(slideIndex =

                        n);



                }







                function

                showSlides(n) {



                    var

                        i;



                    var

                        slides =

                        document.getElementsByClassName("mySlides");



                    var

                        dots =

                        document.getElementsByClassName("dot");



                    if (n >

                        slides.length) {

                        slideIndex =

                            1

                    }



                    if (n <

                        1) {

                        slideIndex =

                            slides.length

                    }



                    for (i =

                        0; i <

                        slides.length; i++) {



                        slides[i].style.display =
                            "none";



                    }



                    for (i =

                        0; i <

                        dots.length; i++) {



                        dots[i].className =
                            dots[i].className.replace("active",
                                "");



                    }



                    slides[slideIndex -

                            1].style.display =

                        "block";



                    dots[slideIndex -

                            1].className +=

                        " active";



                }
            </script>







            <script>
                function

                viewGraph() {



                    $('.column').css('height',

                        '0');



                    $('table tr').each(function(index) {



                        var

                            ha =

                            $(this).children('td').eq(1).text();



                        $('#col' +

                            index).animate({

                            height: ha

                        }, 1500).html("<div>" +

                            ha +

                            "</div>");



                    });



                }



                $(document).ready(function() {



                    viewGraph();



                });
            </script>

            <script>
                window.onscroll =

                    function() {

                        myFunction()

                    };

                var navbar =
                    document.getElementById("page");



                var sticky =
                    navbar.offsetTop;



                function myFunction() {

                    if (window.pageYOffset >=
                        sticky) {

                        navbar.classList.add("sticky")

                    } else {

                        navbar.classList.remove("sticky");

                    }

                }
            </script>

<hr style="border:3px solid #f1f1f1">


        </body>


        







</html>