<?php require 'header.inc.php'; ?>

<style type="text/css"> 

html,body{
    height: 100%;
    position: relative;
}


*{
    margin:0;
    padding:0;
    box-sizing:border-box;

}


body{
    background: url(airsoft-3897703_1920.jpg);
}

.log{
    width:400px;
    margin:0 auto;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#log h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid green;
}



footer{
    position: absolute!important;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(255,255,255,.2);
    width: 100%;
    padding-bottom: 10px;
    padding-top: 5px;
    z-index: 1!important;
}

footer h2{
    margin: 0;
}


#overlay61{
    display: none;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}
#modalCheck61{
    display: none;
}
#modalCheck61:checked + #overlay61{
    display: block;
}


</style>


    <section class="log">
    <form action="verification_log.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <div class="log_send">
                <input type="submit" id='submit' value='LOGIN' >
                <label for="modalCheck61" style="cursor: pointer;">NEW HERE ?</label>
                
                </div>
            </form>
    </section>

<input type="checkbox" id="modalCheck61" />

  <div id="overlay61">

    <div class="popup_block"> 

      <label for="modalCheck61" class="headerr_ex"><img alt="Fermer" title="Fermer la fenêtre" class="my_btn_close" src="./img/close.png" />

          <section class="log">
    <form action="verification_log.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <div class="log_send">
                <input type="submit" id='submit' value='SIGN IN' >
                
                </div>
            </form>
    </section>
    </div>
  </div>

</label> 