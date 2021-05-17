<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*** Front End Panel Routes **/

$route['default_controller'] = 'home';

$route['explore_controller'] = 'explore';

$route['team'] = 'explore/team';

$route['teaminfo'] = 'explore/teaminfo';

$route['program'] = 'explore/program';

$route['fees'] = 'explore/fees';

$route['express_controller'] = 'express';

$route['enquiry'] = 'express/enquiry';

$route['testimonial'] = 'express/testimonial';

$route['testinfo'] = 'express/testinfo';

$route['contactus'] = 'express/contactus';

$route['branch_view'] = 'express/branch_view';


/*** Back End Admin Panel Routes **/

$route['admin'] = 'home/admin';

$route['dashboard'] = 'dashboard';

$route['slider'] = 'dashboard/slider';

/* Explore Tab Routes */

$route['approach'] = 'dashboard/approach';

$route['approachtabs'] = 'dashboard/approachtabs';

$route['leader'] = 'dashboard/leader';

$route['our_program'] = 'dashboard/our_program';

$route['fee_structure'] = 'dashboard/fee_structure';

/* Express Tab Routes */

$route['enquiry_form'] = 'dashboard/enquiry_form';

$route['testmoni_form'] = 'dashboard/testmoni_form';

$route['testmoni_create'] = 'dashboard/testmoni_create';

$route['testmoni_view'] = 'dashboard/testmoni_view';

/* Enjoy Tab Routes */

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
