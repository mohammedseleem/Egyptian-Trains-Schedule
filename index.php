
<?php include_once "include/header.php" ?>

<?php
  require_once "core/Database.php";
  $stations = [
    "اسوان","اسيوط","الاسكندرية","الاسماعيلية",
    "البحر الاحمر","البحيرة","الجيزة","الدقهلية",
    "السويس","الشرقية","الغربية","الفيوم","القاهرة",
    "القليوبية","المنوفية","المنيا","الوادى الجديد",
    "بني سويف","بورسعيد","جنوب سيناء","دمياط","سوهاج",
    "شمال سيناء","قنا","كفر الشيخ","الاقصر","مطروح"
  ];

?>

<div class='content'>
	<div class='form-data'>
              <form id = 'form' action='trains.php' method='POST' align='center'>
              	    <input type='text' placeholder='محطة القيام...' onfocus="hideDestinationSearchBlock();sourceSearch()" onkeyup='sourceSearch()' required id='source' name='source' autocomplete="off" />
                    <div id='src-stations' class='src-stations'>
                    	<ul id='src-ul-stations'>
                            <?php
                              foreach($stations as $station)
                              {
                               	echo "<li class='src-station' onclick='getValueForSource(this)' >". $station ."</li>";
                              }

                            ?>
                        </ul>
                    </div>
                    <input type='text' placeholder='محطة الوصول...' onfocus="hideSourceSearchBlock();destinationSearch()" onkeyup='destinationSearch()' required id='destination'  name='destination' autocomplete="off" />
                    <div id='dest-stations' class='dest-stations'>
                      <ul id='dest-ul-stations'>
                            <?php
                              foreach($stations as $station)
                              {
                                echo "<li class='dest-station'  onclick='getValueForDestination(this)'>". $station ."</li>";
                              }

                            ?>
                        </ul>
                    </div>
                    <div class='logo'>
                          <div class='logo-items' onclick='showDegrees()'>
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>
                          <input type='text' value='عرض جميع الدرجات' onfocus="hideDestinationSearchBlock();hideSourceSearchBlock();" id='degree' name='degree' required autocomplete="off"/>
                    </div>
                    <div id='degrees'  class='degrees'>

                       <ul>
                            <li title='اخفاء' class='close' onclick="hideDegrees();hideDestinationSearchBlock();hideSourceSearchBlock();" >x</li>
                            <li title='عرض جميع الدرجات' class='degree' onclick="getValueForDegree(this)">عرض جميع الدرجات</li>
                            <li title='VIP' class='degree' onclick="getValueForDegree(this)">VIP</li>
                            <li title='مكيف' class='degree' onclick="getValueForDegree(this)">مكيف</li>
                            <li title='نوم' class='degree' onclick="getValueForDegree(this)">نوم</li>
                            <li title='اكسبريس' class='degree' onclick="getValueForDegree(this)">اكسبريس بعربيات مطورة (ركاب)</li>
                       </ul>
                    </div>

                    <input type='submit' name='submit' value='عرض القطارات' />
              </form>


        </div>
</div>

<?php include_once "include/footer.php" ?>
