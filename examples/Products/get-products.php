

<!DOCTYPE html>

<html lang="en">

    <head >




        <link rel="stylesheet" href="MainStyle.css">
        <title>NearFull | Store</title>
        <link rel="icon" href="Near-Full-Logo.png">
        <script type = "text/javascript" src="Products.js"></script>





       

    </head>

    
    <!--      HEADER       -->
    <body >
      <div class ="header"  >


        <div class="tab" >


          <div class = "button" >
            <a href="index.html">
              <button>Home</button>
            </a>
           </div>


           <div class = "button" >
            <a href="Featured.html">
              <button>Featured</button>
            </a>
           </div>

           <div class = "button" >
            <img src="Near-Full-Black.png" alt="CupBoy" width="120" height="120" style="vertical-align: middle;">
          </div>
        
          <div class = "button" >
            <a href="Store.html">
              <button>Store</button>
            </a>
          </div>


          <div class = "button" >
              <a href="SignUp.html">
                <button>Sign Up</button>
              </a>
          </div>
          

          <hr>
        </div>
        
      </div>
      

    </body>



    <!--      BODY       -->

    <body  >

      <div >

        <body onLoad="getProducts"></body>
        
             <?php

                use Printful\Exceptions\PrintfulApiException;
                use Printful\Exceptions\PrintfulException;
                use Printful\PrintfulApiClient;
                use Printful\PrintfulProducts;
                use Printful\Structures\Sync\Responses\SyncProductsResponse;

                require_once __DIR__ . '/../../vendor/autoload.php';

                /**
                 * This example fill will demonstrate how to get list of products in your store using Products API
                 * Docs for this endpoint can be found here: https://www.printful.com/docs/products#listProducts
                 */


                // Replace this with your API key
                $apiKey = '';

                try {
                    // create ApiClient
                    $pf = new PrintfulApiClient($apiKey);

                    // create Products Api object
                    $productsApi = new PrintfulProducts($pf);

                    // set some paging info
                    $offset = 0;
                    $limit = 20;

                    /** @var SyncProductsResponse $list */
                    $list = $productsApi->getProducts($offset, $limit);

                } catch (PrintfulApiException $e) { // API response status code was not successful
                    echo 'Printful API Exception: ' . $e->getCode() . ' ' . $e->getMessage();
                } catch (PrintfulException $e) { // API call failed
                    echo 'Printful Exception: ' . $e->getMessage();
                    var_export($pf->getLastResponseRaw());
                }
            ?>
      </div>

    </body>
</html>




