

 
  function calcular()	{

    
    ahora = new Date();
    luego = new Date();
    luego.setHours(11);
    luego.setMinutes(0);
    luego.setSeconds(0);
    return luego.getTime() - ahora.getTime();
  
  function abrir()	{
    window.open("", "", "");

 

    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'El comercio está cerrado, abre 21 hs.',
        showConfirmButton: false,
        timer: 3000
    })

 }
}
  