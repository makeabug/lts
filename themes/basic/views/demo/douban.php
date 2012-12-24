<?php
$this->breadcrumbs=array(
	'Demo',
);

$this->contentTitle = 'Demo';

?>

<p>Douban</p>

<?php
echo '<pre>';
print_r(json_decode($result));
echo '</pre>';
?>