<?php
$loggedIn = true;
$arr = [1, 2, 3, 4, 5];
/*if($loggedIn){
    echo 'YOu are logged in';
}else{
    echo ' You are Not Loggged In';
}
*/
//echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;

$age = 20;
$score = 15;

echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

?>


<div>
    <?php if ($loggedIn) { ?>
        <h1> Welcome User </h1>

    <?php } else { ?>

        <h1> welcome Guest </h1>
    <?php } ?>
</div>



<div>
    <?php if ($loggedIn) : ?>
        <h1> Hello User </h1>
    <?php else : ?>
        <h1> hello Guest </h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach ($arr as $val) : ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>


<div>
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <li> <?php echo $val; ?> </li>
    <?php endfor; ?>
</div>