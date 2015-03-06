<?php require('tmpl/header.php'); ?>

          <section id="contact">
              <div class="row">
                  <div class="col-xs-12">
                      <div id="map"></div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-xs-12">
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <h5>Say Hello!</h5>

                              <p>Drop us a line via <a href="mailto:info@bwardelectrical.co.uk?subject=Hello!&body=I%20just%20want%20to%20say%20hello!">email</a> or use the contact form for any other enquiries.</p>

                              <a href="tmpl/contact.php" data-toggle="modal" data-target="#modal" class="btn btn-primary btn-md">Contact Form</a>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <h5>Address</h5>

                              <address>
                                  B Ward Electrical Services <br />
                                  21 Heathside Road <br />
                                  Cheadle Heath <br />
                                  Stockport <br />
                                  SK3 0SW
                              </address>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <h5>Contact Information</h5>

                              <p><i class="fa fa-phone"></i> 0161 491 4688</p>
                              <p><i class="fa fa-mobile"></i> 0770 895 2757</p>
                              <p><i class="fa fa-envelope"></i> info@bwardelectrical.co.uk</p>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <ul class="list-unstyled">
                                  <li><a href="https://twitter.com/bw_electrical" class="btn btn-twt btn-md" title="Follow us on Twitter"><i class="fa fa-twitter"></i> Find us on Twitter</a></li>
                                  <li><a href="https://www.facebook.com/bwelectricalservices" class="btn btn-fac btn-md" title="Add us on Facebook"><i class="fa fa-facebook"></i> Find us on Facebook</a></li>
                                  <li><a href="http://www.a-stardrivingschool.com" class="btn btn-success btn-md" title="Check our Partners"><i class="fa fa-external-link"></i> <span>A <i class="fa fa-star fa-absolute fa-tiny"></i></span> Driving School</a></li>
                              </ul>
                          </div>
                      </div>

                  </div>
              </div>
          </section>

          <section id="testimonials" class="mt20">
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

<?php require('tmpl/footer.php'); ?>
