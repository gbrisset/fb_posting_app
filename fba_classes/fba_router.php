<?php
class fba_router {




function add_route($s, $p ){

    $this->route_list[] = ['slug' => $s,  'page' => $p];// page filename
                         
}//end function add_route
// -------------------------------------------------------------------------------------------

function show_routes(){
    return    $this->route_list;
//essentially for testing
                         
}//end function 
// -------------------------------------------------------------------------------------------

function get_page($u){

    $u; // uri cleaned
    $this->page = 'undefined';

    foreach ($this->route_list as $k => $route) {
        if(md5($u)==md5($route['slug'])) $this->page = $route['page'];
    }//end foreach ...

    // Retrieve default page in case of URI failure
    if($this->page == 'undefined'){
        foreach ($this->route_list as $k => $route) {
            if($route['slug']== "/default") $this->page = $route['page'];
        }//end foreach ...
    } //end if ...

    return $this->page;
                         
}//end function get_page
// -------------------------------------------------------------------------------------------

} //end class fba_router 
?>