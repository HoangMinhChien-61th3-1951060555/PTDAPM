<?php 
	//load file layout vao day
	self::$fileLayout = "LayoutView.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary">Thêm thành viên</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách thành viên</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->email; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=users&action=update&id=<?php echo $rows->id ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
            	<li class="page-itemn"><a href="#" class="page-link">Trang</a></li>
            	<?php for($i= 1; $i <= $numPage; $i++): ?>
            		<li class="page-itemn"><a href="index.php?controller=users&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            	<?php endfor; ?>
            </ul>
        </div>
    </div>
</div>