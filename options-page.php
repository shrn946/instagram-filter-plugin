<?php

// Callback function to display the plugin admin page

 ?>
<?php
// Add a menu item in the admin menu
add_action('admin_menu', 'instagram_filter_plugin_menu');

function instagram_filter_plugin_menu() {
    // Add a submenu page under the "Settings" menu
    add_submenu_page(
        'options-general.php',          // parent menu slug
        'Instagram Filter Plugin',      // page title
        'Instagram Filter Plugin',      // menu title
        'manage_options',               // capability
        'instagram-filter-settings',    // menu slug
        'instagram_filter_admin_page'   // callback function to display the page content
    );
}

// Callback function to display the plugin admin page
function instagram_filter_admin_page() {
    ?>
    <div class="con-out">
 
  
    <div class="container grid-lg text-center">
    
    
    <div class="section section-filters center-me">
  
<h2>Instagram Image Filter Wordpress Plugin</h2>
<h3> Fetch and enqueue Instagram filter styles.</h3>

<iframe width="560" height="315" src="https://www.youtube.com/embed/gcXlXFu9iKM?si=t6Wx4OgXKmdPLUQ_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  
  </div>
  
  
      <div class="columns">
        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image">
            
            
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Normal</div>
              <div class="text-gray c-select-all"></div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-1977">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">1977</div>
              <div class="text-gray c-select-all">filter-1977</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-aden">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Aden</div>
              <div class="text-gray c-select-all">filter-aden</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-amaro">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Amaro</div>
              <div class="text-gray c-select-all">filter-amaro</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-ashby">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Ashby</div>
              <div class="text-gray c-select-all">filter-ashby</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-brannan">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Brannan</div>
              <div class="text-gray c-select-all">filter-brannan</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-brooklyn">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Brooklyn</div>
              <div class="text-gray c-select-all">filter-brooklyn</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-charmes">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Charmes</div>
              <div class="text-gray c-select-all">filter-charmes</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-clarendon">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Clarendon</div>
              <div class="text-gray c-select-all">filter-clarendon</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-crema">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Crema</div>
              <div class="text-gray c-select-all">filter-crema</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-dogpatch">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Dogpatch</div>
              <div class="text-gray c-select-all">filter-dogpatch</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-earlybird">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Earlybird</div>
              <div class="text-gray c-select-all">filter-earlybird</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-gingham">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Gingham</div>
              <div class="text-gray c-select-all">filter-gingham</div>
            </div>
          </div>
        </div>
        
        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-ginza">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Ginza</div>
              <div class="text-gray c-select-all">filter-ginza</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-hefe">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Hefe</div>
              <div class="text-gray c-select-all">filter-hefe</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-helena">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Helena</div>
              <div class="text-gray c-select-all">filter-helena</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-hudson">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Hudson</div>
              <div class="text-gray c-select-all">filter-hudson</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-inkwell">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Inkwell</div>
              <div class="text-gray c-select-all">filter-inkwell</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-kelvin">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Kelvin</div>
              <div class="text-gray c-select-all">filter-kelvin</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-juno">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Juno</div>
              <div class="text-gray c-select-all">filter-juno</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-lark">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Lark</div>
              <div class="text-gray c-select-all">filter-lark</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-lofi">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Lo-Fi</div>
              <div class="text-gray c-select-all">filter-lofi</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-ludwig">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Ludwig</div>
              <div class="text-gray c-select-all">filter-ludwig</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-maven">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Maven</div>
              <div class="text-gray c-select-all">filter-maven</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-mayfair">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Mayfair</div>
              <div class="text-gray c-select-all">filter-mayfair</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-moon">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Moon</div>
              <div class="text-gray c-select-all">filter-moon</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-nashville">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Nashville</div>
              <div class="text-gray c-select-all">filter-nashville</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-perpetua">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Perpetua</div>
              <div class="text-gray c-select-all">filter-perpetua</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-poprocket">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter"/>
            </div>
            <div class="card-header">
              <div class="h5">Poprocket</div>
              <div class="text-gray c-select-all">filter-poprocket</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-reyes">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Reyes</div>
              <div class="text-gray c-select-all">filter-reyes</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-rise">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Rise</div>
              <div class="text-gray c-select-all">filter-rise</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-sierra">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Sierra</div>
              <div class="text-gray c-select-all">filter-sierra</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-skyline">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Skyline</div>
              <div class="text-gray c-select-all">filter-skyline</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-slumber">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Slumber</div>
              <div class="text-gray c-select-all">filter-slumber</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-stinson">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Stinson</div>
              <div class="text-gray c-select-all">filter-stinson</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-sutro">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Sutro</div>
              <div class="text-gray c-select-all">filter-sutro</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-toaster">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Toaster</div>
              <div class="text-gray c-select-all">filter-toaster</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-valencia">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Valencia</div>
              <div class="text-gray c-select-all">filter-valencia</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-vesper">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Vesper</div>
              <div class="text-gray c-select-all">filter-vesper</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-walden">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Walden</div>
              <div class="text-gray c-select-all">filter-walden</div>
            </div>
          </div>
        </div>

        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-willow">
            
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">Willow</div>
              <div class="text-gray c-select-all">filter-willow</div>
            </div>
          </div>
        </div>
        
        <div class="column col-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-image filter-xpro-ii">
              <img src="<?php echo plugins_url('assets/img/instagram.jpg', __FILE__); ?>"  class="img-responsive" alt="Instagram.css - Pure CSS Instagram filter">
            </div>
            <div class="card-header">
              <div class="h5">X-Pro II</div>
              <div class="text-gray c-select-all">filter-xpro-ii</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  
</div>
    <?php
}

// Callback function to enqueue styles for the admin page
function instagram_filter_admin_styles() {
    // Enqueue the demo.css for the admin page
   
		    wp_enqueue_style('admin-insta', plugins_url('dist/instagram.min.css', __FILE__));
		 wp_enqueue_style('admin-styles', plugins_url('styles.css', __FILE__));
}

// Hook to enqueue styles for the admin page
add_action('admin_enqueue_scripts', 'instagram_filter_admin_styles');
