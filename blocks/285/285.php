<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/w3.css" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/285.less', 'css/285.css');
    ?>
    <link href="css/285.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-285">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 margin">
                    <h3>Table Style 1</h3>            
                    <table class="w3-table-all">
                        <thead>
                            <tr class="w3-light-grey">
                                <th>Pharetra</th>
                                <th>Malesuada</th>
                                <th>Cursus</th>
                                <th>Euismod</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Ipsum</td>
                            <td>Portalion</td>
                            <td>Elitesimo</td>
                            <td>Aenean</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>Portalion</td>
                            <td>Elitesimo</td>
                            <td>Aenean</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>Portalion</td>
                            <td>Elitesimo</td>
                            <td>Aenean</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>Portalion</td>
                            <td>Elitesimo</td>
                            <td>Aenean</td>
                        </tr>
                        <tr>
                            <td>Ipsum</td>
                            <td>Portalion</td>
                            <td>Elitesimo</td>
                            <td>Aenean</td>
                        </tr>                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>