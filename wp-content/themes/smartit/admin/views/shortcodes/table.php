<div id="table_<?php echo $google_chart_id; ?>" style="width: 100%; height: auto;" class="custom-table"></div>
<script type='text/javascript'>google.load('visualization', '1', {packages:['table']});google.setOnLoadCallback(<?php echo "drawTable_" . $google_chart_id; ?>);function <?php echo "drawTable_" . $google_chart_id; ?>(){var data = new google.visualization.DataTable();
<?php if (!empty($heading)): ?><?php foreach ($heading as $key => $value):$data = explode(':', $value); ?>data.addColumn('<?php echo $data[0] ?>', '<?php echo @$data[1] ?>');<?php endforeach; ?><?php endif; ?>data.addRows([<?php if (!empty($content)): ?><?php foreach ($content as $key => $value):$data = explode('~', $value); ?>[<?php echo $value ?>],<?php endforeach; ?><?php endif; ?>]);var table = new google.visualization.Table(document.getElementById('table_<?php echo $google_chart_id; ?>'));table.draw(data, {showRowNumber: <?php echo $show_row_number; ?>});}</script>
