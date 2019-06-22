<?php
include('header.php');
?>
<?php 
print_r($articles);
?>
<div class="container" style="margin-top:20px;">
<div class="table">
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Article Title</th>
        <th>Edit</th>
        <th>Delete</th>
     </tr>
    </thead>
    <tbody>
    <?php if(count($articles)): ?>
    <?php 
    foreach ($articles as $art) : ?>
<tr>
    <td>1</td>
    <td><?php echo $art->article_title;  ?></td>
    <td><a href="#" class="btn btn-primary">Edit</a></td>
    <td><a href="#" class="btn btn-danger">delete</a></td>
   </tr>
<?php endforeach; ?>
<?php else:  ?> 
<tr>
<td colspan="3">Not Data Available

</td>
</tr>
<?php endif; ?>
</tbody>
  </table>
</div>
</div>
<?php 
include('footer.php');?>