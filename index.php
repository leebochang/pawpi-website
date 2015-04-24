<html lang="en">
<head>
<title>TODO supply a title</title>
<!--<meta charset="UTF-8">-->
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<script src="./js/jquery/jquery.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/leebc.js"></script>
<script src="magic.js"></script> <!-- load our javascript file -->
<link type="text/css" rel="stylesheet" href="./css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="./css/leebc.css">
<link type="text/css" rel="stylesheet" href="./css/bootstrap-theme.css">


</head>
<body>
<!-- website wrapper -->
<div class="container-fluid" id="wrap" style="min-width: 1024px; max-width: 95vw; background-color:white">
<!-- Disclaimer -->
<div class="container-fluid" style="background-color: black; text-align: center;" > 
    <p style="color: white;"> THIS WEBSITE IS A PROJECT FOR SFSU CSC-648: SOFTWARE ENGINEERING</p>
</div>


<!-- navbar divider -->

    <div class="col-xs-3">
        <span class="pawpi-logo-text2">www.pawpi.com</span>
        <img src="img/pawpilogo.png" alt="pawpilogo" class="pawpi-logo-img">
    </div> 
    <div class="col-xs-6">
    <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="full-width-tabs">
        <ul class="nav nav-tabs">
            <li class="active take-all-space-you-can"><a href="./index.html">Home</a></li>
            <li class = "take-all-space-you-can"><a href="./DonatePet.html">Donate A Pet</a></li> 
            <li class="dropdown take-all-space-you-can">
            <a class="dropdown-toggle " data-toggle="dropdown" href="#">My Account<span class="caret"></span></a>
            <ul class="dropdown-menu take-all-space-you-can">
                <li><a href="./MyAccount.html">Manage Account</a></li>
                <li><a href="./inbox.html">My Inbox</a></li>
                <li><a href="./MyListings.html">My Listings</a></li>
                <li><a href="./MyProfile.html">My Profile</a></li>
                <li><a href="./MyFavorites.html">My Favorites</a></li> 
            </ul>
            </li>
            <li class = "take-all-space-you-can"><a href="#">About Us</a></li> 
        </ul>
    </div>
    </div>
    </nav>
    </div>
    <div class="col-xs-3">
        <button type="button" class="btn pull-right btn-link" data-toggle="modal" data-target="#registerModal">
            register
        </button>
        <span class="btn-separator"></span>
        <button type="button" class="btn pull-right btn-link" data-toggle="modal" data-target="#loginModal">
            login
        </button>
    </div>

<div class="col-xs-5 content-box" style="border-right-color:white; border-right-width: 4px; border-right-style: solid;">
    <p class="content-box-header">What We Do</p>
    <p>We are a San Francisco based Pet Adoption Service, our goal at Pawpi is to make sure that our furry little friends will be able
       to find a safe and loving home as soon as possible, For more info please go to our <a href='#and'>About Us</a></p>
</div>
<div class="col-xs-4 content-box">
    <p class="content-box-header">How You Can Help</p>
    <p>Approximately 7.6 million companion animals enter animal shelters nationwide every year. Each year, approximately 2.7 million animals are euthanized.
       Help our furry little friends out and <a href='#and'>Adopt</a> an animal that's in need of a home.</p>
</div>
<div class="col-xs-10">
    <div class='col-xs-12' style="border-bottom-color: gainsboro; border-bottom-style: solid; border-bottom-width: 4px;">
        <h3 style='text-align: center;'>Find A New Pet Today!</h3>
    </div>
    <div class='col-xs-12'>
        <form action="process.php" method="post" id="search_form" class="clearfix">
        <input type="text" size="40" class="form-control" maxlength="150" name="name" placeholder="i.e. (cat, dog)" id="search_text" />
        <input type="submit" name="search" value="Search" id="search_button" /> 
    </div>
</div>
<!-- end of search bar-->
<div class='col-xs-1 '></div>
<div class="col-xs-2 ">
    <img src='img/englishbulldog.png' alt='englishbulldog' style='max-height: 125px; max-width: 100%;'/>
</div>
<div class="col-xs-12 "></div>

