require('./bootstrap');

 document.getElementById("search-input").addEventListener('keyup',(event)=>{
   keyword=event.target.value;
   objs = document.getElementsByClassName("movie-search");
   arrs = [...objs]
   arrs.map((elm)=>{
      elm.remove()
   })
   i=0;
   fetch("https://api.themoviedb.org/3/search/movie?api_key=f7811093155c51fea3e2df1050c0fe87&language=en-US&query="+keyword+"&page=1&include_adult=false")
   .then(res=>res.json()).then(res=>{

      res["results"].map(movie=>{
         if(i<5){
            i++;
            a = document.createElement("a");
            img = document.createElement("img");
            p   = document.createElement("p");
      
            a.className="movie-search";
            img.className="img-search";
            p.className = "img-search-description"
      
            a.href = "/movie?title="+movie['title']+"&id="+movie['id'];
            img.src ="https://image.tmdb.org/t/p/w300/"+ movie["poster_path"];
            p.innerHTML=movie["title"];
   
            a.appendChild(img);
            a.appendChild(p);
            document.getElementById("movie-search-holder").appendChild(a)
         }

      })
   })
})
