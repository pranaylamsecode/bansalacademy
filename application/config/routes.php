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
$route['default_controller'] = 'home';
$route['home'] = 'home';
$route['about'] = 'about';
$route['scholarship'] = 'scholarship';
$route['career'] = 'career';
$route['contact'] = 'contact';
$route['enquiry'] = 'enquiry';
$route['digital_class'] = 'digital_class';
$route['video_leacture'] = 'video_leacture';
$route['eleven_neet'] = 'eleven_neet';
$route['twelve_pass_neet'] = 'twelve_pass_neet';
$route['eleven_jee_mainadv'] = 'eleven_jee_mainadv';
$route['twelve_jee_mainadv'] = 'twelve_jee_mainadv';
$route['twelve_pass_jee_mainadv'] = 'twelve_pass_jee_mainadv';
$route['scholarship_registration'] = 'scholarship_registration';
$route['result'] = 'result';

$route['question-paper'] = 'common/questionPaper';
$route['question'] = 'common/question';
$route['save-answer'] = 'common/saveAnswer';
$route['quiz'] = 'common/startQuiz';
$route['quiz-complete'] = 'common/quizComplete';
$route['quiz-new'] = 'ujian';
$route['start-quiz'] = 'ujian/token/8';
$route['start-quiz'] = 'ujian/token/8';

$route['ujian-key'] = 'ujian/?key=8f8440daa0c261c82e63aa24252057eb94849c07ebed3e2159b663ca04f2bdeb8ae65f74d2ea98f8939b08bb97e53f9132c3c7c01a9e43ac0a35e809162b7d2ebl5b4g4o4WtgQLQAZ1AQonTH9N3IaAvseO9FGhrnRsk%3D';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
