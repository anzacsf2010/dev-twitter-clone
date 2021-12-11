<?php
    include ('../models/server.php');

    function display_search() {
        echo '<form class="form-inline"> 
                <div class="form-group">
                <input type="hidden" name="page" value="search">
                <input type="text" name="q" class="form-control" id="Search" style="margin-bottom: 10px" placeholder="Search Tweets">
                </div>
                    <button type="submit" class="btn btn-primary">Search
                    </button>
               </form>';
    }