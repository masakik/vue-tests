<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <div id="app">
        <ul>
            <li v-for="product in products">
            {{ product.quantity }} - {{ product.name }} </li>
        </ul>
    </div>

    <script src="https://unpkg.com/vue"></script>
    <script async defer>
    const app = new Vue({
        el: '#app',
        data: {
            products: []
        },
        created () {
            fetch('http://localhost:3000/ajax.php')
                .then(response => response.json())
                .then(json => {
                    this.products = json.products;
                    console.log(this.products)
                })
        }

    })

    
    </script>
</body>

</html>