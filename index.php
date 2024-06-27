<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Hape</title>
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
        $_SESSION['arrHape'] = array(
    array("SKU"=>"12345", "Merk"=>"Samsung", "Model"=>"Galaxy S22", "Harga"=>18000000, "url_gambar"=>"img/0.jpg", "spec"=>array("4GB", "5G", "5150mAH", "256GB")),
    array("SKU"=>"54321", "Merk"=>"Xiaomi", "Model"=>"Mi 11 Pro", "Harga"=>9500000, "url_gambar"=>"img/1.jpg", "spec"=>array("8GB", "5G", "5050mAH", "256GB")),
    array("SKU"=>"AB012", "Merk"=>"Redmi", "Model"=>"Redmi Note 12", "Harga"=>6500000, "url_gambar"=>"img/2.jpg", "spec"=>array("6GB", "5G", "5350mAH", "256GB")),
    array("SKU"=>"XY456", "Merk"=>"Samsung", "Model"=>"Galaxy S21", "Harga"=>15000000, "url_gambar"=>"img/3.jpg", "spec"=>array("8GB", "5G", "4500mAH", "256GB")),
    array("SKU"=>"ZQ789", "Merk"=>"Apple", "Model"=>"iPhone 13", "Harga"=>20000000, "url_gambar"=>"img/4.jpg", "spec"=>array("6GB", "5G", "4500mAH", "512GB")),
    array("SKU"=>"GH234", "Merk"=>"Google", "Model"=>"Pixel 6", "Harga"=>12000000, "url_gambar"=>"img/5.jpg", "spec"=>array("8GB", "5G", "4000mAH", "128GB")),
    array("SKU"=>"JN567", "Merk"=>"OnePlus", "Model"=>"OnePlus 9", "Harga"=>11000000, "url_gambar"=>"img/6.jpg", "spec"=>array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU"=>"KL890", "Merk"=>"Sony", "Model"=>"Xperia 1", "Harga"=>14000000, "url_gambar"=>"img/7.jpg", "spec"=>array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU"=>"MN123", "Merk"=>"LG", "Model"=>"V60 ThinQ", "Harga"=>9000000, "url_gambar"=>"img/8.jpg", "spec"=>array("8GB", "5G", "5000mAH", "128GB")),
    array("SKU"=>"OP456", "Merk"=>"Asus", "Model"=>"ROG Phone 5", "Harga"=>16000000, "url_gambar"=>"img/9.jpg", "spec"=>array("16GB", "5G", "6000mAH", "256GB")),
    array("SKU"=>"QR789", "Merk"=>"Huawei", "Model"=>"Mate 40 Pro", "Harga"=>13000000, "url_gambar"=>"img/10.jpg", "spec"=>array("8GB", "5G", "4400mAH", "256GB")),
    array("SKU"=>"ST012", "Merk"=>"Oppo", "Model"=>"Find X3 Pro", "Harga"=>12000000, "url_gambar"=>"img/11.jpg", "spec"=>array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU"=>"UV345", "Merk"=>"Realme", "Model"=>"GT", "Harga"=>8000000, "url_gambar"=>"img/12.jpg", "spec"=>array("8GB", "5G", "4300mAH", "256GB")),
    array("SKU"=>"WX678", "Merk"=>"Vivo", "Model"=>"X60 Pro", "Harga"=>10000000, "url_gambar"=>"img/13.jpg", "spec"=>array("12GB", "5G", "4200mAH", "256GB")),
    array("SKU"=>"YZ901", "Merk"=>"Motorola", "Model"=>"Edge 20 Pro", "Harga"=>9500000, "url_gambar"=>"img/14.jpg", "spec"=>array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU"=>"AB345", "Merk"=>"Nokia", "Model"=>"8.3 5G", "Harga"=>7500000, "url_gambar"=>"img/15.jpg", "spec"=>array("8GB", "5G", "4500mAH", "128GB")),
    array("SKU"=>"CD678", "Merk"=>"Xiaomi", "Model"=>"Mi 11 Ultra", "Harga"=>18000000, "url_gambar"=>"img/16.jpg", "spec"=>array("12GB", "5G", "5000mAH", "512GB")),
    array("SKU"=>"EF901", "Merk"=>"Poco", "Model"=>"F3", "Harga"=>7000000, "url_gambar"=>"img/17.jpg", "spec"=>array("8GB", "5G", "4520mAH", "256GB")),
    array("SKU"=>"GH234", "Merk"=>"Samsung", "Model"=>"Galaxy A52", "Harga"=>6000000, "url_gambar"=>"img/18.jpg", "spec"=>array("6GB", "5G", "4500mAH", "128GB")),
    array("SKU"=>"IJ567", "Merk"=>"Oppo", "Model"=>"Reno 6", "Harga"=>8000000, "url_gambar"=>"img/19.jpg", "spec"=>array("8GB", "5G", "4300mAH", "256GB"))
);

        foreach ($_SESSION['arrHape'] as $hape) {
            echo '<div class="card">';
            echo '<img src="'.$hape['url_gambar'].'" alt="'.$hape['Model'].'">';
            echo '<h3>'.$hape['Merk'].' '.$hape['Model'].'</h3>';
            echo '<p>Harga: Rp. '.number_format($hape['Harga'], 0, ',', '.').'</p>';
            echo '<input type="checkbox" name="compare[]" value="'.$hape['SKU'].'">';
            echo '<label>Pilih</label>';
            echo '</div>';
        }
        ?>
        <div class="btn-compare">
            <button id="btnCompare" disabled>Bandingkan</button>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const compareBtn = document.getElementById('btnCompare');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                if (checkedCheckboxes.length === 3) {
                    compareBtn.disabled = false;
                    checkboxes.forEach(box => {
                        if (!box.checked) {
                            box.disabled = true;
                        }
                    });
                } else {
                    compareBtn.disabled = true;
                    checkboxes.forEach(box => {
                        box.disabled = false;
                    });
                }
            });
        });

        
        compareBtn.addEventListener('click', () => {
            const selectedHapes = [];
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
                selectedHapes.push(Array.from(checkboxes).indexOf(checkbox));
            });
            if (selectedHapes.length === 3) {
                window.location.href = `compare.php?index=${selectedHapes.join(',')}`;
            }
    });  
             
    </script>
</body>
</html>
