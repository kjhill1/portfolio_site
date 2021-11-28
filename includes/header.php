
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >



<title>KJHill Designs</title>
<!-- this is from the HTML website page css is same as website page -->
<link href="css/styles_portfolio.css" type="text/css" rel="stylesheet">
<script>
     function toggle() {
        let header = document.querySelector("#header");
        header.classList.toggle("active1");
      }
</script>
</head>


<body>
<header>
    <div id="header">
        <img id="logo" src="images/logo.svg" alt="logo">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="projects.php">UX Projects</a></li>
            <li><a href="">About</a></li>
            <li><a href="contact.php">Contact</a></li>

        </ul>
        <div class="toggle" onclick="toggle()"></div>

        <!--responsive nav menu https://dev.to/nikhil27b/responsive-navbar-using-html-css-3aic -->
    </nav>
        
    </div>
        <!-- closes header-i -->
        
</header>