<?php include "common/menuPart.php"; ?>

<?php if ($cities == NULL || empty($cities)): ?>
    <p>Nincs rögzítve egyetlen város sem!</p>
<?php else: ?>
    <?php
    echo "<div class=\"text-center\"> ";
    echo "<button type=\"button\" onclick=\"location.href = 'cities/insert';\" class=\"btn btn-success\">Új hozzáadása</button>";
    echo "<button type=\"button\" onclick=\"location.href = 'cities/exportAsCsv/';\" class=\"btn btn-primary\">Városok adatainak exportálása csv-be</button>";
    echo "</div>";
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>ZIP Code</th>
                <th>Kép</th>
                <th>Műveletek</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($cities as &$cit): ?>
                <tr>
                    <td><?= $cit->id ?></td>
                    <td><?= $cit->name ?></td>
                    <td><?= $cit->postal_code ?></td>
                    <?php
                    $imageFileName = 'uploads/'.$cit->id . '.jpg';

                    if (file_exists($imageFileName)) {
                        echo "<td><img src=\"$uploads_url/$cit->id.jpg\" width=\"320\" height=\"240\"></td>";
                    } else {
                        echo "<td><img src=\"$uploads_url/unknown.jpg\" width=\"320\" height=\"240\"></td>";
                    }
                    ?>
                    <td>
                        <?php echo anchor(base_url('cities/edit/' . $cit->id), 'Módosítás'); ?>
                        <?php echo anchor(base_url('cities/delete/' . $cit->id), 'Törlés'); ?>                       
                    </td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
