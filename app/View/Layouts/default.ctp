<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <link rel="stylesheet" type="text/css" href="http://dev.bebazar.be/themes/redtheme/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
                    <div id="header">
                        <div id="logo">
                            <a href="http://dev.bebazar.be/index.php"><img border="0" alt="Bebazar" src="http://dev.bebazar.be/themes/redtheme/firstlogook.jpg"></a>
                        </div>
                        <div id="logged">
   		
                            <br>
                            <div> 18 June 2013 <span id="servertime">10:41:43</span></div>

                            <div class="multi_flags">
                            <div>Choose language</div>
                                <a href="?lan=FR"><img vspace="2" hspace="2" border="0" alt="FR" src="http://dev.bebazar.be/includes/flags/FR.gif" title="FR"></a>
                                <a href="?lan=NL"><img vspace="2" hspace="2" border="0" alt="NL" src="http://dev.bebazar.be/includes/flags/NL.gif" title="NL"></a>
                                <a href="?lan=EN"><img vspace="2" hspace="2" border="0" alt="EN" src="http://dev.bebazar.be/includes/flags/EN.gif" title="EN"></a>                     </div>

            <!---->
                        <div class="adsense_top">
                            <img width="468" height="60" src="http://dev.bebazar.be/language/EN/images/bebazar-banner.gif" longdesc="Registration">
                        </div>
                     </div>
                <div id="menu">
                    <ul>
                    <a href="http://dev.bebazar.be/index.php?"><li>Home</li></a>
                                    <a href="http://dev.bebazar.be/register.php?"><li>Signup</li></a>
                    <a href="http://dev.bebazar.be/user_login.php?"><li>Login</li></a>
                                    <a class="new-window" alt="faqs" href="http://dev.bebazar.be/faqs.php"><li>Help</li></a>
                    </ul>
                </div>
                <div id="barre">
                        <form onsubmit="gettype();" method="GET" action="http://dev.bebazar.be/search.php" id="search_top" autocomplete="off" name="search">
                        <div class="barSearch">
                        <input type="hidden" name="">
                        <input type="text" value="" size="50" name="q">
                        &nbsp;&nbsp;
                        </div>
                        <div class="barBrowse"> 
                        <select name="id">
                            <option value="">Select your category</option>
                            <option value=""></option>
                            <option value="2514"></option>
                            <option value="2">Art / Antiques2</option>
                            <option value="162">Other Goods-Services</option>
                            <option value="113">Comics, Cards-Science Fiction</option>
                            <option value="75">Collectibles</option>
                            <option value="127">Electronics-Photography</option>
                            <option value="29">Books</option>
                            <option value="133">Home-Garden</option>
                            <option value="143">Movies-Video</option>
                            <option value="150">Music</option>
                            <option value="157">Office-Business</option>
                            <option value="170">Sports-Recreation</option>
                            <option value="122">Computers-Software</option>
                            <option value="174">Toys-Games</option>
                            <option value="68">Clothing-Accessories</option>
                            <option value="2705"></option>
                            <option value="1771"></option>
                            <option value="1908"></option>
                            <option value="2017"></option>
                            <option value="72">Coins-Stamps</option>
                            <option value="2118"></option>
                            <option value="2193"></option>
                            <option value="2167"></option>
                            <option value="2309"></option>
                            <option value="2419"></option>
                            <option value="2275"></option>
                            <option value="2468"></option>
                            <option value=""></option>
                            <option value="0">All categories</option>
                        </select>
                        <input type="submit" class="button" value="Search" name="sub">&nbsp;&nbsp;
                        <a href="http://dev.bebazar.be/adsearch.php">Advanced Search</a></div>
                            </form>
                        <div style="clear:both"></div>
                </div>
                <div style="clear:both"></div>
            </div>
                    
            <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
        </div>
		<div id="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="container"> 
                    <tbody><tr> 
                    <td><link rel="stylesheet" href="http://dev.bebazar.be/themes/redtheme/colorbox.css">
                        <div id="content"></div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="logo">
                    <tbody>
                    <tr>
        
                    <script type="text/javascript" src="http://dev.bebazar.be//js/jquery.hoverIntent.js"></script>	

                    <script type="text/javascript" src="http://dev.bebazar.be/themes/redtheme/js/jquery.colorbox.js"></script>	
                    <script>
                    $(document).ready(function(){
                            $(".can_bid").hoverIntent(makeLogin,makeBid); 
                            //Examples of how to assign the ColorBox event to elements
                            $(".can_bid").click(function(){
                                    var thisopenlink=$(this).attr('poplink');

                                    if(thisopenlink=="pop_user_login")
                                    {
                                            var openlink="http://dev.bebazar.be/"+thisopenlink+".php";
                                            $.colorbox({href:openlink,slideshow:false,top:10,width:620,height:550,iframe:true});
                                    }
                                    else
                                    {
                                            var openlink="http://dev.bebazar.be/bid.php";
                                            var auc_id= $(this).attr('auc_id');

                                            openlink=openlink+"?id="+auc_id;
                                            window.location=openlink;
                                    }


                            });
                            //setTimeout('get_auc_contents()', 1000);

                            $("#username").keypress(function(e){
                                if(e.which === 32) 
                                {
                                    return false;
                                }
                            });

                            //check the login credentials
                            $("#submit").live('click',function(e){
                                        e.preventDefault();
                                        var dataString= $("#login").serialize();
                                        $.ajax({
                                                    type: "POST",
                                                    data: dataString,
                                                    url: "http://dev.bebazar.be/login.php",
                                                    dataType: "json",

                                                    success: function(data){
                                                        if(data.success==1){
                                                            $("#error_msg").html(data.success_mess);
                                                        }
                                                        if(data.error){
                                                            $("#error_msg").html(data.error_mess);
                                                        }
                                                        if(data.url!="")
                                                        window.location.href="http://dev.bebazar.be/"+data.url;
                                                        return false;


                                                    }
                                        }); 
                            });

                    });

                    function setlogin(logged_in)
                    {
                            if(logged_in==1)
                            {
                                    $(".can_bid").attr('poplink','pop_bid_now');
                            }
                            else
                            {
                                    $(".can_bid").attr('poplink','pop_user_login');
                            }
                    }




                    function makeLogin()
                    {
                            var openlink=$(this).attr('poplink');
                            if(openlink=="pop_user_login")
                            $(this).html("&lt;span&gt;Login&lt;/span&gt;");	
                    }
                    function makeBid()
                    {
                            var openlink=$(this).attr('poplink');
                            $(this).html("&lt;span&gt;Bid Now&lt;/span&gt;");	
                    }


                    function padlength(what)
                    {
                            var output=(what.toString().length == 1)? '0' + what : what;
                            return output;
                    }


                    function setcountdowntimer(currenttime,which_id,what_id)
                    {
                            var days = Math.floor(currenttime / 86400);
                            var hours = Math.floor((currenttime % 86400) / 3600);
                            var mins = Math.floor(((currenttime % 86400) % 3600) / 60);
                            var secs = ((currenttime % 86400) % 3600) % 60;
                            var countdays = padlength(days);
                            var counthours = padlength(hours);
                            var countmins = padlength(mins);
                            var countsecs = padlength(secs);
                            if(countdays<1)
                            {
                                    $('span').remove('#has_days_'+what_id);
                                    $('span').remove("#"+which_id+"ends_days_"+what_id);
                            }
                            else
                            {

                            }
                            $("#"+which_id+"ends_days_"+what_id).html(countdays);
                            $("#"+which_id+"ends_hour_"+what_id).html(counthours);
                            $("#"+which_id+"ends_min_"+what_id).html(countmins);
                            $("#"+which_id+"ends_sec_"+what_id).html(countsecs);

                    }
                    </script>
                    </tr></tbody></table>
                        <table border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                        <td valign="top">
                        <div id="home">
                            <div id="col1">
                                <!--<div class="cat_open">Categories</div>-->
                                <div id="cat">
                                        <ul> 
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2514/Animals.html">Animals</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2/Art---Antiquities.html">Art &amp; Antiquities</a> (1)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/162/Cars-Motor-bikes.html">Cars Motor bikes</a> (1)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/113/Baby.html">Baby</a> (1)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/75/Jewellery---Watches.html">Jewellery &amp; Watches</a> (4)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/127/Do-it-yourself---leisures.html">Do-it-yourself / leisures</a> (3)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/29/Postcards.html">Postcards</a> (3)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/133/Cinema---DVD.html">Cinema &amp; DVD</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/143/Health---Beauty.html">Health &amp; Beauty</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/150/Business--Office---Industrial.html">Business, Office &amp; Industrial</a> (2)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/157/Computing.html">Computing</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/170/Video-Games.html">Video Games</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/122/Toys---Games.html">Toys &amp; Games</a> (1)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/174/Books--Comics---Magazines.html">Books, Comics &amp; Magazines</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/68/Home---Garden.html">Home &amp; Garden</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2705/Militaria.html">Militaria</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/1771/Clothes--Shoes---Accessories.html">Clothes, Shoes &amp; Accessories</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/1908/Coins.html">Coins</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2017/Musics---Instruments.html">Musics &amp; Instruments</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/72/Collections-Objects.html">Collections Objects </a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2118/Photography.html">Photography</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2193/Sports.html">Sports </a> (1)			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2167/Telephony.html">Telephony</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2309/Stamps.html">Stamps</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2419/TV--Hifi---Video.html">TV, Hifi &amp; Video</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2275/Bicycles---Accessories.html">Bicycles &amp; Accessories</a> 			      </span>
                                                </li>
                                                                        <li>
                                                    <span style="background-color:#FFFFFF">
                                                            <a href="http://dev.bebazar.be/category/2468/Wine---Gastronomy.html">Wine &amp; Gastronomy</a> 			      </span>
                                                </li>
                                                                        <li><a href="http://dev.bebazar.be/allcategory.html"><strong>All categories</strong></a></li>
                                        </ul>
                                <div style="clear:both; height:15px"></div>
                                </div>
	
                                <div style="clear:both; height:5px"></div>
                                <div style="clear:both"></div>
        <div id="recente">
		<div class="heading-row">Next Finishing Soon</div>
		<div class="auc_container">
                    <div class="last_auc">
                        <a href="http://dev.bebazar.be/product/30/test.html">
                                <div class="titre">test</div>
                                <div class="image"><img height="120px" border="0" src="http://dev.bebazar.be/uploaded/30/thumb-2098931370611165.jpg"></div>
                                <div class="price">324,00 €</div>
                        </a>
                        <div class="count_down">
                                <div class="count_time">

                                        <span id="hotmod_auc_ends_hour_30">22</span>
                                        <span id="hotmod_auc_ends_min_30">38</span>
                                        <span id="hotmod_auc_ends_sec_30">02</span>
                                </div>
                                <div class="count_text">

                                        <span>Hours</span>
                                        <span>Mins</span>
                                        <span>Secs</span>
                                </div>
                        </div>
                        <script type="text/javascript">
                        $(function() {
                            var currenttime = '86325';
                                function displaytime()
                                {
                                        currenttime -= 1;
                                        if (currenttime > 0){
                                                setcountdowntimer(currenttime,'hotmod_auc_','30');
                                                setTimeout(displaytime, 1000);
                                        } else {
                                                //$("#hotmod_auc_ends_hour_30").html('&lt;span class="errfont"&gt;closed&lt;/span&gt;');
                                        }
                                }
                                setTimeout(displaytime, 1000);
                        });

                        </script>
                        <div class="maxbidder">

                            <span>Higher bidder :</span>
                            <span id="hotmod_high_bidder_30">----</span>
                        </div>
                        <div class="curr_bid">
                                <span>Current Bid :</span>
                                <span id="hotmod_cur_bid_30">324,00 €</span>
                        </div>
                        <div class="buynow">&nbsp;</div>
                        <div class="bid-now">
                            <a poplink="pop_user_login" class="can_bid" next_bid="324,00" auc_id="30" id="hotmod_bid_now_30" href="javascript:void(0);"><span>Bid Now</span></a>
                        </div>
			   
                    </div>
		
                <div class="last_auc">
                    <a href="http://dev.bebazar.be/product/27/Test-check.html">
                            <div class="titre">Test check</div>
                            <div class="image"><img height="120px" border="0" src="http://dev.bebazar.be/uploaded/27/thumb-3756781370250687.jpg"></div>
                            <div class="price">23,00 €</div>
                    </a>
                    <div class="count_down">
                            <div class="count_time">
                                    <span id="hotmod_auc_ends_days_27">02</span>
                                    <span id="hotmod_auc_ends_hour_27">22</span>
                                    <span id="hotmod_auc_ends_min_27">38</span>
                                    <span id="hotmod_auc_ends_sec_27">02</span>
                            </div>
                            <div class="count_text">
                                    <span id="has_days_27">Days</span>
                                    <span>Hours</span>
                                    <span>Mins</span>
                                    <span>Secs</span>
                            </div>
                    </div>
                    <script type="text/javascript">
                    $(function() {
                        var currenttime = '259125';
                            function displaytime()
                            {
                                    currenttime -= 1;
                                    if (currenttime > 0){
                                            setcountdowntimer(currenttime,'hotmod_auc_','27');
                                            setTimeout(displaytime, 1000);
                                    } else {
                                            //$("#hotmod_auc_ends_hour_27").html('&lt;span class="errfont"&gt;closed&lt;/span&gt;');
                                    }
                            }
                            setTimeout(displaytime, 1000);
                    });

                    </script>
                    <div class="maxbidder">&nbsp;</div>
                    <div class="curr_bid">&nbsp;</div>
                    <div class="buynow"><a href="http://dev.bebazar.be/buy_now.php?id=27"><img border="0/" src="http://www.bebazar.be/language/EN/images/buy_it_now.gif"> 23,00 €</a></div>
                    <div class="bid-now"><a href="http://dev.bebazar.be/buy_now.php?id=27"><span>Buy Now</span></a></div>
			  
                    </div>
		
                </div>
                <div style="clear:both"></div>
            </div>
            <div style="clear:both"></div>
            <div id="recente">
                <div class="heading-row">Recently Added auctions</div>
                    <div class="auc_container">
	    	    
                        <div class="last_auc">
                                <a href="http://dev.bebazar.be/product/27/Test-check.html">
                                    <div class="titre">Test check</div>
                                    <div class="image"><img height="120px" border="0" src="http://dev.bebazar.be/uploaded/27/thumb-3756781370250687.jpg"></div>
                                    <div class="price">23,00 €</div>
                                </a>
                                <div class="count_down">
                                        <div class="count_time">
                                                <span id="auc_last_ends_days_27">02</span>
                                                <span id="auc_last_ends_hour_27">22</span>
                                                <span id="auc_last_ends_min_27">38</span>
                                                <span id="auc_last_ends_sec_27">02</span>
                                        </div>
                                        <div class="count_text">
                                                <span id="has_days_27">Days</span>
                                                <span>Hours</span>
                                                <span>Mins</span>
                                                <span>Secs</span>
                                        </div>
                                </div>
                                <script type="text/javascript">
                                $(function() {
                                var currenttime = '259125';
                                        function displaytime()
                                        {
                                                currenttime -= 1;
                                                if (currenttime > 0){
                                                        setcountdowntimer(currenttime,'auc_last_','27');
                                                        setTimeout(displaytime, 1000);
                                                } else {
                                                        //$("#hotmod_auc_ends_hour_27").html('&lt;span class="errfont"&gt;closed&lt;/span&gt;');
                                                }
                                        }
                                        setTimeout(displaytime, 1000);
                                });

                                </script>
                                                        <div class="maxbidder">&nbsp;
                                </div>
                                <div class="curr_bid">&nbsp;
                                </div>
                                                        <div class="buynow"><a href="http://dev.bebazar.be/buy_now.php?id=27"><img border="0/" src="http://www.bebazar.be/language/EN/images/buy_it_now.gif"> 23,00 €</a></div>
                                                        <div class="bid-now"><a href="http://dev.bebazar.be/buy_now.php?id=27"><span>Buy Now</span></a></div>

                        </div>
			    
                        <div class="last_auc">
                                <a href="http://dev.bebazar.be/product/30/test.html">
                                    <div class="titre">test</div>
                                    <div class="image"><img height="120px" border="0" src="http://dev.bebazar.be/uploaded/30/thumb-2098931370611165.jpg"></div>
                                    <div class="price">324,00 €</div>
                                </a>
                                <div class="count_down">
                                        <div class="count_time">

                                                <span id="auc_last_ends_hour_30">22</span>
                                                <span id="auc_last_ends_min_30">38</span>
                                                <span id="auc_last_ends_sec_30">02</span>
                                        </div>
                                        <div class="count_text">

                                                <span>Hours</span>
                                                <span>Mins</span>
                                                <span>Secs</span>
                                        </div>
                                </div>
                                <script type="text/javascript">
                                $(function() {
                                var currenttime = '86325';
                                        function displaytime()
                                        {
                                                currenttime -= 1;
                                                if (currenttime > 0){
                                                        setcountdowntimer(currenttime,'auc_last_','30');
                                                        setTimeout(displaytime, 1000);
                                                } else {
                                                        //$("#hotmod_auc_ends_hour_30").html('&lt;span class="errfont"&gt;closed&lt;/span&gt;');
                                                }
                                        }
                                        setTimeout(displaytime, 1000);
                                });

                                </script>
                                                        <div class="maxbidder">

                                        <span>Higher bidder :</span>
                                                                        <span id="last_auc_high_bidder_30">----</span>
                                                                </div>
                                <div class="curr_bid">
                                        <span>Current Bid :</span>
                                                                        <span id="last_auc_cur_bid_30">324,00 €</span>
                                                                </div>
                                                        <div class="buynow">&nbsp;</div>
                                                                <div class="bid-now"><a poplink="pop_user_login" class="can_bid" next_bid="324,00" auc_id="30" id="last_auc_bid_now_30" href="javascript:void(0);"><span>Bid Now</span></a></div>

                        </div>
                    </div>
                        <div style="clear:both; height:15px"></div>
                </div>
             </div>
        </div>    
    </td>
    <td valign="top">
        <div id="home">    
            <div style="float:right; width:300px;" id="col2">
                <div class="login_div">
                    <form method="post" action="http://dev.bebazar.be/login.php" id="login" name="login">
                        <div style="font-size:16px; margin-bottom:15px; font-weight:bold; text-transform:uppercase">User login</div>
                        <div id="error_msg" style="text-align: center;"></div>
        
                        <div>
                            <label style="display:block; width:80px; float:left" title="Please enter your username" for="username">Username&nbsp;</label>
                            <input type="text" style="width:180px; float:left" maxlength="20" value="" id="username" name="username">
                            <div style="clear:both;height: 5px;"></div>
                            <label style="display:block; width:80px; float:left" title="Please enter your password" for="password">Password&nbsp;</label>
                            <input type="password" style=" width:180px; float:left" value="" maxlength="20" id="password" name="password">
                            <div style="clear:both;height: 5px;"></div>
                            <label style="display:block; width:80px; float:left" for="password">&nbsp;</label>
                                <input type="checkbox" value="1" id="rememberme" name="rememberme">
                                <label for="rememberme">&nbsp;Remember me</label><br>
                            <div style="clear:both;height: 5px;"></div>
                                    <p align="center"><input type="submit" id="submit" class="button" value="Login" name="action"></p>
                                    <p align="right"><a href="http://dev.bebazar.be/register.php?" style="color: #FFF;font-weight: bold;">Signup</a> | <a href="http://dev.bebazar.be/forgotpasswd.php" style="color: #FFF;font-weight: bold;">Forgot your password?</a></p>
                        </div>
                    </form>
                   	
                </div>
                <div style="border: 1px solid #CCC; margin-top:15px; padding:2px;overflow: hidden;height: 230px;">
                        <div data-header="false" data-border-color="#FFFFFF" data-stream="false" data-show-faces="true" data-width="300" data-send="true" data-href="http://www.facebook.com/pages/Bebazarbe/318341284955310" style="color:#FFF;" class="fb-like-box fb_iframe_widget" fb-xfbml-state="parsed"><span style="vertical-align: top; width: 0px; height: 0px;"><iframe width="300px" scrolling="no" height="1000px" frameborder="0" name="f1e13a3c7ab8c56" allowtransparency="true" title="fb:like_box Facebook Social Plugin" style="border: medium none; visibility: hidden; width: 0px; height: 0px;" src="http://www.facebook.com/plugins/like_box.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FBebazarbe%2F318341284955310&amp;show_faces=true&amp;header=false&amp;stream=false&amp;width=300&amp;app_id=468659216482561&amp;locale=en_US&amp;sdk=joey&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D25%23cb%3Df2b4b1cb608777%26origin%3Dhttp%253A%252F%252Fdev.bebazar.be%252Ff33661e78720ff2%26domain%3Ddev.bebazar.be%26relation%3Dparent.parent"></iframe></span></div>
       
                </div>
      
                <div style="border: 1px solid #CCC; margin-top:15px; padding:2px;overflow: hidden;height: 230px;">
            
                        <!-- Place this tag where you want the badge to render. -->
                        <div style="text-indent: 0px; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 300px; height: 131px;" id="___plus_0"><iframe width="100%" scrolling="no" frameborder="0" hspace="0" marginheight="0" marginwidth="0" style="position: static; top: 0px; width: 300px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 131px;" tabindex="0" vspace="0" id="I0_1371544041738" name="I0_1371544041738" src="https://apis.google.com/u/0/_/pages/badge?bsv&amp;rel=author&amp;height=230&amp;hl=en&amp;origin=http%3A%2F%2Fdev.bebazar.be&amp;url=https%3A%2F%2Fplus.google.com%2Fb%2F108388620519853415375%2F&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_GB.tc1xaaZyEok.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTMBcXUn5_QS1zfpD4Mjeb8IL9VI6g#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Conauth%2Conload&amp;id=I0_1371544041738&amp;parent=http%3A%2F%2Fdev.bebazar.be&amp;rpctoken=60500633" allowtransparency="true" data-gapiattached="true" title="Google+ Badge"></iframe></div>

                    <!-- Place this tag after the last badge tag. -->
                    <script type="text/javascript">
                    window.___gcfg = {lang: 'en'};
                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                    </script>
                </div>
                <!-- stardevelop.com Live Help International Copyright - All Rights Reserved //-->
                <a class="LiveHelpButton" href="#"><img border="0" alt="Live Help - Offline" class="LiveHelpStatus" name="LiveHelpStatus" id="LiveHelpStatus" src="http://dev.bebazar.be/livehelp/include/status.php?LANGUAGE=en" title="Live Help - Offline"></a>
                <!-- Live Help HTML Code - NOT PERMITTED TO MODIFY IMAGE MAP/CODE/LINKS //-->
                <div class="adsense_right"> </div>
                <div style="background:#FFFFFF; border: 1px solid #CCC; margin-top:15px;  padding:15px; color:#000;">
		  <div style="font-size:16px; margin-bottom:15px; font-weight:bold; text-transform:uppercase">News</div>
			  <ul>
                            <li>03/02/2013 - <a href="http://dev.bebazar.be/viewnew.php?id=51">New on site live support added to bebazar</a></li>
                            <li>04/12/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=50">Nieuw bebazar facebook page created , follow us on facebook now and like bebazar to receive bebazar news .</a></li>
                            <li>19/09/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=49">Bebazar.be beta period has ended .</a></li>
                            <li>02/06/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=48">Win gifts on bebazar.be to sell items</a></li>
                            <li>29/05/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=47">New functionality added to bebazar. The seller is now able to specify if the item sold is brand new or used .</a></li>
                            <li>23/05/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=46">New functionality added allowing members to add an secondary E-mail address to receive bebazar messages .</a></li>
                            <li>23/05/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=44">We added facebook to bebazar.be , you will from now be allowed to register bebazar.be using your facebook account .</a></li>
                            <li>12/05/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=43">Bug with the Shipping conditions is fixed .</a></li>
                            <li>07/05/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=42">Buy now option bug on the sell an item page is now fixed .</a></li>
                            <li>24/04/2012 - <a href="http://dev.bebazar.be/viewnew.php?id=41">Nieuw optie is nu ingesteld, hetzelfde item verkopen .</a></li>
                            </ul>
                </div>
                
	        <div style="background:#FFFFFF;border: 1px solid #CCC; margin-top:15px;  padding:15px; color:#000;">
                        <div style="font-size:16px; margin-bottom:15px; font-weight:bold; text-transform:uppercase">Help Column</div>
			 <ul>
                            <li><a class="new-window" alt="faqs" href="http://dev.bebazar.be/viewfaqs.php?cat=24">Account Issues</a></li>
                            <li><a class="new-window" alt="faqs" href="http://dev.bebazar.be/viewfaqs.php?cat=22">Become member</a></li>
                            <li><a class="new-window" alt="faqs" href="http://dev.bebazar.be/viewfaqs.php?cat=13">Buy</a></li>
                            <li><a class="new-window" alt="faqs" href="http://dev.bebazar.be/viewfaqs.php?cat=23">Contact us</a></li>
                            <li><a class="new-window" alt="faqs" href="http://dev.bebazar.be/viewfaqs.php?cat=4">Other questions</a></li>
                            <li><a class="new-window" alt="faqs" href="http://dev.bebazar.be/viewfaqs.php?cat=12">sell</a></li>
                        </ul>
                </div>
        	
	        
        
            </div>
        </div>
        </td>
        </tr>
        </tbody></table>

        <br>
  
        <div class="adsense_bottom"> </div>  
            <table width="100%" height="25" border="0" background="http://dev.bebazar.be//themes/redtheme/img/fond_menu.png" class="counters">
                <tbody><tr>
                    <td valign="middle" align="center"><div class="footer"> <a href="http://dev.bebazar.be/index.php?">Home</a>
                                | <a href="http://dev.bebazar.be/register.php?">Signup</a> | <a href="http://dev.bebazar.be/user_login.php?">Login</a>
                        | <a class="new-window" alt="faqs" href="http://dev.bebazar.be/faqs.php">Help</a>
                        | <a href="http://dev.bebazar.be/contents.php?show=aboutus">About Us</a>
                        | <a href="http://dev.bebazar.be/contents.php?show=priv">Privacy Policy</a>
                        | <a href="http://dev.bebazar.be/contents.php?show=terms">Terms &amp; Conditions</a>
                    <br>
                    </div>
                    </td>
                     </tr>
                </tbody></table>
                <br>
                <div class="copyright">
                                <p>Cyber Technology BVBA/SPRL (1999-2012) . All rights reserved  v1b.6.43</p>		
                </div>
                </td>
                </tr>
                </tbody></table>
		</div>
		<div id="footer">
                    <table width="100%" height="25" border="0" background="http://dev.bebazar.be//themes/redtheme/img/fond_menu.png" class="counters">
                        <tbody><tr>
                            <td valign="middle" align="center"><div class="footer"> <a href="http://dev.bebazar.be/index.php?">Home</a>
                                        | <a href="http://dev.bebazar.be/register.php?">Signup</a> | <a href="http://dev.bebazar.be/user_login.php?">Login</a>
                                | <a class="new-window" alt="faqs" href="http://dev.bebazar.be/faqs.php">Help</a>
                                | <a href="http://dev.bebazar.be/contents.php?show=aboutus">About Us</a>
                                | <a href="http://dev.bebazar.be/contents.php?show=priv">Privacy Policy</a>
                                | <a href="http://dev.bebazar.be/contents.php?show=terms">Terms &amp; Conditions</a>
                            <br>
                            </div></td>
                        </tr>
                        </tbody>
                    </table>
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
