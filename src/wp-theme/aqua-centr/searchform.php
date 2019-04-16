<form role="search" method="get" class="header-top__search" id="searchform" action="<?php echo home_url( '/' ) ?>" >

	<!-- <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск"/>

  <div>
    <input type="submit"  id="searchsubmit" value="" />
   
  </div> -->

  <input type="text" class="search-input" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск">
      <!-- <img src="<?php //echo get_template_directory_uri() . '/assets/img/header/search.png';?>" alt="" class="search-img"> -->

  <div>
    <input type="submit"  id="searchsubmit" value="" />
   
  </div>

</form>