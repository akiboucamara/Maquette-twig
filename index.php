<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__.'/views');
$twig = new Environment($loader,[
    'cache' => false 
]);



$aliments = [
  ['id' => 0, 'plat' => 'Soupe veloutée de potimarron et pommes de terre', 'photo' => 'https://assets.afcdn.com/recipe/20220930/135573_w300h300c1cx1300cy824cxb2121cyb1414.webp', 'temps' => 45],
  ['id' => 1, 'plat' => 'Terrine de foies de volaille
    ', 'photo' => 'https://assets.afcdn.com/recipe/20190313/89351_w1280h972c1cx1055cy3594cxb3838cyb5755.webp', 'temps' => 50],
  ['id' => 2, 'plat' => 'Gratin Dauphinois', 'photo' => 'https://assets.afcdn.com/recipe/20201217/116563_w2000h1203c1cx1116cy671cxb2232cyb1342.webp'],
  ['id' => 3, 'plat' => 'Hachis Parmentier
    ', 'photo' => 'https://assets.afcdn.com/recipe/20201228/116812_w2000h1506c1cx997cy751cxb1995cyb1502.webp', 'temps' => 45],
  ['id' => 4, 'plat' => 'Couscous poulet et merguez facile
    ', 'photo' => 'https://assets.afcdn.com/recipe/20180621/79724_w2000h2667c1cx1944cy2592cxb3888cyb5184.webp', 'temps' => 1],
  ['id' => 5, 'plat' => 'Boeuf braisé aux carottes
    ', 'photo' => 'https://imgs.search.brave.com/xuNFBEr1JckoVDMNN5-RIENGl-UpFGGEopdI9d22QSg/rs:fit:1200:864:1/g:ce/aHR0cDovL2RlLnZp/bnMtcmhvbmUuY29t/L3NpdGVzL2RlZmF1/bHQvZmlsZXMvaGVy/by9yZWNpcGVzX2Jv/ZXVmLWJyYWlzZS1h/dXgtY2Fyb3R0ZXMu/anBn', 'temps' => 1],
  ['id' => 6, 'plat' => "Cuisse de canard à l'orientale", 'photo' => 'https://assets.afcdn.com/recipe/20200828/113366_w2000h1333c1cx2880cy1920cxb5760cyb3840.webp', 'temps' => 1],
  ['id' => 7, 'plat' => 'Osso bucco milanaise', 'photo' => 'https://assets.afcdn.com/recipe/20180827/81938_w1280h972c1cx3608cy2706cxb7216cyb5412.webp', 'temps' => 1],
  ['id' => 8, 'plat' => "Tajine d'agneau aux pruneaux", 'photo' => 'https://assets.afcdn.com/recipe/20181017/82766_w2000h2667c1cx1834cy2446cxb3669cyb4892.webp', 'temps' => 1],
  ['id' => 9, 'plat' => "Souris d'agneau caramélisées", 'photo' => 'https://assets.afcdn.com/recipe/20180209/77486_w1280h972c1cx2329cy1565cxb4659cyb3130.webp', 'temps' => 3],
  ['id' => 10, 'plat' => 'Curry de lotte au lait de coco
    ', 'photo' => 'https://assets.afcdn.com/recipe/20180209/77484_w1280h972c1cx2464cy1632cxb4928cyb3264.webp', 'temps' => 40],

];

        $page = isset($_GET['page']) ? $_GET['page'] :null;

        switch($page){
            case 'accueil':
                echo $twig->render('index.html.twig',[
                    'aliments' => $aliments

                ]);
                break;

                   case 'details':
                    echo $twig->render('detail.html.twig',[
                        'aliments' => $aliments,
                        'id' => $_GET['id']
                    ]);
                    break;

                    case 'ajouter':
                      echo $twig->render('ajouter.html.twig');
                      break;
                  case 'showMessage':
                      echo $twig->render('showMessage.html.twig', [
                          'array' => $_POST
                     ]);
                     break;

                     case 'display' :
                      echo $twig->render('display.html.twig',[
                        'array' => $_POST
          
                      ]);
                      break;
                    default:
                        echo $twig->render('index.html.twig',[
                            'aliments' => $aliments
                        
                        ]);
                        break;
                        
        }


