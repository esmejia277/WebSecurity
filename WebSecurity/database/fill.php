<?php
include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';

include_once 'app/User.inc.php';
include_once 'app/Entry.inc.php';
include_once 'app/Comment.inc.php';

include_once 'app/RepoUser.inc.php';
include_once 'app/RepoEntry.inc.php';
include_once 'app/RepoComment.inc.php';

Connection :: OpenConnection();

function random($long){
  $cha = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $number = strlen($cha);
  $ram = '';

  for ($i=0; $i < $long; $i++) {
    $ram .= $cha[rand(0, $number - 1)];
  }
  return $ram;

}

for($i = 0 ; $i < 100 ; $i++) { //user data insert
  $name = random(10);
  $email = random(5) . '@' . random(3);
  $passw = password_hash('123456', PASSWORD_DEFAULT);
  $user = new User('', $name, $email , $passw, '', '');
  RepoUser :: UserInsert(Connection::getConnection(), $user);
}

for ($i=0; $i < 100; $i++) { //entry data insert
  $title = random(10);
  $text = lorem();
  $author = rand(1,100);

  $entry = new Entry('', $author, $title, $text, '', '');
  RepoEntry :: EntryInsert(Connection :: getConnection(), $entry);
}

function lorem(){
  $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis mattis dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce massa nisl, fermentum sed tincidunt nec, fermentum at diam. Etiam nec purus tristique, finibus lectus vitae, ullamcorper augue. Curabitur turpis purus, blandit nec consequat quis, scelerisque ac neque. Vivamus vehicula vitae ante sit amet venenatis. Suspendisse gravida sem a ultricies gravida. Fusce volutpat nulla a ullamcorper congue. Sed nec auctor tellus. Vestibulum faucibus pellentesque ultrices. Quisque laoreet tortor nec felis suscipit bibendum. Maecenas ultrices mattis venenatis.

  Nunc vestibulum ultrices dignissim. Nulla tincidunt nisi et enim consectetur aliquam. Nam tempor tempor neque, vel scelerisque velit vestibulum sed. Sed placerat, lacus sit amet aliquet varius, nisl neque auctor neque, a faucibus neque tortor quis urna. Suspendisse id imperdiet ligula. Curabitur nibh mi, vulputate ac enim eu, commodo tincidunt nisl. Nulla eu varius dui. Nam nec nisl fringilla, pellentesque est ut, aliquam purus.

  Donec eu laoreet dui, at finibus risus. Pellentesque fermentum, lorem id fermentum auctor, est sapien ullamcorper enim, gravida euismod elit massa in eros. Suspendisse in nibh nisl. Praesent mattis a ante sed tempus. Ut ut porta quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent in vulputate mi, at finibus nulla. Nullam feugiat ac tellus sed euismod. Donec fringilla elit blandit aliquam efficitur. Quisque sed velit quis libero consectetur aliquet vel convallis ex. Morbi luctus odio dui.

  Morbi commodo ante orci, sed condimentum felis vestibulum vitae. In hac habitasse platea dictumst. Pellentesque feugiat quam sed orci fermentum, nec porta libero ultrices. Curabitur auctor purus purus, quis pellentesque metus dictum et. Quisque lacinia sollicitudin purus ac tincidunt. Donec id felis nisl. Donec id erat luctus, vulputate libero gravida, pharetra elit. Curabitur accumsan vitae nisi eleifend facilisis. Suspendisse potenti. Nam egestas nec dui et lacinia. In tellus nisl, vehicula et nisl ac, consequat cursus tortor. Donec ligula nisl, imperdiet sed leo eu, sodales gravida felis.

  Nam eleifend pharetra magna id convallis. Nunc at sem suscipit nibh tincidunt porta sed eu nulla. Fusce fringilla dictum dictum. Donec ac malesuada massa. Maecenas elit velit, hendrerit facilisis orci quis, faucibus malesuada ligula. Proin venenatis elementum congue. Pellentesque ex sapien, eleifend in pharetra quis, auctor non lorem. Mauris vitae hendrerit lorem. Nulla iaculis laoreet suscipit. Vivamus eu ex libero. Proin ullamcorper tellus at urna feugiat pretium.";
  return $string;
}

for ($i=0; $i < 100; $i++) { //entry data insert
  $title = random(10);
  $text = lorem();
  $author = rand(1,100);
  $entry = rand(1,100);

  $comment = new Comment('', $author, $entry, $title, $text, '');
  RepoComment :: CommentInsert(Connection :: getConnection(), $comment);
}
