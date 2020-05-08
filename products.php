<?php 
                    $data= array(
	1 => array('discount' => '62', 'urgency' => '', 'price' => '171', 'crossedprice' => '452', 'Badge' => '0', 'assured' => 'Based on your purchase'),
	2 => array('discount' => '', 'urgency' => 'Almost Gone!', 'price' => '135', 'crossedprice' => '', 'Badge' => '0', 'assured' => 'Based on your purchase'),
	3 => array('discount' => '79', 'urgency' => '', 'price' => '151', 'crossedprice' => '753', 'Badge' => '1', 'assured' => '10,000+ bought this'),
	4 => array('discount' => '', 'urgency' => '', 'price' => '1,441', 'crossedprice' => '', 'Badge' => '2', 'assured' => 'Recommended for you'),
	5 => array('discount' => '80', 'urgency' => '', 'price' => '1,130', 'crossedprice' => '5,792', 'Badge' => '0', 'assured' => 'Inspirde by your activity'),
	6 => array('discount' => '80', 'urgency' => 'Almost Gone!', 'price' => '410', 'crossedprice' => '2,107', 'Badge' => '0', 'assured' => 'Just in'),
	7 => array('discount' => '', 'urgency' => '', 'price' => '225', 'crossedprice' => '', 'Badge' => '0', 'assured' => '50,000+ bought this'),
	8 => array('discount' => '10', 'urgency' => '', 'price' => '269', 'crossedprice' => '301', 'Badge' => '0', 'assured' => 'Based on your purchase'),
	9 => array('discount' => '', 'urgency' => '', 'price' => 'Earn ₹7,550', 'crossedprice' => '', 'Badge' => '3', 'assured' => '2,35,000 Invites sent'),
	10 => array('discount' => '73', 'urgency' => 'Almost Gone!', 'price' => '402', 'crossedprice' => '1,505', 'Badge' => '1', 'assured' => 'Featured'),
	11 => array('discount' => '80', 'urgency' => '', 'price' => '863', 'crossedprice' => '4,363', 'Badge' => '1', 'assured' => 'Featured'),
	12 => array('discount' => '85', 'urgency' => '', 'price' => '2,223', 'crossedprice' => '14,969', 'Badge' => '1', 'assured' => ''),
	13 => array('discount' => '87', 'urgency' => '', 'price' => '1,192', 'crossedprice' => '9,930', 'Badge' => '2', 'assured' => 'Recommended for you'),
	14 => array('discount' => '33', 'urgency' => '', 'price' => '1,259', 'crossedprice' => '1,881', 'Badge' => '0', 'assured' => 'Just in'),
	15 => array('discount' => '81', 'urgency' => '', 'price' => '768', 'crossedprice' => '4,138', 'Badge' => '0', 'assured' => 'Just in'),
	16 => array('discount' => '68', 'urgency' => 'Almost Gone!', 'price' => '235', 'crossedprice' => '753', 'Badge' => '2', 'assured' => 'Inspired by your activity'),
	17 => array('discount' => '63', 'urgency' => 'Almost Gone!', 'price' => '544', 'crossedprice' => '1,505', 'Badge' => '2', 'assured' => 'Shoppers like you bought'),
	18 => array('discount' => '80', 'urgency' => '', 'price' => '739', 'crossedprice' => '3,762', 'Badge' => '0', 'assured' => 'Shoppers like you bought'),
);
                    for($i=1;$i<=14;$i++){ ?>
                    <div class="product">
                        <div class="card w-100">
                            <img class="card-img p-auto" src="resources/img/material/<?php printf("%03d",$i);?><?php if($i==9){echo '.png';}else{echo '.jpg';}?>" alt="Bologna">
                            <div class="card-img-overlay d-flex flex-column  p-0">
                                <?php if(($data[$i]['discount'])!=""){ ?><div class="card-discount mb-auto mr-auto">-<?php echo $data[$i]['discount'] ;?>%</div><?php } ?>
                                <?php if(($data[$i]['urgency'])!=""){ ?><div class="card-urgency mt-auto ml-auto"><?php echo $data[$i]['urgency'] ;?></div><?php } ?>
                            </div>
                        </div>
                        <div class="card p-0">
                            <div class="card-body m-0 p-0">
                                <div class="row">
                                <?php if(($data[$i]['price'])!=""){ ?><div class="card-price float-left p-2 pl-4 ">&#8377;<?php echo $data[$i]['price'] ;?></div><?php } ?>
                                <?php if(($data[$i]['crossedprice'])!=""){ ?><div class="card-crossedprice float-left p-2 pl-1 ">&#8377;<?php echo $data[$i]['crossedprice'] ;?></div><?php } ?>
                                <div class="card-badge float-right"></div>
                                    </div>
                                <?php if(($data[$i]['assured'])!=""){ ?><div class="card-assured pb-2 pl-2"><?php echo $data[$i]['assured'] ;?></div><?php } ?>
                                    
                            </div>
                        </div>
                    </div>
                    <?php } ?>