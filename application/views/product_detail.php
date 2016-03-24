          <div class="title-container">
            <div class="title">
              <nav class="bread-crumbs">
                <ul>
                  <li>
                    <a href="/">Home</a>
                  </li>
                  <li>/</li>
                  <li>
                    <a href="/site/product_lines">Product Lines</a>
                  </li>
                  <li>/</li>
                  <li>
                    <a href="<?php echo "/site/product_detail/" . $product; ?>">Product Detail</a>
                  </li>
                </ul>
              </nav>
              <h3 class="heading"><?php if($product === 'bean_bags'){ echo "Bean Bags";}?></h3>
            </div>
          </div>

          <section class="content-main product row container">
            <?php foreach ($product_details as $row) {
              echo '<div class="column span-12">
              <div class="product-top clearfix">
                <div class="row">

                  <div class="column product-images span-6">
                    <div class="images">
                      <a href="' . base_url() . 'assets/img/product-detail/' . $row->pic1 . '" rel="gallery1" class="woocommerce-main-image zoom" title="'. $row->name .'">
                        <img src="' . base_url() . 'assets/img/product-detail/' . $row->pic1 . '" alt="' . $row->name . '">
                      </a>
                    </div>
                  </div>

                  <div class="column purchase-options-container span-6">
                    <div class="thumbnails columns-3">';


                    if($row->pic2 != '') {
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic2 . '" rel="gallery1" class="zoom first" title="' . $row->name . '">
                        <img  src="' . base_url() . 'assets/img/product-detail/' . $row->pic2 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic3 != ''){
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic3 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img  src="' . base_url() . 'assets/img/product-detail/' . $row->pic3 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic4 != ''){
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic4 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img width="220" height="220" src="' . base_url() . 'assets/img/product-detail/' . $row->pic4 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic5 != '') {
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic5 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img width="220" height="220" src="' . base_url() . 'assets/img/product-detail/' . $row->pic5 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic6 != '') {
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic6 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img width="220" height="220" src="' . base_url() . 'assets/img/product-detail/' . $row->pic6 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic7 != '') {
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic7 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img width="220" height="220" src="' . base_url() . 'assets/img/product-detail/' . $row->pic7 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic8 != '') {
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic8 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img width="220" height="220" src="' . base_url() . 'assets/img/product-detail/' . $row->pic8 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic9 != '') {
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic9 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img width="220" height="220" src="' . base_url() . 'assets/img/product-detail/' . $row->pic9 . '" class="" alt="">
                      </a>';
                    }

                    if($row->pic10 != '') {
                      echo '<a href="' . base_url() . 'assets/img/product-detail/' . $row->pic10 . '" rel="gallery1" class="zoom first" title="'. $row->name .'">
                        <img width="220" height="220" src="' . base_url() . 'assets/img/product-detail/' . $row->pic10 . '" class="" alt="">
                      </a>';
                    }


                  echo '  </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="woocommerce-tabs wc-tabs-wrapper">
              <ul class="tabs wc-tabs">
                <li class="description_tab active">
                  <a href="#description_tab">Description</a>
                </li>
              </ul>

              <div class="panel entry-content wc-tab" id="tab-description">
                <h2>Product Description</h2>

                <p>' . $row->description . '</p>


              </div>

            </div>';
          }; ?>

          </section>
