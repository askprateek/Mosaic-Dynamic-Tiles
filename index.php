<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel ="stylesheet" href="./css/style.css">
  <script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>

<body>
  <div class="col-md-12" id="grid">

  </div>
  <script>
  $(document).ready(function(){
    $.ajax({
    url: "/slider/media/",
    success: function(data){
      var link;
      var str;
      var id;
      var images= new Array();
       $(data).find("a:contains(.png)").each(function(){
          // will loop through
          link=$(this).attr("href");
          str=new String(link);
          id =parseInt(str.split(".")[0]);
          //console.log(id);
          images[id]=1;
          //console.log(images[id]);
          if(id <10)
          {
            images[str]=1;
            console.log(id);
            $("#grid").append('<img id =\"images\"src=\"./media/'+id+'.png \">');
          }
          else{
            console.log(id);
            images[id]=0;
          }

          //$("#grid").append(' <img class= \"img-responsive pull-left\" src=\"./media/' +link+ ' \" >');
          //$("#grid").append(' <a style =\"background-image:url(\"./media/' +link+ ' \"); height:150px; width=150px \"> </a>');
       });
    }
  });
  });

</script>
</body>
</html>
