<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Act_policial;
use App\Empleado;


class PolicialesController extends Controller
{
    public function __construct(){
       Carbon::setLocale('es');
                                 }

    


        public function index($id){
        	  $carbon=Carbon::now();
              $empleados= Empleado::find($id);
              
              $atc_policiales=Act_policial::orderBy('id','DESC')->paginate(19);
              
             // $empleados->each(function($empleados){
              	$empleados->atc_policiales;

              	$empleados->orderBy('id','DESC')->paginate(4);
              //});

              

         
return view('templates.admin.atc_policiales.index')->with('empleados',$empleados)->with('atc_policiales',$atc_policiales);
                               } 
/*
 public function index(Request $request){
          
          $carbon=Carbon::now();                
           //dd($request->name);
          $empleados=Empleado::search($request->name)->orderBy('id','DESC')->paginate(19);
          $images=Image::all();                    
          $empleados->each(function($empleados){
          $empleados->images;                   });

          $proyecto=Proyecto::all();
          $empleados->each(function($empleados){
          $empleados->proyecto;
                                               }); 
                    

          return view('templates.admin.empleados.index')->with('empleados',$empleados)->with('carbon',$carbon);                         
                                               }
  



*/

        public function create($id){
        	$empleados=  Empleado::find($id);
         return view('templates.admin.atc_policiales.create')->with('empleados',$empleados); 
        }                                                             


  
    	public function store(Request $request){
  
    		    $atc_policiales= new Act_policial();
    		    

                
				if($request->file('image')) { 

				$file=$request->file('image');
				$name='ATCPO_'.time().'.'.$file->getClientOriginalExtension();
				$path = public_path().'/images/policiales/';
				$file->move($path,$name);
				                              }
				 $atc_policiales->name=$name;
				 $atc_policiales->empleado_id=$request->empleado_id;
				
				 
				$atc_policiales->save();                             


                return redirect()->route('empleados.indexATCPO',$request->empleado_id);
										
	          }
    




}
