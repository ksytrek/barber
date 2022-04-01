<?php
include_once("./nabar.php");
?>

<section class="home">
    <div class="text">
        จัดการข้อมูลช่าง
    </div>
    <div class="container">
        <table class="table table-striped " id="example">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อบริการ</th>
                    <th>ราคา</th>
                    <th>เวลาให้บริการ</th>
                    <th><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#add_services" data-bs-whatever="@mdo">เพิ่มบริการ</a></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = null;
                $sql_search = "SELECT * FROM `hairstyle` WHERE status != 0";
                foreach (Database::query($sql_search, PDO::FETCH_OBJ) as $row) :
                    ++$i;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->name_style ?></td>
                        <td><?php echo $row->price_style ?></td>
                        <td><?php echo $row->time_ok ?></td>
                        <td>
                            <?php
                            $btn = "";
                            if ($row->name_style == 'ไม่ขอเลือกบริการ') {
                            } else {

                                $btn = "<button type='button' onclick='link($row->id_style)' class='btn btn-warning btn-sm'>แก้ไข</button> <button type='button' onclick='delete_services($row->id_style)' class='btn btn-danger btn-sm'>ลบ</button>";
                            }
                            echo $btn;
                            ?>
                        </td>

                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</section>
<div class="modal fade" id="add_services" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มบริการ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-addServices" action="javascript:void(0)" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">ชื่อบริการ</label>
                        <input type="text" class="form-control" name="name_style">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">ราคา</label>
                        <input type="number" min="0" class="form-control" name="price_style">

                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">เวลาให้บริการ</label>
                        <input type="number" min="0" class="form-control" name="time_ok">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">เพิ่มบริการ</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#example").DataTable();
    });
</script>
<?php
include_once("./footer.php")
?>