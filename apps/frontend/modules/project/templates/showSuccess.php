<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $project->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $project->getName() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $project->getUrl() ?></td>
    </tr>
    <tr>
      <th>Header:</th>
      <td><?php echo $project->getHeader() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $project->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $project->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('project/edit?id='.$project->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('project/index') ?>">List</a>
