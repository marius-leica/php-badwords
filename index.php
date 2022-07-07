<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem In blanditiis accusantium asperiores atque odio tempora, esse nisi saepe quisquam repellat voluptatibus modi provident iusto animi laborum rerum? Lorem, Molestiae, nulla tenetur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui Lorem adipisci earum reiciendis, commodi alias hic cupiditate nobis ad minima deleniti rem, mollitia, sint suscipit expedita aliquid labore libero distinctio! Minus Lorem.";
$censura = $_GET['censura'];


$paragrafoCensurato = str_replace($censura, "***", $paragrafo);

?>

// la parola da censurare e Lorem che si ripete di +

<h1>funziona</h1>
<p>
    <?php echo $paragrafo; ?>
</p>
<p>Lunghezza paragrafo: <?php echo strlen($paragrafo) ?></p>

<h2>Parola da censurare: <?php echo $censura ?></h2>
<p>
    <?php echo $paragrafoCensurato; ?>
</p>