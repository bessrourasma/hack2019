function verif()
{
  mail1 = document.f1.mail1.value ;
  mail= document.f1.mail.value ;
  ps= document.f1.psw.value ;
  ps1= document.f1.psw1.value ;
  tel= document.f1.ph.value ;
  var x = /^[A-Za-z]+$/
  var isValid = x.test(document.getElementById("nf").value);
  if (!isValid) 
  {
      alert("Only Alphabets ");
  

  return isValid; }
  
  if (isNaN(f1.mail.value.indexOf("@")==-1)) 
  {
    alert("No @") ; 
  }
for (var i=0 ; i<mail1.length ; i++)
{
  for (var j=0 ; j<mail.length ; j++)
  {
if (mail.charAt(j) != mail1.charAt(i))
{
  alert("mail is not confirmed") ;
}
}
}
for (var i=0 ; i<ps1.length ; i++)
{
  for (var j=0 ; j<ps.length ; j++)
  {
if (ps.charAt(j) != ps1.charAt(i))
{
  alert("mail is not confirmed") ;
}
}
}
if (tel.length > 8)
{
  alert("Invalid Phone") ;
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