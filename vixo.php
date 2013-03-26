<?php
/**
 * @package Vixo Back Office Integration Plugin
 * @version 1.5
 */
/*
Plugin Name: Embed charts graphs tables and forms with Vixo
Plugin URI: http://wordpress.org/extend/plugins/vixo/
Description: Allows you to integrate Vixo back office systems into WordPress
Author: Gordon Guthrie
Version: 1.5
Author URI: http://wordpress.vixo.com
License: GPL2
*/

/*  Copyright 2013 Hypernumbers Ltd (trading as vixo.com) gordon@vixo.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
  include the debug settings in
*/
/*include 'vixo-debug.php';*/

/*
  Include in the code that provides the shortcode
  This means users can insert [vixo url="http://example.com"]
  In their text and it will insert a vixo control
*/
include 'vixo-shortcode.php';


?>