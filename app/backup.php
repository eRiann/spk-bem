<!-- MANAJEMEN AKUN == FOTO BAWAH NO
<td width='50' class="text-center"><?php //echo $no; ?></td>-->

<?php
if ($data['foto'] == "") { ?>
    <td class="text-center"><img class='img-user' src='dist/img/user/user-default.png' width='45'></td>
<?php
} else { ?>
    <td class="text-center"><img class='img-user' src='dist/img/user/<?php echo $data['foto']; ?>' width='45'></td>
<?php
}
?>
<td class="center"><?php echo $data['nama']; ?></td>
<td class="center"><?php echo $data['username']; ?></td>
<td class="center"><?php echo $data['level']; ?></td>
<td class="text-center" width="150px"></td>