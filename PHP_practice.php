<?php
echo 'Hallo world';


$age = 18;
$judge = ($age > 18) ? '成人' : '子ども';
echo $judge;


$age = 18;
switch ($age){
  case 5:
    echo 'クソガキ';
  case 10:
    echo '1/2成人式';
  case 18:
    echo 'お酒飲めるよ';
  case 20:
    echo '成人式';
  default:
    echo '年より';
}

$gosanke = [
  [
    'ほのおタイプ' => 'ヒトカゲ', 
    'くさタイプ' => 'フシギダネ', 
    'みずタイプ' => 'ゼニガメ'
  ], 
  [
    'ほのおタイプ' => 'ヒノアラシ', 
    'くさタイプ' => 'チコリータ', 
    'みずタイプ' => 'ワニノコ'
  ], 
  [
    'ほのおタイプ' => 'ヒコザル', 
    'くさタイプ' => 'ナエトル', 
    'みずタイプ' => 'ポッチャマ'
  ] 
  ];

  foreach($gosanke as $x => $y){
    if ($x == 0){
      echo '●カントウ地方' . "\n";
    } elseif ($x == 1){
      echo '●ジョウト地方' . "\n";
    } elseif ($x == 2){
      echo '●シンオウ地方' . "\n";
    }
    echo $gosanke[$x]['ほのうタイプ'] . "\n" . $gosanke[$x]['くさタイプ'] . "\n" . $gosanke[$x]['みずタイプ'] . "\n";
  }



  function weak($targettype){
    $typelist = ['ほのお', 'くさ', 'みず'];
    if ($targettype === 'ほのお'){
      echo $targettype . 'の弱点は' . $typelist[2] . 'です。' . "\n";
    } elseif ($targettype === 'くさ'){
      echo $targettype . 'の弱点は' . $typelist[0] . 'です。' . "\n";
    } elseif ($targettype === 'みず'){
      echo $targettype . 'の弱点は' . $typelist[1] . 'です。' . "\n";
    } else {
      echo 'ggrks';
    }
  }

  weak('ほのお');

  class Pokemon
  {
    public $nameid;
    public $parsonalityid;

    public function __construct($name, $parsonality)
    {
      $this -> nameid = $name;
      $this -> parsonalityid = $parsonality;
    }

    public function skil($a, $b, $c, $d){
      echo 'わざ' . "\n" . $this -> $a . "\n" . $this -> $b . "\n" . $this -> $c . "\n" . $this -> $d;
    }

  
    }

    $coalP = new Pokemon('ヒトカゲ', 'しんちょう');
    echo 'なまえ：' . $coalP->nameid . "\n" . 'せいかく：' . $coalP->parsonalityid . "\n";
    $coalP -> skil('たいあたり', 'ひっかく', 'ひのこ', 'なきごえ');
    
    
    var_dump($coalP);



    //  public function sayP($skil_A, $skil_B, $skil_C, $skil_D)
    //  {
    //   echo '●なまえ：' . $this -> $nameid . "\n" . '●せいかく：' . $this -> $parsonalityid . '+----わざ----+' . "\n"  . '|' . $skil_A . '|' . "\n" . '|' . $skil_B . '|' . "\n". '|' . $skil_C . '|' . "\n" . "\n"  . '|' . $skil_D . '|' . '+----わざ----+' . "\n";
    //  }

    // echo 'なまえ：' . $coalP -> $nameid . "\n" . 'せいかく' . $coalP -> $parsonalityid;
    // $coalP -> sayP('たいあたり', 'ひのこ', 'しっぽをふる', 'なきごえ');


    $hamchans = [
      [
          'name' => 'ハム太郎',
          '鳴き声' => 'へけ',
          '一人称' => 'ぼく',
          '語尾' => 'なのだ',
      ],
      [
          'name' => 'リボンちゃん',
          '鳴き声' => 'は〜い',
          '一人称' => 'わたくし',
          '語尾' => 'でちゅわ',
      ],
      [
          'name' => 'タイショーくん',
          '鳴き声' => 'おっす',
          '一人称' => 'おいら',
          '語尾' => 'だじぇ',
      ],
  ];

  foreach($hamchans as $hamchan){
    echo $hamchan['鳴き声'] . "、" . $hamchan['一人称'] . "の名前は" . $hamchan['name'] . $hamchan['語尾'] . "\n";
  }


$email = 'torichan1207@gmail.com';
$FILTER_VALIDATE_EMAIL = ($email == '@gmail.com') ? 'メールアドレスOK' : 'メールアドレスの形式が正しくありません';
echo $FILTER_VALIDATE_EMAIL;

$email = "example@domain";
echo empty($email) ? "メールアドレスを入力してください" : (!filter_var($email, FILTER_VALIDATE_EMAIL) ? "メールアドレスの形式が正しくありません" : "メールアドレスOK");

$numbers = [10, 20, 30, 40];
$sum = NULL;
foreach($numbers as $tag => $num){
  $sum = $sum + $numbers[$tag];
}
echo $sum;

$scores = [45, 70, 55, 90, 100, 35];
$passed = array();
foreach($scores as $tag => $score){
  if ($scores[$tag] > 59){
    array_push($passed, $scores[$tag]);
  }
}

var_dump($passed);

$device = 'mac';
if($device === 'mac' || $device === 'windows'){
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}


class User
{
    protected $name;
    public $email;

    public function __construct($paramName, $paramEmail)
    {
        $this->name  = $paramName;
        $this->email = $paramEmail;
    }

    public function sayHi()
    {
        echo 'hi! my name is ' . $this->name;
    }
}

class JapaneseUser extends User
{
  public function JapaneseGreet()
    {
        echo 'こんにちは。';
    }

    public function sayHi()  // 同じメソッド名で定義し直す
    {
      echo 'やぁ!俺は' . $this->name . '!開発王になる男だ！';
    }
}


$suzuki = new JapaneseUser('suzuki', 'suzuki@example.com');
$bob = new User('bob', 'bob@example.com');

$suzuki->sayHi();    // 「やぁ！俺はsuzuki！開発王になる男だ！」が出力される
$bob->sayHi();  

$suzuki->JapaneseGreet();




$bob = new User('bob', 'bob@example.com');
echo $bob->email;





?>