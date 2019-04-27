<form role="search" method="get" class="header-top__search" id="searchform" action="<?php echo home_url( '/' ) ?>" >

  <input type="text" class="search-input" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск">
      
  <div>
    <input type="submit"  id="searchsubmit" value="" />
  </div>

</form>