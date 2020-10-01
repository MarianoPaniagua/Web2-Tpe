<?php

require_once "../libs/smarty/Smarty.class.php";
class AdminView
{
    public function __construct()
    {
    }

    public function showAdmin($products)
    {
        $smarty = new Smarty();
        $smarty->assign('products_s', $products);
        $smarty->display('../templates/admin.tpl');
    }

    public function showPurchases($purchases)
    {
        $smarty = new Smarty();
        $smarty->assign('purchases_s', $purchases);
        $smarty->display('../templates/purchases.tpl');
    }
}