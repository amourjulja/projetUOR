<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-bot</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
        <div id="boite">

            
        </div>
        
        
        <div class="row comment-box-main p-3 rounded-bottom">
        <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
        <input id="message" type="text" class="form-control" placeholder="Votre message..." />
        </div>
        <div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
        <button id="envoyer" class="btn btn-info">Envoyer</button>
        </div>
        </div>
        </div>
    </div>
</div>

</body>
<script src="jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    //la fonction qui qffiche les messages dans le chat

    function affiche(pour,message){
        let el=`

            <ul class="p-0">
                <li ${pour=='Vous'?'class="moi"':''}>
                    <div class="row comments mb-2">
                    <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                    </div>
                    <div class="col-md-9 col-sm-9 col-9 comment ${pour=='Vous'?'moi':''} rounded mb-2">
                    <h4 class="m-0"><a href="#">${pour}</a></h4>
                    <p class="mb-0 text-white">${message}</p>
                    </div>
                    </div>
                </li>
            </ul>`
                $('#boite').html($('#boite').html()+el)
    }
    //j'ecoute l'evenement clic sur le bouton d'envoi
    $('#envoyer').on('click',function(e){
        //je recupere le message
        let message=$('#message').val();
        //je l'affiche
        affiche('Vous',message);
        //je l'envoi au chat-bot (nome Vchat)
        $.ajax({
            method:'POST',
            url:'chatbot.php',
            type:'JSON',
            data:{
                question:message
            },
            success:function(data){
                //j'affiche la reponse du chatbot
                affiche('Vchat',data.reponse)
            }
        })
    })
</script>
</html>