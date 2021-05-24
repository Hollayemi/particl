<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listings</title>
    <!-- links -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="listing.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    
    <div>
        <div class="mainLeft">
            <div class="left_lcon_section">
                <div><a href="index.php"><h3>H</h3></a></div>
                <div class="active"><h3>M</h3></div>
                <div><h3>W</h3></div>
                <div><h3>+</h3></div>
                <span class="iconBottomLeft">
                    <div><h3><i class="fa fa-question"></i></h3></div>
                    <div><h3><i class="fa fa-bug"></i></h3></div>
                </span>
            </div>

            <div class="left_nav_tabs">
                <div><img src="images/subscribe.png" alt=""></div>

                <!-- divider -->
                <div class="divider"></div>
                <br>

                <div class="left_nav_links"><i class="fa fa-th overviewFaIcona"></i><p>Overview</p></div>
                <!-- divider  market-->
                <div class="marketDiv" >
                    <h3>Market</h3>
                    <i class="fa fa-caret-up angleUp" style="color:rgb(14, 194, 140)"></i>
                </div>

                <div class="showMarket" style="height:150px;">
                    <button onclick="switchPage('Listing')"><div class="marketing_sub clickListing"><i class="fa fa-ellipsis-h "></i><p>Listing</p></div></button>
                    <button onclick="switchPage('Buy')"><div class="marketing_sub"><i class="fa fa-shopping-bag "></i><p>Buy</p></div></button>
                    <button onclick="switchPage('Sell')"><div class="marketing_sub"><i class="fa fa-shopping-basket "></i><p>Sell</p></div></button>
                </div>

                <div class="divider"></div>


                <!-- divider  Wallet-->

                <div class="walletDiv" >
                    <h3>Wallet</h3>
                    <i class="fa fa-caret-up walletAngleUp" style="color:rgb(14, 194, 140)"></i>
                </div>

                <div class="ShowwalletSec" style="height:200px;">
                    <button onclick="switchPage('Listing')"><div class="walletSec"><i class="fa fa-ellipsis-h "></i><p>Send/Convert</p></div></button>
                    <button onclick="switchPage('Listing')"><div class="walletSec"><i class="fa fa-shopping-bag "></i><p>Receive</p></div></button>
                    <button onclick="switchPage('Listing')"><div class="walletSec"><i class="fa fa-diamond "></i><p>History</p></div></button>
                    <button onclick="switchPage('Listing')"><div class="walletSec"><i class="fa fa-user "></i><p>Address BOOK</p></div></button>
                </div>
                <br>

                <!-- divider  Wallet-->

                <div class="divider" ></div>
                <div class="walletSec"><i class="fa fa-phone "></i><p>Proposals</p></div>
                <div class="divider"></div>

                <div class="cont">
                    <h5>Client .2.0.0 alphat-testnet <br>Market 0.0.78 <br>Core 0.18.1.0</h5>
                </div>

            </div>
        
        </div>
        <!--Right side-->


        <div class="mainSide" id="Listing" style="display:block;">
            
            <div class="mainSideTopMost">
                <div class="mainSideTopMost_1">
                    <h3>Listings</h3>
                    <h3><i class="fa fa-database"></i> 296.08308</h3>
                </div>


                <div class="mainSideTopMost_2">
                    <h3><i class="fa fa-shopping-cart"></i> 0</h3>
                </div>


                <div class="mainSideTopMost_3">
                    <h3><i class="fa fa-bug"></i></h3>
                </div>
            </div>



            <div class="secTopMost">
                <div class="secTopMost_1">
                    <!-- <h3>Listings</h3> -->
                    <input type="text" name="" id="">
                </div>


                <div class="secTopMost_2">
                    <h3><i class="fa fa-shopping-cart"></i> 0</h3>
                </div>


                <div class="secTopMost_3">
                    <h3><i class="fa fa-bug"></i></h3>
                </div>

                <div class="mainSideTopMost_4">
                    <h3><i class="fa fa-tag"></i></h3>
                </div>
            </div>
            

            <!-- images -->

            <div class="eachFrame_Body">

                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/brethren.jpeg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>


                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/cloud_plus_294.jpeg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>


                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/dstvad-phones.png" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>




                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/espn_218.jpg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>


                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/eve.jpeg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>


                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/brethren.jpeg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>


                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/cloud_plus_294.jpeg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>


                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/dstvad-phones.png" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>




                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/espn_218.jpg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>


                <div class="eachFrame">
                    <div class="eachImage">
                        <img src="images/eve.jpeg" alt="">
                    </div>
                    <div class="eachAbout">
                        <h3>The brethren</h3>
                        <p>This is family of two</p>
                        <div>
                            <span><b>14.</b>92 $</span>
                            <span><h4> <i class="fa fa-shopping-cart"></i> Add to cart</h4></span>
                        </div>
                    </div>
                </div>
            </div>





            <br><br><br><br><br>
        </div>



    </div>









