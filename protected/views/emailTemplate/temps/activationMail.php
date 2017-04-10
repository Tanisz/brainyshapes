<html>
    <style>
        body{
            max-width: 610px;  
        } 
        table {border: none;}

        .background {
            background-image: url("<?php echo Yii::app()->request->baseUrl; ?>/img/email/Grass_2.png");
            background-color: #72b42d;
            max-width: 605px; 
            font-family: Arial,Helvetica;
           

        }
        .content {
            margin: 18px; 
            line-height: 200%;
        }    
        .t_top {
            width: 567px; 
        } 
        .t_top img {
            background-size:cover;  
            max-width: 567px;
        }  

        .button-link {
            text-decoration : none;
            padding: 10px 15px;
            background: #4479BA;
            color: #FFF;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            border: solid 1px #20538D;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
            -webkit-transition-duration: 0.2s;
            -moz-transition-duration: 0.2s;
            transition-duration: 0.2s;
            -webkit-user-select:none;
            -moz-user-select:none;
            -ms-user-select:none;
            user-select:none;
            margin: 15px;

        }
        .button-link:hover {
            background: #356094;
            border: solid 1px #2A4E77;
            text-decoration: none;
        }
        .button-link:active {
            -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
            -moz-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
            box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
            background: #2E5481;
            border: solid 1px #203E5F;
        }
    </style>  

    <body>
        <div class ="background">
            <div class ="content">
                <table class="templete_m" style="width: 567px; font-family: Arial,Helvetica;line-height: normal;" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>
                                <table style="width: 567px;" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr class="t_top">
                                            <td align="left"> <img src="<?php echo Yii::app()->request->baseUrl . "/img/email/header.jpg"; ?>" alt="" /> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <table style="width: 567px; background:white" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 20px 20px; font-family: Arial, Helvetica; color: #666666; font-size: 12px;" colspan="2">
                                                <table style="width: 100%;" cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2" style="color: #666666; font-size: 12px;" align="left">
                                                                <strong>
                                                                    <?php
                                                                    echo "Kedves $from_name!";
                                                                    "Szeretettel köszöntünk az Our True Treasure leendő regisztrált felhasználói körében. Regisztrációdat az alábbi gombra kattintva tudod aktiválni:";
                                                                    ?>
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 
                                                                <br>   
                                                            </td>  
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="color: #666666; font-size: 12px;" align="left">
                                                                <strong>
                                                                    <?php echo "Szeretettel köszöntünk az Our True Treasure leendő regisztrált felhasználói körében. Regisztrációdat az alábbi gombra kattintva tudod aktiválni:"; ?>
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 
                                                                <br>  
                                                            </td>  
                                                        </tr>
                                                        <tr>
                                                            <td>  
                                                    <center>
                                                        <?php
                                                        echo "<br>";
                                                        echo CHtml::link('Kattints ide az aktiváláshoz', $act_url, array("class" => "button-link"));
                                                        echo "<br>";
                                                        echo "<br>";
                                                        ?>
                                                    </center> 
                                            </td>  
                                        </tr>

                                        <tr>
                                            <td> 
                                                <br>  
                                            </td>  
                                        </tr>

                                        <tr>
                                            <td colspan="2" style="color: #666666; font-size: 12px;" align="left"> 
                                                <strong> 
                                                    <?php echo "Amennyiben nem tudsz rákattintani, kérjük, másold be az alábbi linket a böngésződ címsorába:"; ?>
                                                </strong>,  
                                            </td>  
                                        </tr>

                                        <tr>
                                            <td> 
                                                <br>  
                                            </td>  
                                        </tr>

                                        <tr>
                                            <td style = "font-size: 10px;"> 
                                                <?php echo CHtml::link($act_url, $act_url); ?>  
                                            </td>  
                                        </tr>

                                        <tr>
                                            <td> 
                                                <br>  
                                            </td>  
                                        </tr>

                                        <tr>
                                            <td colspan="2" style="color: #666666; font-size: 12px;" align="left">
                                                <strong> 
                                                    <?php echo "Ez a hivatkozás csak egyszer használható belépésre. A továbbiakban e-mail címed/ felhasználó neved és a regisztráció során megadott jelszavad használatával tudsz belépni."; ?>
                                                </strong>
                                            </td>  
                                        </tr>

                                        <tr>
                                            <td colspan="2" height="15"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="color: #666666; font-size: 12px;"><!-- <p>Here is your invoice for ##current_invoice_date##. You can pay your invoice by logging in to your LocalSnag Account Click <a href="login">here</a> to log in.</p> -->
                                                <?php echo "Ez egy automatikusan generált üzenet. Kérlek, ne válaszolj a feladó címére! Amennyiben kérdésed, észrevételed van, írj az "; ?>
                                                <a href="mailto:info@ourtruetreasure.com?" target="_top">info@ourtruetreasure.com</a> 
                                                <?php echo "címre. <br> <br>" ?>
                                                <?php echo "Abban az esetben, ha nem Te regisztráltál, kérlek, tekintsd levelünket tárgytalannak. Rendszerünk 3 napot követően automatikusan törli a nem aktivált regisztrációt!"; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 0px 20px; font-family: Arial, Helvetica; color: #666666; font-size: 10px;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style = "font-size: 12px; font-style: italic;"> <?php echo "Üdvözlettel:"; ?></td>
                                        </tr>
                                        <tr>
                                            <td style = "font-size: 12px; font-style: italic;"> <?php echo "Our True Treasure Csapata"; ?></td>
                                        </tr>
                                        <tr>
                                            <td style = "font-size: 10px; font-style: italic;">  <a href="www.ourtruetreasure.com">www.ourtruetreasure.com</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <br>  
                            </td>  
                        </tr>
                    </tbody>
                </table>
                </td>
                </tr><br />
                <hr>    
                <tr class="t_footr">
                    <td align="center">
                        <table style="width: 567px;" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr style="background: white;">

                                    <td align="left" ><img src="<?php echo Yii::app()->request->baseUrl . "/img/email/footer_img.jpg"; ?>" alt="" style="height: 50% "/> </td>
                                    <td  align="center" style = "color: green;">
                                        Gondolj a természeti értékekre, mielőtt kinyomtatnád ezt az e-mailt! <br />

                                        Please consider the environment before printing this email.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
                </table>
            </div>
            <br>
        </div>

    </body> 
</html>