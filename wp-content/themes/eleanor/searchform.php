<?php

/*
*   Template for the search form
*
*   General search form used in the theme or in the widgets.  Uses Bootstrap 4
*   Theme: Eleanor, based on _s
*   Help: https://developer.wordpress.org/reference/functions/get_search_form/
*
*/

?>

<?php
/*<form action="/" method="get" class="form-inline">
  <label class="sr-only" for="search">Search</label>
  <div class="input-group">
    <input type="text" class="form-control" id="search" value="<?php the_search_query(); ?>" placeholder="Search" aria-label="Search" aria-describedby="searchButton">
    <div class="input-group-append">
      <button id="searchButton" class="btn btn-secondary" type="button"><i class="fa fa-search" name="Search" title="Search"></i></button>
    </div><!--input-group-append-->
  </div><!--input-group-->
</form>*/
?>

<form action="/" method="get" class="inline-form">
    <label for="search" class="sr-only">Search in <?php echo home_url( '/' ); ?></label>
    <div class="input-group">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search Strategies" aria-describedby="searchButton" />
<div class="input-group-append">
  <button class="btn btn-secondary" type="submit" value="<?php the_search_query();?>"><i class="fa fa-search" name="Search" title="Search"></i></button>
</div>
  </div>
</form>
