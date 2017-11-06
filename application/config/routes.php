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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
$route['about-us'] = 'home/about';

$route['psd-to-html-conversion-service'] = 'home/psd_to_html';
$route['psd-to-html5-conversion-service'] = 'home/psd_to_html5';
$route['psd-to-wordpress-conversion-service'] = 'home/psd_to_wordpress';
$route['psd-to-responsive-wordpress-conversion-service'] = 'home/psd_to_responsive_wordpress';
$route['psd-to-megento-conversion-service'] = 'home/psd_to_megento';
$route['psd-to-email-conversion-service'] = 'home/psd_to_email';
$route['psd-to-responsive-email-conversion-service'] = 'home/psd_to_responsive_email';
$route['psd-to-responsive-conversion-service'] = 'home/psd_to_responsive';
$route['html-to-responsive-conversion-service'] = 'home/html_to_responsive';
$route['html-to-wordpress-conversion-service'] = 'home/html_to_wordpress';
$route['hire-a-php-programmer'] = 'home/hire_php_programmer';
$route['custom-php-development'] = 'home/custom_php_development';

$route['portfolio'] = 'home/portfolio';
$route['blog'] = 'home/blog';
$route['faq'] = 'home/faq';
$route['testimonial'] = 'home/testimonial';
$route['contact-us'] = 'home/contact_us';
$route['thank-you'] = 'home/thank_you';
$route['order-now'] = 'order';
$route['checkout'] = 'order/checkout';

$route['refund-policy'] = 'home/refund_policy';
$route['privacy-policy'] = 'home/privacy_policy';
$route['terms-and-conditions'] = 'home/terms_and_conditions';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
