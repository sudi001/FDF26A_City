<?php
$this->load->library('ion_auth');
$username = $this->session->userdata('email');
echo "Jelnlegi felhasználó: " . $username . " ";
echo "<a href=\"auth/logout\">Kijelentkezés</a>";
echo "<br>";
?>

<?php echo anchor(base_url('cities/insert'), 'Új hozzáadása'); ?>
<?php echo "<br>" ?>



<?php if ($cities == NULL || empty($cities)): ?>
    <p>Nincs rögzítve egyetlen város sem!</p>
<?php else: ?>
    <?php echo anchor(base_url('cities/exportAsCsv/'), 'Export as csv'); ?>
    <table>
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
                    <td><img src="uploads/<?= $cit->id ?>.jpg" width="320" height="240"></td>
                    <td>
                        <?php echo anchor(base_url('cities/edit/' . $cit->id), 'Módosítás'); ?>
                        <?php echo anchor(base_url('cities/delete/' . $cit->id), 'Törlés'); ?>
                    </td>
                    
                    <!--td>
                        <!--?php
                        echo file_get_contents("application/views/cities/upload.html");
                        ?>
                    </td-->
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
