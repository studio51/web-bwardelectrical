<?php require('tmpl/header.php'); ?>
        
            <div class="row">
                <div class="col-xs-12"><img src="./css/img/banner.png" class="img-responsive" /></div>
            </div>
                     
            <section id="about">
                <header>
				<title>B Ward Electrical Services | Electrician | Electrical Contractors | Commercial electrician | Domestic Electrician | Electrical Services </title>
				<meta name="description" content="B Ward Electrical Services are a trusted, local electrical company based in Cheadle, South Manchester. With over 12 years of experience in domestic and commercial electrical services">
                    <div class="row">
                        <div class="col-xs-12 text-left">
                            <h1 class="seo hide">B Ward Electrical Services</h1>
                            <h3>B Ward Electrical Services</h3>
                        </div>
                    </div>
                </header>
                    
                <article>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>
                                We are a trusted, local electrical company based in Cheadle, South Manchester.
                                
                                <br />
                                
                                We have been established for over 12 years and have a great deal of experience in the domestic and commercial sectors.
                            </p>
                             
                            <p>
                            
                                <img src="css/img/accreditations/elsare.png" alt="Electric Safe Register" title="Electric Safe Register">
                                <img src="css/img/accreditations/napit.png" alt="The National Association of Professional Inspectors and Testers" title="The National Association of Professional Inspectors and Testers">
                            
                                With jobs all over Manchester and Cheshire, including Stockport, Didsbury, Altrincham and Hale, we have the expertise to help you with your domestic or commercial electrical requirements, whether your property is large or small.
                                
                                <br /> <br />
                                
                                We are members of the <abbr title="ESR">Electric Safe Register</abbr> and <abbr title="NAPIT">The National Association of Professional Inspectors and Testers</abbr>, ensuring that we comply with Part P.
                            </p>
                            
                        </div>
                    </div>
                </article>
            </section>
            
            <section id="testimonials">
                <ul class="list-unstyled">
                
                    <?php
                 
                        $xmlFile = 'xml/testimonials.xml';
                        $xslFile = 'xml/transform.xml';
                        
                        $doc = new DOMDocument();
                        $xsl = new XSLTProcessor();
                        
                        $doc->load( $xslFile );
                        $xsl->importStyleSheet( $doc );
                        
                        $doc->load( $xmlFile );
                        
                        echo $xsl->transformToXML( $doc );
                    ?>
                    
                </ul>
            </section>
    
        </div>
    </div>

    <div class="row">
        <section>
            <div class="col-sm-10 col-xs-12">
                <h4 class="text-info">We offer a FREE visual safety check, call or use the contact form more details !</h4>
            </div>
            
            <div class="col-md-2 col-sm-12 col-xs-12">
                <a href="tmpl/contact.php" data-toggle="modal" data-target="#modal" class="btn btn-primary btn-block btn-md"><i class="fa fa-envelope"></i></a>
            </div>
        </section>
    </div>
    
<?php require('tmpl/footer.php'); ?> 