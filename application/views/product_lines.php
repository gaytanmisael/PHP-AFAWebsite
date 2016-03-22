          <div class="title-container">
            <div class="title">
              <nav class="bread-crumbs">
                <ul>
                  <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                  </li>
                  <li>/</li>
                  <li>
                    <a href="<?php echo base_url() . 'site/product_lines';?>">Product Lines</a>
                  </li>
                </ul>
              </nav>
              <h3 class="heading">Product Lines</h3>
            </div>
          </div>

          <section class="content-main product row container">
            <div class="related products">
              <ul class="products">
                <?php foreach($get_product_lines as $row){

                  echo '<li class="product type-product">
                          <a href="' . $row->url . '">
                            <div class="img-wrap layers-storekit-flip">
                              <img src="'. base_url() . 'assets/img/product-images/' .  $row->pic . '" class="">
                            </div>
                            <h3>' . $row->name . '</h3>
                            <span class="price">' . $row->description . '</span>
                          </a>
                          <a rel="nofollow" href="' . $row->url . '" class="button product_type_simple ">Learn More</a>
                        </li>' . "\r\n";
                }?>
              </ul>
            </div>
          </section>
