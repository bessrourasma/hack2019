var nf = document.f1.nf.value ; 
var mail = document.f1.mail.value ; 
var mail1 = document.f1.mail1.value ;
var psw = document.f1.psw.value ;
var psw1 = document.f1.psw1.value ; 
var cin = document.f1.cin.value ;
var ph = document.f1.ph.value ;
function verif()

{
    
  for (i = 0 ; i < nf.length ; i++)
 {
   if ((nf.charAt(i)<"0") || (nf.charAt(i) >"9" )) 
   {
  {alert("Number detected") ;
   return false ; }
   }
}

   if (mail != mail1) 
   {
   {alert("Confirm Mail") ;
   return false ;}
   }

   if (psw != psw1) 
   {
   {alert("Confirm Password") ; 
   return false ;}
   }

   if(Cin.length!=8 || (Cin.charAt(0)!='0' && Cin.charAt(0)!='1')|| !Numerique(Cin))
   {
   {alert('Cin invalide'); return false;} 
   }

   if(ph.length!=8 || ph.charAt(0)==0  )
   {
   {alert('Phone Not Valid')}
   }

   


}
function generercaptcha()
{    
	var min=1;
	var max=26;
	//for ASCII de "A"==>"A".charCodeAt(0));
	//For ASCII de "a"==>"a".charCodeAt(0));
	var car='';
    for(i=0;i<10;i++)
    {
		var k=Math.floor(Math.random() * (max - min + 1)) + min;
		if(k%2==0){
			car=car+String.fromCharCode(k+"A".charCodeAt(0)-1);}
		else{
			car=car+String.fromCharCode(k+"a".charCodeAt(0)-1);}
	
	//code dans le formulaire
    document.f1.code.value=car;
        }
    }