<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>id</th>
		<th>Title</th>
		<th>Action</th>
		<th>Created</th>
	</tr>

	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id'] ?></td>
		<td>
			<?php
			echo $this->Html->link($post['Post']['title'],
				array('controller' => 'posts',
					  'action' => 'view',
					  $post['Post']['id'])
				); ?>
		</td>
		<td>
			<?php
			echo $this->Html->link(
				'Edit',
					   array('action' => 'edit',
					   $post['Post']['id'])
				); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>