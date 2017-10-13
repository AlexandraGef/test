<form role="search" method="get" id="searchform" class=form-group" action="<?php echo home_url('/');?>">
    <div>
        <input class="form-control" type="text" value="" name="s" id="s" placeholder="<?php the_search_query()?>"/>
        <input class="btn btn-primary" type="submit" id="searchsubmit" value="Szukaj" />
    </div>
</form>