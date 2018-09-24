<!DOCTYPE html>
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="./chatwindow.js"></script>
        <link href="./chatwindow.css" rel="stylesheet" >
    </head>
    <body>
        <div class="col-sm-3 col-sm-offset-4 frame">
            <ul></ul>
            <div>
                <div class="msj-rta macro">                        
                    <div class="text text-r" style="background:whitesmoke !important">
                        <input id="mytext" class="mytext" placeholder="Type in your query to begin chat"/>
                    </div> 

                </div>
                <div style="padding:10px;">
                    <button id="sendchat" type="button" class="btn-lg btn-warning"><span class="glyphicon glyphicon-share-alt"></span></button>
                    
                </div>                
            </div>
        </div>       
    </body>
</html>
