<?php
namespace App\Http\Controllers;
class PagesController extends Controller{
	public function getIndex(){
		return view('pages.welcome');
	}
	public function getAbout(){
		$first='Shobhit';
		$last='Tripathi';
		$full=$first." ".$last;
		$email='chancer@laravelhost.com';

		return view('pages.about')->withFullname($full)->withEmail($email);
	}
	public function getContact(){
		return view('pages.contact');

	}
	// public function postContact(){

	// }
}