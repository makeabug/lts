<?php
$this->breadcrumbs=array(
	'Demo',
);

$this->contentTitle = 'Demo';

?>

<p>Douban Book</p>

<ul class="imglist">
<?php foreach ($result['collections'] as $item): ?>
    <li style="width:107px;height:138px;">
        <a href="<?php echo $item['book']['alt']?>" target="_blank">
            <img src="<?php echo $item['book']['image']?>" alt="<?php echo $item['book']['alt_title']?>" style="width:107px;height:138px;" title="<?php echo $item['book']['title']?>"/>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<?php
/* echo '<pre>';
print_r($result);
echo '</pre>'; */
?>