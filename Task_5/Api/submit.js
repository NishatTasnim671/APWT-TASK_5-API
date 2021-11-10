function submit(){
    var categorydata={};
    categorydata.name=document.getElementById("name").value;
    categorydata.desc=document.getElementById("desc").value;
   

    $.ajax({
        url:"http://127.0.0.1:8000/api/Category/submit",
        type:"post",
        data:categorydata
      });

      window.location="submit.html";

    
}