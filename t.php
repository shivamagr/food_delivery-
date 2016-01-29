<?php
                                                    $qu="SELECT * FROM `food_item` WHERE 1";
                                                    $res=mysqli_query($connection, $qu);
                                                  while($row = mysqli_fetch_assoc($res)){
						echo'<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="col-md-3 order-grid">
								<img src="images/d1.jpg" class="img-responsive" alt="/">
								<div class="cur">
									<div class="cur-left">
										<div class="item_add"><span class="item_price"><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></span></div>
									</div>
									<div class="cur-right">
										<div class="item_add"><span class="item_price"><h6><span>only </span>'.$row["cost"].'</h6></span></div>
									</div>
										<div class="clearfix"> </div>
								</div>
								</div>'; }


                                                                  ?>