<!-- selling Page -->










    
    <div class="mainSide" id="Sell" style="display:none;">
            
        <div class="mainSideTopMost">
            <div class="mainSideTopMost_1">
                <h3>Sell</h3>
                <h3><i class="fa fa-database"></i> 296.08308</h3>
            </div>


            <div class="mainSideTopMost_2">
                <h3><i class="fa fa-shopping-cart"></i> 0</h3>
            </div>


            <div class="mainSideTopMost_3">
                <h3><i class="fa fa-bug"></i></h3>
            </div>
        </div>


        <div class="secTopMost">
            <div class="secTopMost_1">
                <h3><i class="fa fa-ellipsis-h"></i> Listings</h3>
            </div>


            <div class="secTopMost_2">
                <h3><i class="fa fa-bars"></i> Orders</h3>
            </div>
        </div>

        <div class="topNote">
            <h2>Your Listings</h2>
            <h5>
                This is your dashboard for selling your products on the marketplace and manage their listings. <br>
                Create new listings and manage them here. Use the Orders tab to track and process orders from your customers.
            </h5>
            <p>
                Note: All listing created here will be publicly available on the marketplace
            </p>
        </div>



        <!--  -->

        <div class="searchListins">
            <div class="Add_new_listing_btn">
                <button onclick="switchPage('Sell_Add_Item')"><i class="fa fa-plus"></i> Add new listing</button>
                
                <h2>SEARCH & SORT</h2>

                <div class="div1">
                    <form action="" method="POST">
                        <input type="text" placeholder="Search Listings"><br>
                        <select name="" id="">
                            <option value="Sort listings">Sort listings</option>
                        </select>
                    </form>
                </div>

                <h2>FILTER BY STATUS</h2>
                <div class="div1">
                    <form action="" method="POST">
                        <div class="flexradioBtn1">
                            <label class="radioBtn1">
                                <input type="radio" name="chooseBgType" id="yes" value="fix" checked class="bgRadioBtn">
                                <span class="checkmark"></span>
                            </label>
                            <h5>All Listed</h5>
                        </div>
                        <div class="flexradioBtn1">
                            <label class="radioBtn1">
                                <input type="radio" name="chooseBgType" id="yes" value="rotate" class="bgRadioBtn">
                                <span class="checkmark"></span>
                            </label>
                            <h5>Published</h5>
                        </div>
                        <div class="flexradioBtn1">
                            <label class="radioBtn1">
                                <input type="radio" name="chooseBgType" id="yes" value="rotate" class="bgRadioBtn">
                                <span class="checkmark"></span>
                            </label>
                            <h5>Unpublished</h5>
                        </div>
                        
                        
                    </form>
                </div>
            </div>



            <div class="show_matched_list">
                <h3>SORRY, NO MATCHING LISTINGS FOUND</h3>
            </div>
        </div>
        
    </div>








