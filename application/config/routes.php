<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//pages Routes


$route['default_controller'] = 'admin';
// $route['main'] = 'welco';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['^(?!other|controller).*']='welcome/$0';
$route['Home']='Product/home';
$route['home2']='Home/liststudents';
$route['add-product']='AddProduct/AddProductController/create';
// $route['add-subproduct']='product/addsubproduct';
$route['add-designation']='product/adddesignation';
$route['add-branch']='branch/addbranch';
$route['add-rank']='branch/addrank';
$route['add-employee']='branch/addemployee';
$route['search-employee']='branch/SearchEmployee';
$route['daily-rate']='rate/dailyrate';
$route['fixed-rate']='rate/fixedrate';
$route['generalteabar']='order/generalteabar';
$route['generalforofficer']='order/generalforofficer';
$route['post-bill']='billing/postbill';
$route['order-cancellation']='billing/ordercancellation';
$route['monthly-bill']='billing/monthlybill';
$route['print-monthlybill']='report/printmonthlybill';
$route['monthly-billsummary']='report/monthlybillsummary';
$route['product-consumption']='report/productconsumption';
$route['employee-detailreport']='report/employeedetailreport';
$route['branchwise-report']='report/branchwisereport';
$route['recieve-payment']='report/recievepayment';
$route['outstanding-payment']='report/outstsandingpayment';
$route['daily-payment']='report/dailyrecieve';

//login Routes
$route['admin']="admin/index";
$route['logout']="admin/logout";



// CRUD routes for add Employee
$route['employee']='Frontend/EmployeeController/index';

$route['employee/add']='Frontend/EmployeeController/create';
$route['employee/store']='Frontend/EmployeeController/store';

$route['employee/edit/(:any)']="Frontend/EmployeeController/edit/$1";

$route['employee/update/(:any)']="Frontend/EmployeeController/update/$1";

$route['employee/delete/(:any)']="Frontend/EmployeeController/delete/$1";


// CRUD routes for add Products

$route['ProductAdded']="AddProduct/AddProductController/index";
$route["addproduct"]="AddProduct/AddProductController/create";
$route['productStore']="AddProduct/AddProductController/store";

// CRUD routes for ass sub Product

$route['subProductadded']="AddSubProduct/AddSubProduct/index";
$route["add-subproduct"]="AddSubProduct/AddSubProduct/create";