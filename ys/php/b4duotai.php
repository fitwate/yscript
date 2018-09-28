<?php
require('../login_fail.php');
	interface usb{
	
		function mount();
		function work();
		function unmount();
	}
	class upan implements usb{
	
		function mount(){
		
			echo 'u pan mount ok,can use<br>';
		}
		
		function work(){
			echo 'u pan start working<br>';
		
		}
		
		function unmount (){
			echo 'u pan unmount ok <br>';
		
		}
	}

        class fengshan implements usb{

                function mount(){

                        echo 'fengshan mount ok,can use<br>';
                }

                function work(){
                        echo 'fengshan start working<br>';

                }

                function unmount (){
                        echo 'fengshan unmount ok <br>';

                }
        }

	class diannao {
	
		function useusb($usb){
		
			$usb->mount();
			$usb->work();
			$usb->unmount();
		}
	}

	class worker {
		
		function install(){
		
			$dn=new diannao;

			$up=new upan;
			$fs=new fengshan;
			$dn->useusb($fs);
			$dn->useusb($up);
		}	
		
	}

	$ren=new worker;
	
	echo $ren->install();	
		

?>