<!-- Adding New Page -->


<div class="mainSide" id="Buy" style="display:none;">
            
            <div class="mainSideTopMost">
                <div class="mainSideTopMost_1">
                    <h3>Sell <i class="fa fa-caret-right"></i> ADD/EDIT ITEM</h3>
                    <h3><i class="fa fa-database"></i> 296.08308</h3>
                </div>
        
        
                <div class="mainSideTopMost_2" style="display: flex;justify-content: space-evenly;">
                    <h3><i class="fa fa-shopping-cart"></i> 20</h3>
                    <h3><i class="fa fa-code"></i> 10</h3>
                    <h3><i class="fa fa-lock"></i> 15</h3>
                </div>
        
        
                <div class="mainSideTopMost_3">
                    <h3><i class="fa fa-bug"></i></h3>
                </div>
            </div>

            <div style="margin-top:300px">
                <h1>Nthing Dey Here</h1>
            </div>

</div>



<div class="mainSide" id="Sell_Add_Item" style="display:none;">
            
    <div class="mainSideTopMost">
        <div class="mainSideTopMost_1">
            <h3>Sell <i class="fa fa-caret-right"></i> ADD/EDIT ITEM</h3>
            <h3><i class="fa fa-database"></i> 296.08308</h3>
        </div>


        <div class="mainSideTopMost_2" style="display: flex;justify-content: space-evenly;">
            <h3><i class="fa fa-shopping-cart"></i> 20</h3>
            <h3><i class="fa fa-code"></i> 10</h3>
            <h3><i class="fa fa-lock"></i> 15</h3>
        </div>


        <div class="mainSideTopMost_3">
            <h3><i class="fa fa-bug"></i></h3>
        </div>
    </div>

    <div class="topNote" style="padding-top:120px;">
        <h2>Add New Product For Sale</h2>
        <div class="Sell_Add_Item_help" style="display: none;">
            <h5>
                Here you acn add a new Product for Sale on Particl Open Marketplace
            </h5>
            <p>
                This product will be available for all users on Particl network
            </p>
        </div>
        <i class="fa fa-question questionMark" style="transform:scale(1);" title="Help"></i>
        <i class="fa fa-remove questionMarkCancel" style="transform:scale(0);" title="cancel"></i>
    </div>



    <div class="addNewProduct">
        <div class="div1 div1Up">
            <h2>Product Details</h2>

            <div class="productDetails">
                <form action="#" method="post">
                    <input type="text" placeholder="Product Name"><br>
                    <textarea name="" id="" placeholder="Summary (short description)"></textarea><br>
                    <textarea name="" id="" placeholder="Description" class="textarea2"></textarea>
                </form>
            </div>

            <div class="div1">
                <h2>Pricing</h2>
    
                <div class="productDetails">
                    <form action="#" method="post">
                        <input type="text" placeholder="Product Name"><br><br>
                    </form>
                </div>
                
            </div>
        </div>

        <div class="div1 div1Up">
            <h2>Product Details</h2>

            <div class="productDetails">
                <form action="#" method="post">
                    <br>
                    <div class="uploadPicturesSec">
                        <p><i class="fa fa-file"></i> Upload A Photo</p>
                    </div>
                    <br>
                    <p class="picUploadNote">
                        Upload photos of your Product (first photo will be set as main feature image).
                         Be sure to upload high quality & focused images in good lighting where possible. Max file size per image  is 2 MB <br><br><br><br>
                    </p>
                </form>
            </div>

            <div class="div1">
                <h2>Shipping</h2>
    
                <div class="productDetails">
                    <form action="#" method="post">
                        <input type="text" placeholder="Shipping from (Your country)*"><br>
                        <input type="text" placeholder="Domestic Price"><br>
                        <input type="text" placeholder="International Price"><br>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    
</div>




</body>
<script src="listing.js"></script>
</html>