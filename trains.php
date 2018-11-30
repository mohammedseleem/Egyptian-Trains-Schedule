<?php include_once "include/header.php" ?>

<?php
     require_once "core/Database.php";
     if(isset($_POST['submit']))
     {
        $source = $_POST['source'];
        $destination = $_POST['destination'];
        $degree = $_POST['degree'];
        $stations = [
            "اسوان","اسيوط","الاسكندرية","الاسماعيلية",
            "البحر الاحمر","البحيرة","الجيزة","الدقهلية",
            "السويس","الشرقية","الغربية","الفيوم","القاهرة",
            "القليوبية","المنوفية","المنيا","الوادى الجديد",
            "بني سويف","بورسعيد","جنوب سيناء","دمياط","سوهاج",
            "شمال سيناء","قنا","كفر الشيخ","الاقصر","مطروح"
        ];


        $degrees = [
            'عرض جميع الدرجات',
            'VIP',
            'مكيف',
            'نوم',
            'اكسبريس بعربيات مطورة (ركاب)'
        ];
        
        $errors =[];

        if(!in_array($degree, $degrees))
        {
            $errors[] = 'درجة القطار غير صحيحة';
        }
        if(!in_array($source, $stations))
        {
            $errors[] = 'محطة القيام غير صحيحة';
        }
        if(!in_array($destination, $stations))
        {
            $errors[] = 'محطة الوصول غير صحيحة';
        }
        if($source == $destination)
        {
            $errors[] = "";
        }

        if(!count($errors))
        {
            
            if($degree === "عرض جميع الدرجات")
            {
                $query = "SELECT * FROM trains WHERE source_station = ? AND destination_station = ?";
                $trains = $database->getManyObj($query,[$source,$destination]);
            }
            else
            {
                $query = "SELECT * FROM trains WHERE source_station = ? AND destination_station = ? AND degree = ?";
                $trains = $database->getManyObj($query,[$source,$destination,$degree]);
            }

        }
     }
     else
     {
        header('location:index.php');
     }
?>

<div class='trains'>
	<div class='head'>
        <?php

            if(!count($errors))
            {
                if(!count($trains))
                {
                   echo "<h3>عذرا لا يوجد قطار من محطة " . $source . " ل " . $destination . "</h3>";
                }
                else
                {
                   echo "<h3>من " .  $source . " ل " . $destination . " يوجد " . count($trains) . " قطار</h3>";
                }
            }
            else
            {
                echo "<ul>";
                foreach($errors as $error)
                {
                    echo "<li>" . $error . "</li>";
                }
                echo "</ul>";
            }

        ?>
    </div>
    <?php
        if(!count($errors) && count($trains))
        {
    ?>
            <table cellspacing="3px">
            	<thead>
            	    <th><span>القطار #</span></td>
                    <th><span>قيام</span></td>
                    <th><span> وصول</span></td>
                    <th><span>المدة</span></td>
                    <th><span>السرعة</span></td>
                    <th><span>الدرجة</span></td>
                </thead>
                <tbody>
                <td colspan='6' style='padding:20px 0;'>
                <span style='color:#D8443C;font-size:18px'> ملاحظة</span>
                                       يمكنك معرفة محطات الوقوف الى ستمر عليها فى القطار عن طريق اللمس
                </td>
                	<?php
                    
                    	if(count($trains))
                            {
                                
                            	foreach($trains as $train)
                                    {
                    ?>
    	            	          <tr>
                                     
    		            	    	<td><?php echo $train->number ?></td>
    		                    	<td><?php echo $train->moving ?></td>
    		                        <td><?php echo $train->arriving ?></td>
    		                        <td><?php echo $train->period ?></td>
    		                        <td><?php echo $train->speed ?> كم/س</td>
    		                        <td><?php echo $train->degree ?></td>
    		                  </tr>
                    <?php
                    		}
                    	}
                    ?>
                    </tbody>
            </table>
    <?php
        }
    ?>

</div>

<?php include_once "include/footer.php" ?>
