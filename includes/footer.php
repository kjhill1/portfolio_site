
   <footer class="nav-footer">
                            <!--Social Links-->
                        <ul>
                            <li><a href="https://github.com/kjhill1"><i class="fab fa-github-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                            <!--Copyright Text-->
                            
                        </ul>   
                        <div class="copy">
                                <p>2021 &copy; Cosmos-Themes.<br>All Right Reserved.</p>
                            </div>
                        </footer>
<!-- </div> -->
<!-- closees page ID  -->


        <!--Ajax Portfolio Container Start-->
        <div class="ajax-portfolio-popup">
            <span class="ajax-loader"></span>
            <div class="navigation-wrap">
                <span class="popup-close"><i class="fas fa-times-circle"></i></span>
            </div>
            <div class="content-wrap">
                <div class="popup-content"></div>
            </div>
        </div>
        <!--Ajax Portfolio Container End-->

        <!--Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <!--Plugins JS-->
        <script src="js/plugins.min.js"></script>
        <!--Google Map Api-->
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <!--Site Main JS-->
        <script src="js/main.js"></script>
        <script>
            var slideIndex = [1,1];
            var slideId = ["mySlides1", "mySlides2"]
            showSlides(1, 0);
            showSlides(1, 1);

            function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
            }

            function showSlides(n, no) {
            var i;
            var x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) {slideIndex[no] = 1}    
            if (n < 1) {slideIndex[no] = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex[no]-1].style.display = "block";  
            }
            </script>

            <script>

    $('table').DataTable();

                </script>
    </body>
</html>
