<!doctype html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>黃金分割率-"回檔"計算</title>
    <!-- head -->
    <?php include_once '../head.php'; ?>
</head>

<body background="<?php echo 'http://'.$_SERVER['HTTP_HOST'];?>/images/images.jpg">

	<center>
<br>
<img src="https://ism.bwnet.com.tw/image/pool/sm/2014/11/cd97b090b3e6cc1392777c193c9b8f74.jpg">
<br>
圖片&資料來源:<a href="https://smart.businessweekly.com.tw/Reading/WebArticle.aspx?id=56480&p=2" target="_blank">
https://smart.businessweekly.com.tw/Reading/WebArticle.aspx?id=56480&p=2</a>
<br>
<h3><a href="golesprebound.php" target="_blank">反彈計算</a></h3>
<!--插入表格作為計算的載體-->
<h2><label>黃金分割率-<font color="red">回檔</font>計算</label></h2>

 <form action="" method="POST">
   <table align="center" border="1">
    <tr>
	<td><label>高點：</label>
	<input type="text" size="10" name="st_hight" id="st_hight" value=""/></td>
    <td><label>低點：</label>
	<input type="text" size="10" name="st_low" id="st_low" value=""/></td>
	</tr>
	<tr>
    <td colspan="2" align="center"><input type="submit" name="sub" id="sub" value="計算"></td>
	</tr>
   </table>
 </form>
 <br>
 <?php 
if(!isset($_POST['sub'])){ 
 
}elseif(isset($_POST['sub'])){ 
 	$st_hight   = $_POST['st_hight'];
	$st_low     = $_POST['st_low'];
?>
<h4><label>A派計算法<br>
(適用於新股上市前5天、小型飆股，以及創歷史新低價個股的回檔修正)</label></h4>
<br>
目標價1
 <?php 
 $st_re0809 = $st_hight*0.809;
 echo $st_hight. '×0.809＝<font color="red">' .$st_re0809 . '</font>';
 ?>
<br>
目標價2
 <?php 
 $st_re0618 = $st_hight*0.618;
 echo $st_hight. '×0.618＝<font color="red">' .$st_re0618 . '</font>';
 ?>
<br>
目標價3
 <?php 
 $st_re05 = $st_hight*0.5;
 echo $st_hight. '×0.5＝<font color="red">' .$st_re05 . '</font>';
 ?>
<br>
目標價4
 <?php 
 $st_re0382 = $st_hight*0.382;
 echo $st_hight. '×0.382＝<font color="red">' .$st_re0382 . '</font>';
 ?>
<br>
目標價5
 <?php 
 $st_re0191 = $st_hight*0.191;
 echo $st_hight. '×0.191＝<font color="red">' .$st_re0191 . '</font>';
 ?>
<br>
<hr>
<h4><label>B派計算法<br>
(適用於一般上市櫃個股)</label></h4>
<?php 
$st_re1 = $st_hight - $st_low;
?>
<h5>最高點 <?php echo $st_hight ?> - 最低點 <?php echo $st_low ?>＝<?php echo $st_re1 ?></h5>
<br>
超強勢整理0.191倍：<br>
<!-- PHP開始輸出結果，注意一定是在表單外！-->
 <?php 
$st_re1 = $st_hight - $st_low;
$st_re191 = $st_hight - ($st_re1*0.191);	

echo $st_hight. '－〔（' .$st_hight. '－' .$st_low. '）×0.191〕＝' .$st_hight. '－〔' .$st_re1. '×0.191〕＝<font color="red">' .$st_re191. '</font>'; ?>
<!-- 50元－〔（50元－20元）×0.191〕＝50元－〔30元×0.191〕
＝44.27元（超強勢整理目標價） -->
<br><br>
強勢整理0.382倍：<br>
<?php
$st_re382 = $st_hight - ($st_re1*0.382);	

 echo $st_hight. '－〔（' .$st_hight. '－' .$st_low. '）×0.382〕＝' .$st_hight. '－〔' .$st_re1. '×0.382〕＝<font color="red">' .$st_re382. '</font>'; ?>
<!-- 50元－〔（50元－20元）×0.382〕＝50元－〔30元×0.382〕
＝38.54元（強勢整理目標價） -->
<br><br>
中度整理0.5倍：<br>
<?php
$st_re5 = $st_hight - ($st_re1*0.5);	
	
 echo $st_hight. '－〔（' .$st_hight. '－' .$st_low. '）×0.5〕＝' .$st_hight. '－〔' .$st_re1. '×0.5〕＝<font color="red">' .$st_re5. '</font>'; ?>
<!-- 50元－〔（50元－20元）×0.5〕＝50元－〔30元×0.5〕
＝35元（中度整理目標價） -->
<br><br>
弱勢整理0.618倍：<br>
<?php
$st_re618 = $st_hight - ($st_re1*0.618);	
	
 echo $st_hight. '－〔（' .$st_hight. '－' .$st_low. '）×0.618〕＝' .$st_hight. '－〔' .$st_re1. '×0.618〕＝<font color="red">' .$st_re618. '</font>'; ?>
<!-- 50元－〔（50元－20元）×0.618〕＝50元－〔30元×0.618〕
＝31.46元（弱勢整理目標價） -->
<br><br>
超弱勢整理0.809倍：<br>
<?php
$st_re809 = $st_hight - ($st_re1*0.809);	
	
 echo $st_hight. '－〔（' .$st_hight. '－' .$st_low. '）×0.809〕＝' .$st_hight. '－〔' .$st_re1. '×0.809〕＝<font color="red">' .$st_re809. '</font>'; 
}
 ?>
<!-- 50元－〔（50元－20元）×0.809〕＝50元－〔30元×0.809〕
＝25.73元（超弱勢整理目標價） -->
<hr>

<?php
//https://mnya.tw/cc/word/080.html
$cnt=file("man-golesp.txt"); /* 將count.txt檔案內容讀入，資料型態為陣列 */
$cnt[0]++;//累計加1
$cnt_id=fopen("man-golesp.txt","w"); /* 將count.txt檔案開啟，函數參數為w */
fputs($cnt_id,$cnt[0]); /* 將新的計數寫入 */
fclose($cnt_id); //關閉檔案
echo "瀏覽人數 (".$cnt[0].")";
?>
<br>
2021.01
</center>

<!-- 頁尾 -->
<script src="https://www.ugm.com.tw/tncomu/js/bootstrap.min.js"></script>
</body>
</html>
