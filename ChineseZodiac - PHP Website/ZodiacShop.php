<?php  
    require_once("Includes\class_OnlineStore.php"); 
    $storeID = "ZODIAC"; 
    $storeInfo = array(); 
    if (class_exists("OnlineStore")) { 
        if (isset($_SESSION['currentStore'])) 
            $Store = unserialize($_SESSION['currentStore']); 
        else { 
            $Store = new OnlineStore(); 
        } 
        $Store->setStoreID($storeID); 
        $storeInfo = $Store->getStoreInformation(); 
        if (class_exists("OnlineStore")) { 
            if (isset($_SESSION['currentStore'])) 
                $Store = unserialize($_SESSION['currentStore']); 
            else { 
                $Store = new OnlineStore(); 
            } 
            $Store->setStoreID($storeID); 
            $storeInfo = $Store->getStoreInformation(); 
            $Store->processUserInput(); 
        } 
    } 
    else { 
        $ErrorMsgs[] = "The OnlineStore class is not available!"; 
        $Store = NULL; 
    } 
?> 
<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">   
    <head> 
        <title><?php echo $storeInfo['name']; ?></title>  
    </head> 
    <body> 
        <?php  
            if (isset($_GET['submit'])){ 
                for ($i=0; $i<5; $i++){ 
                   if (isset($_GET['size'.$i])) 
                        $_SESSION['size'.$i] = $_GET['size'.$i]; 
                   if (isset($_GET['color'.$i])) 
                        $_SESSION['color'.$i] = $_GET['color'.$i]; 
                   if (isset($_GET['sign'.$i])) 
                        $_SESSION['sign'.$i] = $_GET['sign'.$i]; 
                } 
            } 
        ?> 
        <div id="main"> 
        <h1><?php echo htmlentities($storeInfo['name']); ?></h1> 
        <h2><?php echo htmlentities($storeInfo['description']);?></h2> 
        <p><?php echo htmlentities($storeInfo['welcome']); ?></p> 
        <p><?php 
                echo "<p>Before adding to the item, please select size, color and sign.</p>"; 
                echo "<p>Then press the button below to set these attributes.</p>"; 
                echo "<p>Otherwise you may lose the values.</p>"; 
                 
                $Store->getProductList(); 
                $_SESSION['currentStore'] = serialize($Store);
                echo "<p>Thank-you</p>";				
            ?> 
        </p>         
        <?php 
            if (count($ErrorMsgs)) { 
                foreach ($ErrorMsgs as $Msg){ 
                    echo "<p>" . $Msg . "</p>\n"; 
                } 
            }             
        ?> 
        </div> 
    </body> 
</html> 