<!--Sidebar content-->
<div class="col-xs-2 content-box filter-style">
    <div class="container" style="position:relative; min-width: 70%; max-width: 70%; min-height: 500px; " >
        <div class="row">
            <div class="filter-first">
                <a href="#add" class="filter-by-type" id="animalFilter" onclick="toggleThis('#animalTypes')"> Animal</a>
            </div>
            <div class="collapse" style="display: block;" id = "animalTypes">
            <div class="filter-second">
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> Dog
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> Cat
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> Other
                </label>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="filter-first">
                <a href="#add" class="filter-by-type" id="genderFilter" onclick="toggleThis('#genderTypes')"> Gender</a>
            </div>
            <div class="collapse" id = "genderTypes">
            <div class="filter-second">
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> Male
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> Female
                </label>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="filter-first">
                <a href="#add" class="filter-by-type" id="ageFilter" onclick="toggleThis('#ageTypes')"> Age</a>
            </div>
            <div class="collapse" id = "ageTypes">
            <div class="filter-second">
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> 0-1 years
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> 1-2 years
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> 2-5 years
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> 5-10 years
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> 10< years
                </label>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="filter-first">
                <a href="#add" class="filter-by-type" id="sizeFilter" onclick="toggleThis('#sizeTypes')"> Size</a>
            </div>
            <div class="collapse" id = "sizeTypes">
            <div class="filter-second">
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> x-small
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> small
                </label>
            </div>
             <div class="checkbox ">
                <label>
                    <input type="checkbox"> medium
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> large
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> x-large
                </label>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="filter-first">
                <a href="#add" class="filter-by-type" id="locationFilter" onclick="toggleThis('#locationTypes')"> Location</a>
            </div>
            <div class="collapse" id = "locationTypes">
            <div class="filter-second">
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> within 10 miles
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> within 25 miles
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> within 50 miles
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> within 100 miles
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> anywhere
                </label>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="filter-first">
                <a href="#add" class="filter-by-type" id="donorFilter" onclick="toggleThis('#donorTypes')"> Donor</a>
            </div>
            <div class="collapse" id = "donorTypes">
            <div class="filter-second">
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> Shelter
                </label>
            </div>
            <div class="checkbox ">
                <label>
                    <input type="checkbox"> Pet's Owner
                </label>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>                

<!-- end of column for filters -->

<!--gallery content-->
<div class="col-xs-10 content-box filter-style" style="min-height:500px;">
    <div class="row row-padding-small"></div>
    <div class="col-xs-12">
        <span style=' float: right; text-align: right; color: #d58512;'> Total Results: 3</span>
    </div>
    <div class="row row-padding"></div>
   <div class="col-xs-4" style="" id = 'append'>
         <!--<div class="col-xs-12 img-border">-->
            <!--<div class="row">-->
                <!--<a href="#and"><span id="pet-name-1"></span></a>-->
            <!--</div>-->
            <!--<span class="img-wrapper">-->
            <!--<img src="img/standard-dog.jpg" class="mythumbnail" alt="doggie"/>-->
            <!--<a class="button-overlay" href="#">-->
                <!--<span class="glyphicon glyphicon-heart"></span>-->
            <!--</a>-->
            <!--</span>-->
        <!--</div>-->
   </div>
