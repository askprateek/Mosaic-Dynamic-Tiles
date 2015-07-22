<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
       $(data).find("a:contains(.png)").each(function(){
          // will loop through
          link=$(this).attr("href");
          $("#grid").append(' <img class= \"img-responsive pull-left\" src=\"./media/' +link+ ' \" >');
          //$("#grid").append(' <a style =\"background-image:url(\"./media/' +link+ ' \"); height:150px; width=150px \"> </a>');
       });
    }
  });
  });

</script>
</body>
</html>
