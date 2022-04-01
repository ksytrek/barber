<?php
include_once("./nabar.php");
?>

<section class="home">
    <div class="text">จัดการจองคิว</div>
    <!-- ส่วนต่าราง -->
    <div class="container">

        <table class="table table-striped " id="example">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>บริการ</th>
                    <th>ช่าง</th>
                    <th>วันที่</th>
                    <th>ตัวเลือก</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                $sql_search = "SELECT *,DATE_FORMAT(re.dateTime_reserve, '%H:%i %W %M %e %Y') as data_ FROM `reserve` as re INNER JOIN hairstyle as hstly ON hstly.id_style = re.id_style INNER JOIN hairdresser as hser ON hser.id_hai = re.id_hai WHERE re.id_user = '$ID';";
                foreach (Database::query($sql_search,PDO::FETCH_OBJ) as $row) :
                    $i = 1 ;
            ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td>Otto@gmail.com</td>
                    <td><?php echo $row->data_?></td>
                    <td>11:00</td>
                </tr>
            <?php 
            $i++;
            endforeach;
            ?>
            </tbody>
        </table>

    </div>


</section>
<script>
    $(document).ready(function() {
        $("#example").DataTable();
    });
</script>
<?php
include_once("./footer.php");
?>