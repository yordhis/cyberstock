<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title')</title>

{{-- SEO --}}
<meta content="" name="description">
<meta content="" name="keywords">
<base href="http://cyberstock.com" target="objetivo">

<!-- Favicons -->
<link href="assets/images/logo2.png" rel="icon">

<!-- Estilos -->
{{-- Estilos del Stock --}}
@if ($pathname == "dashboard")
    <link rel="stylesheet" href="assets/css/stock_style.css">
    <link rel="stylesheet" href="assets/css/table_stock.css">
    <link rel="stylesheet" href="assets/css/pro_input-output.css"> 
    <link rel="stylesheet" href="assets/css/pro-input-buy.css"> 
    <link rel="stylesheet" href="assets/css/pro-input-sale.css"> 
@endif
{{-- Cierre Estilos del Stock --}}

{{-- Estilos de Productos --}}
@if ($pathname == "products")
    <link rel="stylesheet" href="assets/css/style-products.css">
    <link rel="stylesheet" href="assets/css/table-products.css">
    <link rel="stylesheet" href="assets/css/product-create.css">
    <link rel="stylesheet" href="assets/css/client_sale.css">
@endif
{{-- Cierre Estilos de Productos --}}





<!-- CDN'S para estilos y mas -->
{{-- <link rel='stylesheet' href='assets/material-css/bootstrap.4.5.min.css'> --}}
{{-- <link  href='assets/material-css/boxicons.css' rel='stylesheet'> --}}
{{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}
