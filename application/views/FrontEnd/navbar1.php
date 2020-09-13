</head>
<body>

<div class="super_container">
  
  <!-- Header -->

  <header class="header"  style="background: rgba(0, 0, 0, 0.5);height: 100px">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
              <div class="logo"><a href="index.html">BongoTraveler</a></div>
                            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li class="active"><a href="<?php echo base_url('home') ?>">Home</a></li>
                  <li><a href="<?php echo base_url('home/package') ?>">Packages</a></li>
                  <li><a href="<?php echo base_url('home/places') ?>">Places</a></li>
                  <li><a href="<?php echo base_url('home/guide') ?>">Guide</a></</li><?php if ($this->session->userdata('id')) {
                   
                   ?><div class="dropdown">
    <button class="dropbtn"><i style="font-size: 20px" class="fa fa-user-circle"></i> 
      
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a style="" href="<?php echo base_url('home/logout') ?>">Logout</a>
      
    </div>
                <?php } elseif($this->session->userdata('User_type')) {?>
<div class="dropdown">
    <button class="dropbtn"><i style="font-size: 20px" class="fa fa-user-circle"></i> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a style="" href="<?php echo base_url('home/logout') ?>">Logout</a>
      
    </div>
                <?php } else{ ?>
             <li><a style="color:#ffff" href="<?php echo base_url('home/signin') ?>">Signin</a></li>
           <?php } ?>
                </ul>
              </nav>
             
<!-- <a href="<?php echo base_url('home/logout') ?>">Logout</a> -->
              <!-- Hamburger -->

              <div class="hamburger ml-auto">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_social d-flex flex-row align-items-center justify-content-start">
      <ul class="d-flex flex-row align-items-start justify-content-start">
        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </header>

  <!-- Menu -->

  <div class="menu">
    <div class="menu_header d-flex flex-row align-items-center justify-content-start">
      <div class="menu_logo"><a href="index.html">Travello</a></div>
      <div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
    </div>
    <div class="menu_content">
      <ul>
        <li><a href="inex.html">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <div class="menu_social">
      <div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
      <ul class="d-flex flex-row align-items-start justify-content-start">
        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      </ul>
    </div>
     <style type="text/css">
      .dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
 
  
  <!-- Home -->

