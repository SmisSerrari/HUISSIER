<?php


if (isset($_POST["from_date"], $_POST["to_date"]))
{
	include("connextion.php");
	$output = '';
	$query = "
		SELECT * FROM tabligh
		WHERE tabdatetabligh BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'

	";
	$result = mysqli_query($conn, $query);
	$output .= "
				<table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>المرجع</th>
                                            <th>المحكمة</th>
                                            <th> نوع الاجراء</th>
                                            <th>رقم الملف</th>
                                            <th>طالب الاجراء</th>
											<th>النائب عنه</th>
                                            <th>المبلغ إليه</th>
											<th width="30%">العنوان</th>
                                            <th>الكاتب المحلف</th>
                                            <th>تاريخ السحب</th>
                                            <th>تاريخ السحب</th>
                                            <th>تاريخ  الارجاع</th>
                                            <th> تاريخ التبليغ </th>
											<th>اختيارات</th>
                                            
                                        </tr>


	";
	if(mysql_num_rows($result) > 0 )
	{

		while ($val = mysql_fetch_array($result)) 
		{
			$output .= '
				echo '<tr>';
						   echo '<td>';
							// ------------------------------------------
							// AFFICHAGE des DONNEES de la fiche
						   echo $val['idtab'];echo '</td>';
						   echo '<td>';
						   echo $val['tabtrubunal'];echo '</td>';
						   echo '<td>';
						   echo $val['tabgenre'];echo '</td>';
						   echo '<td>';
						   echo $val['tabnumdoss'];echo '</td>';
						   echo '<td>';
						   echo $val['tabavec'];echo '</td>';
						   echo '<td>';
						   echo $val['tabavoca'];echo '</td>';
						   echo '<td>';
						   echo $val['tabcontre'];echo '</td>';
						   echo '<td>';
						   echo $val['tabadress'];echo '</td>';
						   echo '<td>';
						   echo $val['tabclerc'];echo '</td>';
                           echo '<td>';
                           echo $val['tabdatejalsa'];echo '</td>';
						   echo '<td>';
						   echo $val['num_donne'];echo '</td>';                            
                           echo '<td>';
                           echo $val['num_encour'];echo '</td>';
                           echo '<td>';
                           echo $val['tabdatetabligh'];echo '</td>';
						   echo '<td>';
						   echo '<input type="checkbox" name="encour[]" value="'.$val['idtab'].'"/>';echo '</td>';
						   
						    echo '</tr>'; 

			';
		}
	}
	else
	{
		$output.= '
			<tr>
				<td colspan="5"> NO order found</td>
			</tr>

		';
	}
	$output .='</table>';
	echo $output;
}
?>