<div>

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>N°</th>
      <th>club</th>
    </tr>
  </thead>
  <tbody><?php $i=0;?>
    <?php foreach ($viewmodel as $item):?>
    <tr>
      <th scope="row"><?php $i++; echo $i; ?></th>
      <td><?php echo $item['name'] ?></td>
      <td><?php echo $item['email'] ?></td>
      <td><?php echo $item['numero'] ?></td>
      <td><?php echo $item['club'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
