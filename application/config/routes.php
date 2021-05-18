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

$route['enjoy_controller'] = 'enjoy';

$route['events'] = 'enjoy/events';

$route['events_view'] = 'enjoy/events_view';

$route['media'] = 'enjoy/media';

$route['media_view'] = 'enjoy/media_view';


/*** Back End Admin Panel Routes **/

$route['admin'] = 'home/admin';

$route['dashboard'] = 'dashboard';

$route['slider'] = 'dashboard/slider';

/* Explore Tab Routes Start */

$route['approach'] = 'dashboard/approach';

$route['approachtabs'] = 'dashboard/approachtabs';

$route['leader'] = 'dashboard/leader';

$route['more_leader'] = 'dashboard/more_leader';

$route['leader_view'] = 'dashboard/leader_view';

$route['our_program'] = 'dashboard/our_program';

$route['fee_structure'] = 'dashboard/fee_structure';

/* Explore Tab Routes End */

/* Express Tab Routes Start */

$route['enquiry_form'] = 'dashboard/enquiry_form';

$route['testmoni_form'] = 'dashboard/testmoni_form';

$route['testmoni_create'] = 'dashboard/testmoni_create';

$route['testmoni_view'] = 'dashboard/testmoni_view';

$route['contact'] = 'dashboard/contact';

$route['contact_create'] = 'dashboard/contact_create';

$route['contact_view'] = 'dashboard/contact_view';

/* Express Tab Routes End */

/* Enjoy Tab Routes Start */

$route['gallery_img'] = 'dashboard/gallery_img';

$route['event'] = 'dashboard/event';

$route['event_create'] = 'dashboard/event_create';

$route['event_view'] = 'dashboard/event_view';

$route['medias'] = 'dashboard/medias';

$route['medias_create'] = 'dashboard/medias_create';

$route['medias_view'] = 'dashboard/medias_view';

$route['upload_images'] = 'dashboard/upload_images';

$route['social_media'] = 'dashboard/social_media';

/* Enjoy Tab Routes End */

/* SEO Tab Routes Start */

$route['seo_pages'] = 'seo/seo_pages';

$route['seo_meta'] = 'seo/seo_meta';

/* SEO Tab Routes End */

$route['access_controller'] = 'access';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
