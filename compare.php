<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Hape</title>
    <link rel="stylesheet" href="css/style.css">    
</head>
<body>
    <div class="sidebar">
        <img src="img/logo.jpg" alt="Toko Hape Logo">
        <h1>Salman & Dustin Store</h1>        
    </div>
    <div class="content">
        <?php    
            session_start();
            $selectedIds = explode(',', $_GET['index']);
            foreach($selectedIds as $id){
                $hape = $_SESSION['arrHape'][$id];
                echo '<div class="card">';
                echo '<img src="'.$hape['url_gambar'].'" alt="'.$hape['Model'].'">';
                echo '<h3>'.$hape['Merk'].' '.$hape['Model'].'</h3>';
                echo '<h2>'.$hape['spec'][0].'</h2>';
                echo '<h2>'.$hape['spec'][1].'</h2>';
                echo '<h2>'.$hape['spec'][2].'</h2>';
                echo '<h2>'.$hape['spec'][3].'</h2>';                
                echo '<p>Harga: Rp. '.number_format($hape['Harga'], 0, ',', '.').'</p>';                                
                echo '</div>';
            }  
        ?>
        <div class="btn-back" style="height: 100vh; text-align:left; padding-left: 20px;">
            <a href="#" onclick="window.location.href = `index.php`">&lt;&lt;Back</a>
        </div>
    </div>
</body>
</html>
