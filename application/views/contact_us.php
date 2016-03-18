<section id="layers-widget-map-1" class="widget layers-contact-widget row content-vertical-massive layers-contact-widget  ">
            <div class="container clearfix">
              <div class="section-title clearfix medium text-center">
                <h3 class="heading">Contact Us</h3>
                <div class="excerpt">
                  <p>We are based in one of the most beautiful places on earth. Come visit!</p>
                </div>
              </div>
            </div>

            <div class="row container">
              <div class="column no-push-bottom span-12">
                <div class="layers-map" style="height:400px; position:relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);" data-zoom-level="14">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.209075549421!2d-117.55419915434814!3d33.88426886121936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcc81ec41cda13%3A0x64467c1d91fcfa56!2s785+E+Harrison+St%2C+Corona%2C+CA+92879!5e0!3m2!1sen!2sus!4v1458064907607" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
              </div>
            </div>

          </secion>

          <section id="layers-widget-column-8" class="widget layers-content-widget row content-vertical-massive">

            <div class="row container list-grid">

              <div class="span-8 column">
                <div class="media image-top medium">
                  <div class="media-body text-left">
                    <h5 class="heading">Contact Us</h5>
                    <div class="excerpt">
                      <div role="form">

                        <div id="results"></div>

                        <?php echo form_open('site/submit', 'class="wpcf7-form" id="myForm"'); ?>
                          <p>
                            Your Name (required)
                            <span class="your-name wpcf7-form-control-wrap">
                              <?php
                                $your_name = array('name' => 'your-name', 'size' => '40', 'type' => 'text', 'value' => set_value('your-name'));
                                echo form_input($your_name);
                              ?>
                            </span>
                          </p>

                          <p>
                            Your Email (required)
                            <span class="your-email wpcf7-form-control-wrap">
                              <?php
                                $your_email = array('name' => 'your-email', 'size' => '40', 'type' => 'text', 'value' => set_value('your-email'));
                                echo form_input($your_email);
                              ?>
                            </span>
                          </p>

                          <p>
                            Subject
                            <span class="your-subject wpcf7-form-control-wrap">
                              <?php
                                $your_subject = array('name' => 'your-subject', 'size' => '40', 'type' => 'text', 'value' => set_value('your-subject'));
                                echo form_input($your_subject);
                              ?>
                            </span>
                          </p>

                          <p>
                            Your Message
                            <span class="your-message wpcf7-form-control-wrap">
                              <?php
                                $your_message = array('name' => 'your-message', 'cols' => '40', 'rows' => '10', 'value' => set_value('your-message'));
                                echo form_textarea($your_message);
                              ?>
                            </span>
                          </p>

                          <p>
                            <?php echo form_submit('mySubmit', 'Send'); ?>
                          </p>
                        <?php echo form_close(); ?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="span-4 column">
                <div class="media image-top medium">
                  <div class="media-body text-left">
                    <h5 class="heading">Headquarters</h5>
                    <div class="excerpt">
                      <p>AFA Inc<br/>785 E Harrison St<br/>Corona CA 92879</p>
                    </div>
                  </div>
                </div>
                <br/>
                <div class="media image-top medium">
                  <div class="media-body text-left">
                    <h5 class="heading">Call us</h5>
                    <div class="excerpt">
                      <p>+1 800 338 8667</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
