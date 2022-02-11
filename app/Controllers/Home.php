<?php
	
	namespace App\Controllers;
	
	class Home extends BaseController
	{
		public function index()
		{
			echo view('layout/headh');
			echo view('layout/headerh');
			echo view('home');
			echo view('layout/footer');
		}
		
		public function price()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/price');
			echo view('layout/footer');
		}
		
		public function about()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/about');
			echo view('layout/footer');
		}
		
		public function blog()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/blog');
			echo view('layout/footer');
		}
		
		public function gallery()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/gallery');
			echo view('layout/footer');
		}
		
		public function contact()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/contact');
			echo view('layout/footer');
		}
		
		public function reglogin()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/reglogin');
			echo view('layout/footer');
		}
		
		public function serchslot()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/serchslot');
			echo view('layout/footer');
		}
		
		public function selectslot()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/selectslot');
			echo view('layout/footer');
		}
		
		public function previewad()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/previewad');
			echo view('layout/footer');
		}
		
		public function cart()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/cart');
			echo view('layout/footer');
		}
		
		public function payment()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/payment');
			echo view('layout/footer');
		}
		
		public function userdash()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/userdash');
			echo view('layout/footer');
		}
		
		public function orderhistory()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/orderhistory');
			echo view('layout/footer');
		}
		
		public function userlivead()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/userlivead');
			echo view('layout/footer');
		}
		
		public function editprofile()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/editprofile');
			echo view('layout/footer');
		}
		
		public function vieworder()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/vieworder');
			echo view('layout/footer');
		}
		
		public function orders()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/orders');
			echo view('layout/footer');
		}
		
		public function adminla()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/admin-live-ads');
			echo view('layout/footer');
		}
		
		public function adminpo()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/admin-pending-orders');
			echo view('layout/footer');
		}
		
		public function adminno()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/admin-new-order');
			echo view('layout/footer');
		}
		
		public function queries()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/queries');
			echo view('layout/footer');
		}
		
		public function userdetails()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/user-details');
			echo view('layout/footer');
		}
		
		public function pricepage()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/pricepage');
			echo view('layout/footer');
		}
		
		public function editblog()
		{
			echo view('layout/head');
			echo view('layout/header');
			echo view('user/editblog');
			echo view('layout/footer');
		}
		
	}
