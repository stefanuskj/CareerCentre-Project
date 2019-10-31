<html>
<head>
    <?php 
    include("connect.php");
    
    ?>
    <title>Admin Acara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <style>
    .row.content{
        height:100%;
    }
        
        .sidenav{
            background-color: #f1f1f1;
            height:100%;
        }
    </style>
    <script type="text/javascript">
function delFunc (a)
	{
		var req = new XMLHttpRequest();
		req.open("GET","del_request.php?id="+a, true);
		req.send();	
		req.onreadystatechange = function(){
			if(req.readyState == 4){
				getContent();
				}
		}
	}
 function getContent()
	{
		$.get("content_request.php", {}, function(e){
			var data = JSON.parse(e);
			$("#event_table").html("");
            var str ="";
            str+="<tr><th><center>ID Acara</center></th><th><center>Nama Acara</center></th><th><center>Action</center></th></tr>";
           
			for(var i=0;i<data.length;i++)
			{	
				str += "<tr id='event_table'>";
				str += "<td id='event_table'><center>" + data[i].id_acara + "</center></td> ";
				str += "<td id='event_table'><center>"+ data[i].nama_acara+"</center></td>";
				str += "<td id='event_table'><center><input type ='button' value='Delete' onclick='delFunc("+data[i].id_acara+")' class='btn'><form method='get' action='manage_event_page.php' style='display:inline;'>&nbsp;<input type='submit' value='Edit' class='btn'><input type='hidden' value='"+data[i].id_acara+"' name='id' ></center></form></td>"
				str += "</tr>";
				$("#event_table").append(str);
                str ="";
			}
		});
	}
	   $(function(){ getContent();});
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Admin Acara</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="home.php">Manage Acara</a></li>
                    <li><a href="manage-users.php">Manage Users</a></li>
                    <li><a href="log.php">Log</a></li>
                    <li><a href="login-page.php">Log Out</a></li>
                </ul>
            </div>
            
            <div class="col-sm-9">
                <div class="well">
                    <h4>Manage Acara</h4>
                    <p id="coba">Dalam manage acara ini anda dapat melihat acara apa saja yang sudah ada, dapat mengganti maupun menambahkan acara dan syarat kondisinya</p>
                </div>
            </div>
            <br>
            <div class="col-sm-9">
                <div class="well">
                    <h4 >List Acara</h4>
                    <form action="manage_event_page.php" method="get">
                    
                    <input type="submit" name="add_button" value="Add Acara" class="btn" ></form>
                    <input type="hidden" name="id">
                    <table class="table table-hover">
                        <thead id="event_table">
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>