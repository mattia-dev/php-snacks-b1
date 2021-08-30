<!-- Prendere un testo abbastanza lungo, contenente diverse frasi.
Suddividere il testo in tanti paragrafi <p>:
ad ogni punto corrisponde un nuovo paragrafo. -->

<?php

    $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. At id reprehenderit
        dolorum veniam ipsam eius, distinctio, architecto facilis illum perferendis magni modi
        dicta cumque ex officia assumenda quas nesciunt sint. Lorem ipsum dolor, sit amet consectetur
        adipisicing elit. At id reprehenderit dolorum veniam ipsam eius, distinctio, architecto
        facilis illum perferendis magni modi dicta cumque ex officia assumenda quas nesciunt sint. Lorem
        ipsum dolor, sit amet consectetur adipisicing elit. At id reprehenderit dolorum veniam ipsam eius,
        distinctio, architecto facilis illum perferendis magni modi dicta cumque ex officia assumenda
        quas nesciunt sint.";

    $textArray = explode(".", $text);

    for ($i=0; $i < count($textArray) ; $i++) { 

        echo "<p>{$textArray[$i]}.</p>";

    }

?>