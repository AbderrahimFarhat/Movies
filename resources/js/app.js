require('./bootstrap');
function getxhr(){
    try{xhr=new XMLHttpRequest();}
    catch(e){
       try{xhr=new ActiveXObject("Microsoft.XMLHTTP");}
       catch(e1){
          try{xhr=new ActiveXObject("Msxml2.XMLHTTTP");}
          catch(e2){
             alert("AJAX n'est pas supporté par votre navigateur!");
          }
       }
    }
    return xhr;
 }

 document.getElementById("search-input").addEventListener('keyup',(event)=>{
   fetch("https://api.themoviedb.org/3/search/movie?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&query=spiderman&page=1&include_adult=false")
   .then(res=>res.json()).then(res=>{
      console.log(res["results"])
   })
})