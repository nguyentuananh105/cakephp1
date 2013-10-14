<!-- File: index -->
<h1>Blog posts </h1>
<?
echo $this->Html->link('Add Post',
array('controller' => 'posts','action' => 'add'));
?>
<table>
	<tr>
	 <th>Id</th>
	 <th>Title </th>
	 <th> Action</th>
	 <th>Created </th>
	</tr>
 
<? foreach ($posts as $post):?>
<tr>
 <td> <?php echo $post['Post']['id']; ?> </td>
 <td>
  <?php echo $this->Html->link($post['Post']['title'],
  array('controller'=> 'post','action'=> 'view', $post['Post']['id'])); ?>
 </td>
<td>
<? echo $this->Form->postLink(
	'Delete',
	array('action' => 'delete',$post['Post']['id']),
	array('confirm' => 'Are you sure?'));
?>
  <?php echo $this->Html->link('Edit',array('action'=> 'edit', $post['Post']['id'])); ?>
 </td>

 <td><? echo $post['Post']['created']; ?></td>
</tr>
<? endforeach ?>
<? unset($post);?>
</table>
