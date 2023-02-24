<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// User
$route['default_controller'] = 'UserController';
$route['Master']             = 'UserController/index';
// AdminController //////////////////////////////////
$route['Dashboard']                     = 'AdminController/index';
$route['Nav']                           = 'AdminController/navpage';
$route['Nav_Edit/(.*)']                 = 'AdminController/nav_edit/$1';
$route['Nav_Edit_Act/(.*)']             = 'AdminController/nav_edit_act/$1';
$route['Nav_Upload/(.*)']               = 'AdminController/nav_img_bt/$1'; 
$route['Nav_Upload_act/(.*)']           = 'AdminController/nav_img_bt_act/$1';
// Home ///////////////////////////////////////////////////////////////////
$route['Home']                          = 'AdminController/list';
$route['Home_Add']                      = 'AdminController/home_add';
$route['Home_Add_Act']                  = 'AdminController/home_add_act';
$route['Home_Edit/(.*)']                = 'AdminController/home_edit/$1';
$route['Home_Edit_Act/(.*)']            = 'AdminController/home_edit_act/$1';
$route['Home_Delete/(.*)']              = 'AdminController/home_delete/$1';
$route['Home_View/(.*)']                = 'AdminController/home_view/$1';
$route['Home_Icon_Edit/(.*)']           = 'AdminController/home_icon_edit/$1';
$route['Home_Icon_Act/(.*)']            = 'AdminController/home_icon_edit_act/$1';
$route['Home_Icon_View/(.*)']           = 'AdminController/home_icon_view/$1';
// About ////////////////////////////////////////////////////////////////////
$route['About']                         = 'AdminController/about_list';
$route['About_Add']                     = 'AdminController/about_add';
$route['About_Add_Act']                 = 'AdminController/about_add_act';
$route['About_Edit/(.*)']               = 'AdminController/about_edit/$1';
$route['About_Edit_Act/(.*)']           = 'AdminController/about_edit_act/$1';
$route['About_Delete/(.*)']             = 'AdminController/about_delete/$1';
$route['About_View/(.*)']               = 'AdminController/about_view/$1';
$route['About_Desc_Add']                = 'AdminController/about_desc_add';
$route['About_Desc_Add_Act']            = 'AdminController/about_desc_add_act';
$route['About_Desc_Edit/(.*)']          = 'AdminController/about_desc_edit/$1';
$route['About_Desc_Edit_Act/(.*)']      = 'AdminController/about_desc_edit_act/$1';
$route['About_Desc_Delete/(.*)']        = 'AdminController/about_desc_delete/$1';
$route['About_Desc_View/(.*)']          = 'AdminController/about_desc_view/$1';

















//////////////////////////////////////////////////////////////
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
