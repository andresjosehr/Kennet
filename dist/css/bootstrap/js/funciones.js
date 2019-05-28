	$(document).ready(function(){
		$('.divContratar').show();
		//
		$('.burger-button').hide();
 
		$('#contratar').click(function(){
			$('.divContratar').show();
	 
			$('.divTrabajo').hide();
		});

		$('#trabajo').click(function(){
			$('.divTrabajo').show();
            $('.divContratar').hide();
         
		});
});
/* const menudesktop = document.querySelector('.cabecera-logo');
const menucelular = document.querySelector('.menu-responsive');
const burgerButton = document.querySelector('#close-button');

console.log(burgerButton); */