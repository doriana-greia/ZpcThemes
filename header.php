<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">

    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    
    <!-- Bootstrap Grid-->
    <style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role="button"]{cursor:pointer}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1200px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}@media (max-width:767px){.visible-xs{display:block !important}table.visible-xs{display:table !important}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}@media (max-width:767px){.visible-xs-block{display:block !important}}@media (max-width:767px){.visible-xs-inline{display:inline !important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block !important}table.visible-sm{display:table !important}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block !important}table.visible-md{display:table !important}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block !important}}@media (min-width:1200px){.visible-lg{display:block !important}table.visible-lg{display:table !important}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}@media (min-width:1200px){.visible-lg-block{display:block !important}}@media (min-width:1200px){.visible-lg-inline{display:inline !important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block !important}}@media (max-width:767px){.hidden-xs{display:none !important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none !important}}@media (min-width:1200px){.hidden-lg{display:none !important}}.visible-print{display:none !important}@media print{.visible-print{display:block !important}table.visible-print{display:table !important}tr.visible-print{display:table-row !important}th.visible-print,td.visible-print{display:table-cell !important}}.visible-print-block{display:none !important}@media print{.visible-print-block{display:block !important}}.visible-print-inline{display:none !important}@media print{.visible-print-inline{display:inline !important}}.visible-print-inline-block{display:none !important}@media print{.visible-print-inline-block{display:inline-block !important}}@media print{.hidden-print{display:none !important}}</style>

    <!-- Header CSS (first screen styles from header.min.css) - inserted in the build of the project -->
    <style>/*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */::-webkit-input-placeholder{color:#666;opacity:1}:-moz-placeholder{color:#666;opacity:1}::-moz-placeholder{color:#666;opacity:1}:-ms-input-placeholder{color:#666;opacity:1}body input:focus:required:invalid,body textarea:focus:required:invalid{color:#666}body input:required:valid,body textarea:required:valid{color:#666}body{font-size:16px;min-width:320px;position:relative;line-height:1.6;font-family:RobotoRegular,sans-serif;overflow-x:hidden}.top-line{padding-top:50px}.top-line .logo{float:right}.top-line .logo img{width:100%}.top-line .number{color:#fff;font-size:21px;font-family:RobotoRegular,sans-serif;line-height:15px; white-space: pre-line}.top-line .callback{font-size:12px;font-family:RobotoRegular,sans-serif}.top-line .callback a{line-height:11px;text-decoration:none;color:#f3efef;}.top-line .callback a:hover{border-bottom:1px dashed #dfdfdf;-webkit-transition:all .3s linear 0s;transition:all .3s linear 0s}.top-line .navbar{margin-bottom:180px}.top-line .navbar a{text-decoration:none;text-transform:uppercase;color:#fff;font-family:RobotoBold,sans-serif;font-size:18px;line-height:40px;-webkit-box-sizing:border-box;box-sizing:border-box;padding-left:11px;padding-right:11px;display:inline-block;-webkit-transition:all .3s linear 0s;transition:all .3s linear 0s}.top-line .navbar a:hover{-webkit-transition:all .3s linear 0s;transition:all .3s linear 0s; outline: 1px solid #fff;}.top-line .navbar .toggle{outline:0;border:0;display:inline-block;background-color:transparent;background-image:none;vertical-align:middle;text-align:center;white-space:nowrap;cursor:pointer;-ms-touch-action:manipulation;touch-action:manipulation;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:6px 12px}.top-line .navbar .toggle .icon{position:relative;margin-top:8px;margin-bottom:8px}.list{margin:0;padding:0}.list a{margin:0 5px 0 0;padding:3px 12px;text-decoration:none;color:#999;line-height:100%;display:inline-block}.list a:hover{color:#fff;outline:1px solid #fff}.navbar .active{color:#fff;outline:1px solid #fff}.navbar>.toggle>.icon,.navbar>.toggle>.icon::after,.navbar>.toggle>.icon::before{display:block;width:24px;height:3px;-webkit-transition:background-color .3s linear,-webkit-transform .3s linear;transition:background-color .3s linear,-webkit-transform .3s linear;transition:background-color .3s linear,transform .3s linear;transition:background-color .3s linear,transform .3s linear,-webkit-transform .3s linear;background-color:#fff}.navbar>.toggle>.icon::before{top:-8px;position:absolute;content:""}.navbar>.toggle>.icon::after{top:8px;position:absolute;content:""}.navbar>.list.-on{z-index:100}.list.-on .item{display:block;width:100%;height:34px;line-height:34px;padding:0}.navbar>.list.-on{display:block}.navbar>.toggle.-active>.icon{background-color:transparent}.navbar>.toggle.-active>.icon:before{-webkit-transform:translateY(8px) rotate(45deg);-ms-transform:translateY(8px) rotate(45deg);transform:translateY(8px) rotate(45deg)}.navbar>.toggle.-active>.icon:after{-webkit-transform:translateY(-8px) rotate(-45deg);-ms-transform:translateY(-8px) rotate(-45deg);transform:translateY(-8px) rotate(-45deg)}.active{outline:1px solid #fff}.header-title h1{margin:0;padding:0;line-height:58px;color:#fff;font-size:48px;font-family:RobotoBold,sans-serif;margin-bottom:25px}.header-title span{display:block;color:#cdcdcd;font-size:21px;font-family:RobotoRegular,sans-serif;line-height:26px;max-width:500px;margin-bottom:55px}.header-title .buttons{display:inline-block;margin-bottom:190px}.header-title .buttons .btn-red{display:inline-block;text-decoration:none;width:245px;background-color:#0ee37c;text-align:center;margin-right:70px;font-size:18px;line-height:18px;font-family:RobotoRegular,sans-serif;color:#fff;padding-top:20px;padding-bottom:20px;cursor:pointer;text-transform:uppercase}.header-title .buttons .btn-red:hover{-webkit-transition:all .3s linear 0s;transition:all .3s linear 0s;background-color:rgba(14, 227, 124,.7)}.header-title .buttons .btn-grey{display:inline-block;width:245px;text-decoration:none;font-size:18px;line-height:18px;font-family:RobotoRegular,sans-serif;background-color:#dfdfdf;text-align:center;color:#000d1e;cursor:pointer;padding-top:20px;padding-bottom:20px;text-transform:uppercase}.header-title .buttons .btn-grey:hover{-webkit-transition:all .3s linear 0s;transition:all .3s linear 0s;background-color:rgba(223,223,223,.7)}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)};function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n};function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

    <?php wp_head();?>

</head>
<body>
<!-- You Code-->
<header>
    <div class="container">

        <div class="top-line">
            <div class="row">
                <div class="phone col-md-3 col-xs-6">
						<div class="number">
				
							<span><?php
                                if(get_theme_mod('hide_text_mob') == '')
                                   echo get_theme_mod('tel_textbox_mob');?></span>
				
							<span><?php
                                if(get_theme_mod('hide_text_dom') == '')
                                   echo get_theme_mod('tel_textbox_dom');?></span>
                                   
						</div>

						<span class="callback">
							<a href="#hidden_form" class="popap_c">замовити дзвінок</a>
						</span>

					</div>
                <div class=" col-md-9 col-xs-6">
                    <div class="logo">
                      <?php  echo get_custom_logo(); ?>
                    </div>
                </div>
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="navbar">
                            <input class="nav-burger__checkbox" type="checkbox" id="burger"checked>
                            <label class="nav-burger hamburger-menu" for="burger"></label>

                            <nav class="nav" id="navigation">
                            <a href="#" id="home" class="active" >Головна</a>
                            <a href="#works">Роботи і вартість</a>
                            <a href="#aboutUs">Про нас</a>
                            <a href="#contact">Контакти</a>
                        </nav>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.top-line -->

        <div class="header-title">
            <h1><?php echo esc_attr (get_bloginfo('name')); ?></h1>
            <span><?php echo esc_attr (get_bloginfo('description')); ?></span>
            <div class="buttons" id="btn">
                <a href="#trust" class="btn-red">Дізнатись більше</a><a href="#hidden_form" class="btn-grey popap_c">Звязатись з нами</a>
            </div>
        </div>
    </div><!-- /.container -->
</header>