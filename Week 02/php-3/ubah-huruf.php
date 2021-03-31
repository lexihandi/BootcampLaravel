<?php
function ubah_huruf($string)
{
    $new = "";
    $old = "";
    echo $old;

    for ($i = 0; $i < strlen($string); $i++) {
        $old = $string[$i];
        $new .= ++$old;
    }
    return $new . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
