
            </div>
    
        	<div id="push"></div>
    	</div> <!-- END #wrapper -->
	
    	<footer>
        	<div class="container">
                <div class="row copyright">
                    <div class="col-sm-8 col-xs-12">
                        <p>Copyright &copy; 2013 B Ward Electrical Services. All rights Reserved</p>
                    </div>
                    
                    <div class="col-sm-4 col-xs-12">
                        <a href="http://www.creative-studio51.com/"><img class="img-responsive" src="../css/img/studio51.png" title="Design &amp; Development by Studio51" alt="Design &amp; Development by Studio51" /></a>
                    </div>
                </div>
        	</div>
        </footer>
        
		<div id="modal" class="modal"></div>
        
     	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

        <script src="./js/bootstrap.js"></script>
    	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="./js/maps.js"></script>
		<script src="./js/queries.js"></script>
        
		<script>
		
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  
			ga('create', 'UA-44699183-3', 'bwardelectrical.co.uk');
			ga('send', 'pageview');
		
			$(document).ready(function() {
												
				$('#map').gmap().bind('init', function( ev, map ) {
			
					$('#map').gmap('addMarker', {'position': '53.39944475539804,-2.1927983760833', 'bounds': true }).click(function() {
						
						$('#map').gmap('openInfoWindow', {'content': 'B Ward Electrical Services HQ'}, this);
					});
					
					$('#map').gmap('option', 'zoom', 16);
				});
				
				$('#testimonials li').hide().eq( 0 ).show();
			
				(function showNextTestimonial(){
			
					$('#testimonials li:visible').delay( 7500 ).fadeOut('slow',function(){
			
						$( this ).appendTo('#testimonials ul');
			
						$('#testimonials li:first').fadeIn('slow',function(){
			
							showNextTestimonial();
						});
					});
				})();
			});
			
		</script>
        
    </body>
</html>