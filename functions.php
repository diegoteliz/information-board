<?php
/****************************************************
*********  Copyright © 2011 - Diego Téliz  **********
***************  www.diegoteliz.com  ****************
********  Desing & Developed by Diego Téliz  ********
****************************************************/

/*************************************
	           Settings
*************************************/

/* Create year */
function create_year()
{
    $create_year = 2011;
    return $create_year;
}

/* I started in the world of web at: */
function init_year()
{
    $init_year = 2007;
    return $init_year;
}

/*************************************
	           Utilities
*************************************/

function get_create_year()
{
    $create_year = create_year();
    return $create_year;
}

function get_current_year()
{
    $current_year = date('Y');
    return $current_year;
}

function get_copyright()
{
	$create_year = get_create_year();
    $current_year = get_current_year();
    $cp = 'Copyright &copy; ';
    if ( $create_year < $current_year ) {
		$cp.= $create_year.' - ';
	}
    $cp.= $current_year;
	return $cp;
}

function get_experience_years()
{
    $init_year = init_year();
    $current_year = get_current_year();
    $experience = $current_year - $init_year;
    return $experience;
}

function get_years_old( $birth_day )
{
    list( $Y , $m , $d ) = explode( "-" , $birth_day );
    return( date( "md" ) < $m.$d ? date( "Y" ) - $Y - 1 : date( "Y" ) - $Y );
}

?>