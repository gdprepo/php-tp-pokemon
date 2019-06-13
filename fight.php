<?php
include_once ('./usable.php');

include_once ('./pokemon.php');
include_once ('./carapuce.php');
include_once ('./salameche.php');
include_once ('./bulbizarre.php');

include_once ('./heal.php');
include_once ('./potion.php');
include_once ('./superpotion.php');
include_once ('./hyperpotion.php');
include_once ('./potionmax.php');

include_once ('./ball.php');
include_once ('./pokeball.php');
include_once ('./superball.php');
include_once ('./hyperball.php');
include_once ('./masterball.php');

include_once ('./bot.php');


echo "Vous invoquez Carapuce\n";
$carapuce = new Carapuce(5);

echo "Vous invoquez Salameche\n";
$enemie = new Salameche(8);


$bag = [];
$bag[] = new Potion();
$bag[] = new Potion();
$bag[] = new SuperPotion();
$bag[] = new Pokeball();
$bag[] = new Pokeball();
$bag[] = new Pokeball();

$bot = new Bot($carapuce, $salameche, $bag);

echo"\n";
echo"\n";
echo "Début du combat !\n";
echo "-----------------\n";
echo "\n";

$my_turn = (bool) rand (0,1);

$end = false;
while (!$end) {
        if ($my_turn == 0) {
                echo 'C est a votre tour de jouer ';
                $pokeball = $bot->search_in_bag($bag, "Pokeball");
                $bot->check_capture($enemie, $pokeball);
                $bot->check_heal($enemie, $carapuce);
                $carapuce->attaque($enemie);
                if ($carapuce->life <= 0) {
                        echo "Carapuce est mort";
                        $end = true;
                } elseif ($enemie->life <= 0) {
                        echo "Enemie est mort !";
                        $end = true;
                }

        } else {
                echo 'C est au tour de l ennemie ';
                $pokeball = $bot->search_in_bag($bag, "Pokeball");
                $bot->check_capture($carapuce, $pokeball);
                $bot->check_heal($carapuce, $enemie);
                $carapuce->attaque($carapuce);
                if ($carapuce->life <= 0) {
                        echo "Carapuce est mort";
                        $end = true;
                } elseif ($enemie->life <= 0) {
                        echo "Enemie est mort !";
                        $end = true;
                }

        }

}

