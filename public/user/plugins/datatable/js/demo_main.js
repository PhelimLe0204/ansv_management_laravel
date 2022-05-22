/* var dataSet = [
		{
		  "id": "1",
		  "project_name": "Dự án 1",
		  "customer": "Khách hàng 11",
		  "priority": "Một",
		  "pic": "PIC 111",
		  "tinh_trang": "- Tình trạng này rất chi là tình trạng!<br>- Tình trạng này là toang rồi đấy!",
		  "ke_hoach": "- Kế hoạch này thật chi tiết!<br>- Kế hoạch này hiệu quả đấy!"
		},
	    
	]; */

/* Formatting function for row details - modify as you need */
function format(d) {
	// `d` is the original data object for the row
	return '<table cellpadding="5" cellspacing="0" border="0" style="margin-left: 4%; width: 96%;">' +
		'<tr>' +
		'<td align="center" style="border-right: 2px solid gray; width: 50%;"><b>Tình trạng</b></td>' +
		'<td align="center"><b>Kế hoạch</b></td>' +
		'</tr>' +
		'<tr>' +
		'<td style="border-right: 2px solid gray;">' + d.general_issue + '</td>' +
		'<td>' + d.ke_hoach + '</td>' +
		'</tr>' +
		'</table>';
}
