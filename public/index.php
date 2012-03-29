<h1>Site1</h1>
<?php
echo get_include_path();
ini_set('display_errors', 1);
for ($i = 0; $i < 10; $i ++) {
    echo $i;
}