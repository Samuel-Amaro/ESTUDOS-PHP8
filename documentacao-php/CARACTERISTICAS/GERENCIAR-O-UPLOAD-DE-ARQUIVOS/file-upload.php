<?php 

//como foi submetido mais de um file pode-ser percorrer o file array global

foreach($_FILES['userfile'] as $chave => $valor) {
    echo "<h3>$chave</h3>";
    foreach($valor as $c => $v) {
        echo "<p><b>$c:</b> $v</p>";
    }
}

echo '<h2>UPLOAD FILES</h2>';
echo '<pre><code>';
echo 'Aqui está mais informações de debug: ';
print_r($_FILES);
echo '</code></pre>';

