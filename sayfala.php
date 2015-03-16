<?php
########################
## www.nefret.org
########################

## Sponsored by : iyinet.com
?>

<style type="text/css">
ul.sayfala{
list-style: none;
padding:0;
margin:0;
}
ul.sayfala li a{
  text-decoration: none;
  padding: 3px 10px;
  color: #fff;
  background: <?=$renk?>;
  display: block;
  float: left;
  width: 28px;

  border: 1px solid #efefef;
  border-right: 1px solid #dfdfdf;
  border-bottom: 1px solid #dfdfdf;
  margin-right: 4px;
  margin-top: 3px;
  text-align: center;
  min-height: 17px;
  font-size: 20px;
}
ul.sayfala li a:hover{
border:solid 1px;
  background: #555;

}

ul.sayfala li.active{
  text-decoration: none;
  padding: 3px 10px;
  color: #fff;
  background: #555;
  display: block;
  float: left;
  width: 28px;
  border: 1px solid #333;
  border-right: 1px solid #dfdfdf;
  border-bottom: 1px solid #dfdfdf;
  margin-right: 2px;
  margin-top: 3px;
  text-align: center;
  min-height: 17px;
  font-size: 20px;
}

</style>

<?php
function sayfala($toplam, $limit, $adres, $sayfa,$ek){
$adet = ceil($toplam/$limit);
if($sayfa>$adet){
echo '<script>location="'.$adres.'1'.$ek.'";</script>';
exit();
$sayfa = 1;
}
if($sayfa<1){
$sayfa = 1;
}
if($adet==1){
$ilk = '<li class="active">1</li>';
}elseif($adet>1){

if($sayfa==1){
$ilk = '
<li class="active">1</li>
<li><a href="'.$adres.'2'.$ek.'">2</a></li>
';
}elseif($sayfa==2){
$ilk = '
<li><a href="'.$adres.'1'.$ek.'">1</a></li>
<li class="active">2</li>
';
}else{
$ilk = '
<li><a href="'.$adres.'1'.$ek.'">1</a></li>
<li><a href="'.$adres.'2'.$ek.'">2</a></li>
';
}
}
if($adet-2 >= 5){
$cur = $sayfa+2;
if($cur<=$adet){

if($sayfa>4){
if($cur>=$adet){
$h = '';
for($i=$sayfa-4;$i<$sayfa+1;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}else{
if($cur+1>=$adet){
$h = '';
for($i=$sayfa-3;$i<$sayfa+2;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}else{
$h = '';
for($i=$sayfa-2;$i<$sayfa+3;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}	
}
}
}elseif($sayfa==2){
$h = '';
for($i=$sayfa+1;$i<$sayfa+6;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}	
}elseif($sayfa==3){
$h = '';
for($i=$sayfa;$i<$sayfa+5;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}

}elseif($sayfa==1){
$h = '';
for($i=$sayfa+2;$i<$sayfa+7;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}	
}elseif($sayfa==4){
$h = '';
for($i=$sayfa-1;$i<$sayfa+4;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}
}else{
if($sayfa>6){
if($sayfa>=$adet-4){
$h = '';
for($i=$adet-6;$i<$adet-1;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}else{
$h = '';
for($i=$sayfa-3;$i<$adet-1;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}	
}else{
$h = '';
for($i=$sayfa-3;$i<$adet-1;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}
}
}else{
$h = '';
for($i=3;$i<$adet-1;$i++){
if($sayfa==$i){
$h .= '<li class="active">'.$i.'</li>'; 	
}else{
$h .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}

}
$orta = $h;

if($adet==3){

$n = '';
for($i=$adet;$i<$adet+1;$i++){
if($sayfa==$i){
$n .= '<li class="active">'.$i.'</li>'; 	
}else{
$n .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}elseif($adet>3){
$n = '';
for($i=$adet-1;$i<$adet+1;$i++){
if($sayfa==$i){
$n .= '<li class="active">'.$i.'</li>'; 	
}else{
$n .= '<li><a href="'.$adres.''.$i.''.$ek.'">'.$i.'</a></li>';
}
}
}else{
$n = '';	
}
$son = $n;
if($sayfa<=1){
$geri = 1;
}else{
$geri = $sayfa-1;
}
if($sayfa>=$adet){
$ileri = $adet;
}else{
$ileri = $sayfa+1;
}
$left = '<li class="geri"><a href="'.$adres.''.$geri.''.$ek.'">&laquo;</a></li>';
$right = '<li class="geri"><a href="'.$adres.''.$ileri.''.$ek.'">&raquo;</a></li>';
$baslik = '<ul class="sayfala">';
$sayfala = '';
$sayfala .= $baslik;
$sayfala .= $left;
$sayfala .=  $ilk;
$sayfala .= $orta;
$sayfala .= $son;
$bitis = '</ul>';
$sayfala .= $right;
$sayfala .= $bitis; 
return $sayfala;
}
?>
