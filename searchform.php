<form class="search__left main-search-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
  <input class="search__input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" required/>
  <input class="search__btn btn btn-grey" type="submit" id="searchsubmit" value="Поиск">
</form>