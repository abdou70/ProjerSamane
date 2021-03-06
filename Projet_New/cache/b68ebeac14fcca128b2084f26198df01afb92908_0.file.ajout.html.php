<?php
/* Smarty version 3.1.30, created on 2020-08-06 18:48:53
  from "/opt/lampp/htdocs/projetsamane/Projet_New/src/view/compte/ajout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2c3475b35212_43477930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b68ebeac14fcca128b2084f26198df01afb92908' => 
    array (
      0 => '/opt/lampp/htdocs/projetsamane/Projet_New/src/view/compte/ajout.html',
      1 => 1596732526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2c3475b35212_43477930 (Smarty_Internal_Template $_smarty_tpl) {
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

<body  onload="invisible();">
  <!-- STARTING : CONTAINER GENERAL -->
  <div class="wrapper">
    <!-- STARTING : SIDEBAR -->
    <div class="sidebar">
      <h2><img class="sidebar_logo" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
img/BP-LOGO-SVG-WHITE.svg" alt="LOGO BANQUE DU PEUPLE" title="Vous d'Abord"></h2>
      <ul>
        <li><a href="../../index.php"><i class="fas fa-home"></i>Accueil</a></li>
        <li class=""><a href="createClient.php"><i class="fas fa-user-tie"></i>Creer un Client</a></li>
        <li class="active"><a href="#"><i class="fas fa-address-card"></i>Creer un Compte</a></li>
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
            <h2>BANQUE DU PEUPLE <span class="breadcrumb">>> Creation Compte</span></h2>
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
        <center>
           <h1>INFORMATION COMPTE </h1>
        </center>
    </header>
      <nav>
           Type de compte
       <div class="first1">
        <button id="xewel" name="nouveau" value="1">Compte Xewel</button>
        <button id="courant" name="courant" value="2">Compte Courant</button>
        <button id="bloque" name="bloque" value="3">Compte bloqué</button>
       </div>
      </nav>    
      <div class="introduction">
       <form  method="post" action=<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/ajouter1 id="creerAccountForm">
        <div id="compte">
        <label for="numagence"> Numero Agence </label><strong>*</strong>
        <input type="text" name="numagence" id="numagence" class="normale" />
        <span id="num_manquant"></span>
      
        <label for="numcompte"> Numero Compte </label><strong>*</strong>
        <input type="text" name="numcompte" id="numcompte"  class="normale"/>
        <span id="compte_manquant"></span><br /><br />

        <label for="rib">Clé RIB </label><strong>*</strong>
        <input type="text" name="rib" id="rib"  class="normale"/>
        <span id="rib_manquant"></span>

        <label for="date"> Date d'ouverture </label><strong>*</strong>
        <input type="date" name="date" id="date" class="normale"/>
        <span id="date_manquant"></span>

        <label for="montant0"> Montant initial </label>
        <input type="text" name="montant0" id="montant0" class="normale" />
        <span id="mont_manquant"></span></div>
        <div  id="ouv">
        <label for="frais"> Frais d'ouverture </label><strong>*</strong>
        <input type="text" name="frais" id="frais"  class="normale"/> 
        <span id="frais_manquant"></span></div>
        <div id="cour">
        <label for="agios"> Agios </label><strong>*</strong>
        <input type="text" name="agios" id="agios"  class="normale"/>
        <span id="agios_manquant"></span></div>
        
        <div id="bloq">
        <label  for="date1"> Date de bloquage </label><strong>*</strong>
        <input type="date" name="date1" id="date1"  class="normale"/>
        <span id ="date1_manquant"></span>

        <label for="date2"> Date de debloquage </label><strong>*</strong>
        <input type="date" name="date2" id="date2" class="normale" />
        <span id="date2_manquant"></span></div>

        <label for="idclient"> ID-Client </label><strong>*</strong>
        <input type="text" name="idclient" id="idclient" class="normale" />
        <span id="idclient_manquant"></span></div>
          
          <input type="hidden" id="compteChoisi" name="compteChoisi" value="">  
          <input type="text" name="creerCompteSubmit" value="FORM SUBMITTED" hidden />
          <input type="submit" id="envoyer" value="Enregistrer" class="envoie"  />    
        </form>
        <table class="table table-bordered">
          <tr>
          <th>Id</th>
          <th>numeroAgence</th>
          <th>numeroCpmpte</th>
          <th>cle-Rib</th>
          <th>Action</th>
          </tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeCompte']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
             <tr>
                 <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumagence();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumcompte();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getClerib();?>
</td>
                 <td><a href="#">Editer</a></td>
 
             </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
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
 src="../../public/js/compt.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
