<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/303.less', 'css/303.css');
        ?>
        <link href="css/303.css" rel="stylesheet" type="text/css" />


    </head>

    <body>
        <div class="type-303">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>TEAM</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>L</th>
                                    <th>PTS</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="number">1 </span>
                                        <img src="images/liverpool.png" alt=""/> 
                                        <span class="team">Liverpool</span>
                                    </td>

                                    <td>13</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td class="pts">40</td>
                                </tr>
                                <!-------2--------->
                                <tr>
                                    <td>
                                        <span class="number">2 </span>
                                        <img src="images/valencia.png" alt=""/> 
                                        <span class="team">Valencia</span>
                                    </td>

                                    <td>12</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td class="pts">38</td>
                                </tr>
                                <!-------3--------->
                                <tr>
                                    <td>
                                        <span class="number">3 </span>
                                        <img src="images/flag-3.png" alt=""/> 
                                        <span class="team">Prestige Country</span>
                                    </td>

                                    <td>11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td class="pts">36</td>
                                </tr>
                                <!-------4--------->
                                <tr>
                                    <td>
                                        <span class="number">4 </span>
                                        <img src="images/realmarid.png" alt=""/> 
                                        <span class="team">Real marid</span>
                                    </td>

                                    <td>11</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td class="pts">35</td>
                                </tr>
                                <!---------5--------->
                                <tr>
                                    <td>
                                        <span class="number">5</span>
                                        <img src="images/mil.png" alt=""/> 
                                        <span class="team">Millenium Utd</span>
                                    </td>

                                    <td>11</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td class="pts">34</td>
                                </tr>
                                <!---------6--------->
                                <tr>
                                    <td>
                                        <span class="number">6</span>
                                        <img src="images/cannon.png" alt=""/> 
                                        <span class="team">Chelsea</span>
                                    </td>

                                    <td>11</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td class="pts">33</td>
                                </tr>
                                <!---------7--------->
                                <tr>
                                    <td>
                                        <span class="number">7</span>
                                        <img src="images/cannon.png" alt=""/> 
                                        <span class="team">Cannon United</span>
                                    </td>

                                    <td>9</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td class="pts">32</td>
                                </tr>
                                <!---------8--------->
                                <tr>
                                    <td>
                                        <span class="number">8</span>
                                        <img src="images/nor.png" alt=""/> 
                                        <span class="team">Northernham Ct</span>
                                    </td>

                                    <td>10</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td class="pts">32</td>
                                </tr>
                                <!---------11------------>
                                <tr>
                                    <td>
                                        <span class="number">11</span>
                                        <img src="images/bristol.png" alt=""/> 
                                        <span class="team">Real soccer</span>
                                    </td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td class="pts">26</td>
                                </tr>
                            </tbody>
                        </table> 
                        <div class="viewfull">
                            <a href="#">VIEW FULL TABLE</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
