<?php
/* Smarty version 3.1.30, created on 2020-08-07 13:44:31
  from "/opt/lampp/htdocs/projetsamane/Projet_New/src/view/client/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2d3e9f464ac8_86914099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d3870e60afb86453a78e389e4caf9f87ebccb99' => 
    array (
      0 => '/opt/lampp/htdocs/projetsamane/Projet_New/src/view/client/edit.html',
      1 => 1596800665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2d3e9f464ac8_86914099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TEST | BANQUE DU PEUPLE | IN SYSTEM</title>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/client.css"/>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/main.css"/>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/compt.css"/>
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
favicon.ico" type="image/x-icon">
  <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/b99e675b6e.js"><?php echo '</script'; ?>
>
</head>

<body onload="cache();">
  <!-- STARTING : CONTAINER GENERAL -->
  <div class="wrapper">
    <!-- STARTING : SIDEBAR -->
    <div class="sidebar">
      <h2><img class="sidebar_logo" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/img/BP-LOGO-SVG-WHITE.svg" alt="LOGO BANQUE DU PEUPLE" title="Vous d'Abord"></h2>
      <ul>
        <li><a href="../../index.php"><i class="fas fa-home"></i>Accueil</a></li>
        <li class="active"><a href="#"><i class="fas fa-user-tie"></i>Creer un Client</a></li>
        <li><a href="createAccount.php"><i class="fas fa-address-card"></i>Creer un Compte</a></li>
        <li><a href="#"><i class="fas fa-exchange-alt"></i>Faire un Virement</a></li>
      </ul>
      <div class="extra_option">
        <a href="javascript:return false;" title="Changer de Langue"><i class="fas fa-language"></i></a>
        <a href="javascript:return false;" title="Afficher Aide"><i class="fas fa-question-circle"></i></a>
        <a href="javascript:return false;" title="Se Déconnecter"><i class="fas fa-power-off"></i></a>
      </div>
    </div>
    <!-- ENDING : SIDEBAR -->

    <!-- STARTING : MAIN CONTENT -->
    <div class="main_content">
      <div class="header">
        <div class="next_nav">
          <!-- MENU HAUT - PARTIE GAUCHE -->
          <div class="display_header">
            <h2>BANQUE DU PEUPLE <span class="breadcrumb">>> Creation CLient</span></h2>
          </div>
          <!-- MENU HAUT - PARTIE DROITE -->
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-clock" aria-hidden="true"></i> <span class="">Time / Date</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-comments" aria-hidden="true"></i> <span class="">Support</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="">
                <i class="fas fa-user" aria-hidden="true"></i> <span class="">Account</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- // CONTENU CENTRAL :  -->
      <div class="info">
          <header>
          <hr />
           <h1>INFORMATION CLIENT </h1>
    </header>
      <nav>
           statut client
       <div class="first">
        <button id="nouveau" name="nouveau" value="1">Nouveau client</button>
        <button id="clientid" name="clientid" value="2">Client ID</button>
        <button id="clientemploy" name="clientemploy" value="3">client salarie</button>
        <button id="clientmoral" name="clientmoral" value="4">Client moral</button>
       </div>
      </nav>    
      <div class="introduction">
      <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/update" id="creerClientForm">
      <div id="nom">
       <label for="id"> ID :</label><strong>*</strong>
       <input type="text" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
"  class="normale" />
       <span id="id_manquant"></span>

       <div id="nom">
        <label for="nomclient"> Nom client :</label><strong>*</strong>
        <input type="text" name="nomclient" id="nomclient" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
"  class="normale" />
        <span id="nom_manquant"></span>
      
       <label for="prenomclient"> Prenom client :</label><strong>*</strong>
       <input type="text" name="prenomclient" id="prenomclient" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
" class="normale"/>
       <span id="prenom_manquant"></span><br /><br />

       <label for="adresseclient">adresse client :</label><strong>*</strong>
       <input type="text" name="adresseclient" id="adresseclient"  class="normale"/>
       <span id="adresse_manquant"></span>

       <label for="emailclient"> Email client :</label>
       <input type="text" name="emailclient" id="emailclient"  class="normale"/> 
       <span id="email_manquant"></span><br /><br />

       <label for="phoneclient"> Numero telephone :</label><strong>*</strong>
       <input type="tel" name="phoneclient" id="phoneclient"  class="normale"/>
       <span id="phone_manquant"></span>

       <label for="professionclient"> Profession :</label>
       <input type="tex" name="professionclient" id="professionclient" class="normale"/>
       <span id="profession_manquant"></span><br /><br />

       <label  for="numident"> CNI(n° d'identité) :</label><strong>*</strong>
       <input type="text" name="numident" id="numident" value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getCni();?>
" class="normale"/>
       <span id ="cni_manquant"></span>

       <label for="datenais"> Date de naissance :</label><strong>*</strong>
       <input type="date" name="datenais" id="datenais" class="normale" />
       <span id="date_manquant"></span>

       <label for="salaireclient"> Salaire client :</label><strong>*</strong>
       <input type="text" name="salaireclient" id="salaireclient" class="normale" />
       <span id="sal_manquant"></span></div>
       
       
      <div id="second">
       <label for="idcli"> Entrer le n° CNI : </label>
       <input type="search" name="idcli" id="idcli" class="normale" />
       <span id="idcli_manquant"></span></div>

      <div id="four">
        <label for="moral"> Nom  :</label><strong>*</strong>
        <input type="text" name="moral" id="moral"  class="normale" />
        <span id="moral_manquant"></span>

        <label for="raismoral"> Raison social :</label><strong>*</strong>
        <input tupe="text" name="raismoral" id="raismoral"  class="normale" />
        <span id="rais_manquant"></span><br /><br />

        <label for="telemoral"> Telephone  :</label><strong>*</strong>
        <input tupe="text" name="telemoral" id="telemoral"  class="normale" />
        <span id="tel_manquant"></span>
       
        <label for="adresemoral"> Adresse  :</label><strong>*</strong>
        <input tupe="text" name="adresemoral" id="adresemoral"  class="normale" />
        <span id="adres_manquant"></span><br /><br />

        <label for="ninea"> NINEA  :</label><strong>*</strong>
        <input tupe="text" name="ninea" id="ninea"  class="normale" />
        <span id="ninea_manquant"></span> 

        <label for="emailmoral"> Email  :</label><strong>*</strong>
        <input tupe="text" name="emailmoral" id="emailmoral"  class="normale" />
        <span id="ema_manquant"></span></div><br /><br />

        <input type="hidden" id="clientChoisi" name="clientChoisi" value="">
        <input type="text"  name="creerClientSubmit" value="FORM SUBMITTED" hidden />
        <input type="submit" id="envoyer" value="modifier" class="envoie"  />
        <input type="submit" id="envoyer" value="Enregistrer" class="envoie"  />
       </form>
       <table class="table table-bordered">
         <tr>
         <th>Id</th>
         <th>nom</th>
         <th>prenom</th>
         <th>cni</th>
         <th>Action</th>
         <th>Action</th>
         </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeClient']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getCni();?>
</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">Editer</a></td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/delete/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">Supprimer</a></td>

            </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

       </table>
        <p> Les champs avec <strong>*</strong> sont obligatoire</p>
      </div>
      </div>
      <!-- FIN CONTENU CENTRAL -->
    </div>
    <!-- ENDING MAIN CONTENT -->
  </div>
  <!-- ENDING CONTAINER GENERAL -->
      
    <!-- Main JS -->
    <?php echo '<script'; ?>
 src="../../public/js/global.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../public/js/client.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