</div>
<!--end of gallery content-->
<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-body form-horizontal" style="text-align:center;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="row-padding"></div>
        <div class="row">
            <div class="col-xs-2" style="float:left;"></div>
            <div class="col-xs-8" style=" text-align: center;">
                <form class=" ">
                <div class="row">
                    <!--<button type="button" class="btn btn-block custom-button" data-dismiss="modal">login with </button>-->
                    <h3>register with</h3>
                </div>
                <div class="row row-padding">
                    <div class="col-xs-3" style="float:left;"></div>
                    <div class="col-xs-2" style="float: left;">
                    <input type="submit" id="FB-Button" name="submit" value="">
                    </div>
                    <div class="col-xs-2">
                    <input type="submit" id="TW-Button" name="submit" value="">
                    </div>
                    <div class="col-xs-2" style="">
                    <input type="submit" id="GP-Button" name="submit" value="">
                    </div>
                    <div class="col-xs-3" style="float:right;"></div>
                </div>
                <div class="row" style="">
                    <div class="col-xs-1" style="float:left;"></div>
                    <div class="col-xs-4 horizontal-line" style=""></div>
                    <div class="col-xs-1 test" style="font-size: 20px; vertical-align: top;">or</div>
                    <div class="col-xs-4 horizontal-line" style=""></div>
                    <div class="col-xs-1"></div>
                </div>
                <div class="row">
                    <label class=""></label>
                    <input type="text" placeholder="username"/>
                </div>
                <div class="row">
                    <label class=""></label>
                    <input type="text" placeholder="email"/>
                </div>
                <div class="row">
                    <label class=""></label>
                    <input type="password" placeholder="password"/>
                </div>
                <button type = "button" class="btn-link" id="toggleme">registering for shelter? click here</button>
                <div id="viewdetails" style="display:none;">
                <div class="row">
                    <label class=""></label>
                    <input type="text" placeholder="shelter name"/>
                </div>
                <div class="row">
                    <label class=""></label>
                    <input type="text" placeholder="shelter address"/>
                </div>
                </div>
                </form>
            </div>
            <div class="col-xs-2" style="float:right;"></div>
        </div>
    <!--<div class="container-fluid">
         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <form class=" " >
        <div class="row">
            <label class="">Username: </label>
            <input type="text"/>
        </div>
        <div class="row">
            <label class="" style="padding-left:1px"> Password: </label>
            <input type="password"/>
        </div>
        </form>
    </div> -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-block custom-button" data-dismiss="modal">REGISTER</button>
    </div>
</div>
</div>
</div>
<!-- End of Register Modal -->
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
   <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="text-align:center;">LOGIN</h4>
    </div> -->
    <div class="modal-body form-horizontal" style="text-align:center;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="row-padding"></div>
        <div class="row">
            <div class="col-xs-2" style="float:left;"></div>
            <div class="col-xs-8" style=" text-align: center;">
                <form class=" ">
                <div class="row">
                    <!--<button type="button" class="btn btn-block custom-button" data-dismiss="modal">login with </button>-->
                    <h3>login with</h3>
                </div>
                <div class="row row-padding">
                    <div class="col-xs-3" style="float:left;"></div>
                    <div class="col-xs-2" style="float: left;">
                    <input type="submit" id="FB-Button" name="submit" value="">
                    </div>
                    <div class="col-xs-2">
                    <input type="submit" id="TW-Button" name="submit" value="">
                    </div>
                    <div class="col-xs-2" style="">
                    <input type="submit" id="GP-Button" name="submit" value="">
                    </div>
                    <div class="col-xs-3" style="float:right;"></div>
                </div>
                <div class="row" style="">
                    <div class="col-xs-1" style="float:left;"></div>
                    <div class="col-xs-4 horizontal-line" style=""></div>
                    <div class="col-xs-1 test" style="font-size: 20px; vertical-align: top;">or</div>
                    <div class="col-xs-4 horizontal-line" style=""></div>
                    <div class="col-xs-1"></div>
                </div>
                <div class="row">
                    <label class=""></label>
                    <input type="text" placeholder="username"/>
                </div>
                <div class="row">
                    <label class=""></label>
                    <input type="password" placeholder="password"/>
                </div>
                </form>
            </div>
            <div class="col-xs-2" style="float:right;"></div>
        </div>
    <!--<div class="container-fluid">
         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <form class=" " >
        <div class="row">
            <label class="">Username: </label>
            <input type="text"/>
        </div>
        <div class="row">
            <label class="" style="padding-left:1px"> Password: </label>
            <input type="password"/>
        </div>
        </form>
    </div> -->
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-block custom-button" data-dismiss="modal">LOGIN</button>
    </div>
</div>
</div>
</div>        
<!-- End of Login Modal -->


<script>
$(document).ready(function(){
    $("#toggleme").click(function(){
        $("#viewdetails").toggle();
    });
});

</script>
</div>
</body> 
</html>

 <!--

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
