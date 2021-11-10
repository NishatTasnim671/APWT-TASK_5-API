function loading()
{
    let text = "";
    const xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
       
        if(this.readyState==4 && this.status==200)
        {
        const alluser= JSON.parse( this.responseText );
        
        alluser.forEach(myFunction);
        document.getElementById("result").innerHTML = text;
 
        function myFunction(item) {
            var name="<h2>Category name:"+ item.name + "</h1>";
            var desc="<h3>Decription: "+ item.desc + "</h3>";
            

        text += "<div class='cart'>" + "" + name + "" + desc + "" +  "</div>"; 
        }
        }
      
    };
    xhttp.open("GET","http://127.0.0.1:8000/api/Category/list");
    xhttp.send();
}
