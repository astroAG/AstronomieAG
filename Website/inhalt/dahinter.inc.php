                </div>
            </div>
        <div id="footer">
                Copyright 1998 - 2010 by Astro-AG der Liebigschule Frankfurt am Main<br />
                Kollwitzstraﬂe 3 | 60488 Frankfurt, Germany
        </div>
    </div>
	<div style="position: relative;"></div>
	</div>
	
	

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        
        (function() { 
            var documentEl = $(document),
                parallaxBg = $('div.parallax');
            
            documentEl.on('scroll', function() {
                var currScrollPos = documentEl.scrollTop();
                parallaxBg.css('background-position', '0 ' + -currScrollPos/4 + 'px');
            });  
        })();
    </script>
	
	
	

        <!--f¸r erweiterte Statistik-->
        <script language="JavaScript" type="text/javascript" src="/JUNETZ/awstats_misc_tracker.js"></script>
		
		
    </body>
</html>