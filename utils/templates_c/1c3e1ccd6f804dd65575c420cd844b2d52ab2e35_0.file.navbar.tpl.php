<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 00:18:43
  from 'C:\xampp\htdocs\web2-tp\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f750443408c68_03881981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c3e1ccd6f804dd65575c420cd844b2d52ab2e35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2-tp\\templates\\navbar.tpl',
      1 => 1601504307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f750443408c68_03881981 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="nav-bar">
     <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand" href="#"><img src="./images/logo2.png"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fas fa-bars"></i>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href="home">HOME</a>
                 </li>
                 <?php if (!(isset($_smarty_tpl->tpl_vars['isLogged_s']->value))) {?>
                     <li class="nav-item active">
                         <a class="nav-link" href="signup">SIGNUP</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="login">LOGIN</a>
                     </li>
                 <?php }?>
                 <li class="nav-item">
                     <a class="nav-link" href="products">PRODUCTS</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="contact">CONTACT</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="logout">LOGOUT</a>
                 </li>
             </ul>
         </div>
     </nav>
 </div><?php }
}