<?php namespace App\Controllers;

class SistemaWebController extends BaseController
{
	public function index()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('SistemaWeb/Index').
				  view('Plantilla/footer');

		return $vistas;
	}

    public function origen()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('SistemaWeb/origen').
				  view('Plantilla/footer');

		return $vistas;
	}

	public function IM()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('SistemaWeb/InquisicionMedieval').
				  view('Plantilla/footer');

		return $vistas;
	}

    public function IE()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('SistemaWeb/InquisicionEspanola').
				  view('Plantilla/footer');

		return $vistas;
	}

	public function IR()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('SistemaWeb/InquisicionRomana').
				  view('Plantilla/footer');

		return $vistas;
	}

	public function IP()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('SistemaWeb/InquisicionPortuguesa').
				  view('Plantilla/footer');

		return $vistas;
	}
	//--------------------------------------------------------------------

}