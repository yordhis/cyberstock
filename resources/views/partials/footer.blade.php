{{-- <footer class="footer">
    <p class="derecho">ICSS 2023 @ todo los derechos reservados</p> 
</footer> --}}

{{-- App JS --}}
<script src="app/main.js"></script>

<script src="app/productEntry/index.js"></script>
<script src="app/products/ProductController.js"></script>

@if ($pathname == "products")
    <script src="app/products/index.js"></script>
    <script src="app/products/categories/CategorieController.js"></script>
    <script src="app/products/marks/MarkController.js"></script>
    <script src="app/products/ProductController.js"></script>
@endif




{{-- Scripts --}}
<script src="assets/js/table.js"></script>
<script src="assets/js/fontawesome.js" crossorigin="anonymous"></script>

{{-- <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script> --}}