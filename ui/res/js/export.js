$(document).ready(function()
{
	$(".tests-export").click(function(event) 
	{
		var workbook = XLSX.utils.book_new();
		
		event.preventDefault();
		$("table").each(function( index ) 
		{
			var data = $(this).tableToJSON(
			{
				ignoreHiddenRows: false,
				extractor : {
					4: function(index, $cell)
					{
						var selectBox = $cell.find("select");
						var value = selectBox.find(":selected").text();
						return value == "N/A" ? "" : value;
					}
				}
			});
			var sheet = XLSX.utils.json_to_sheet(data);
			sheet['!cols'] = [
				{wch: 20},
				{wch: 30},
				{wch: 30},
				{wch: 30},
				{wch: 15}
			];
			
			sheet["!margins"]= 
			{
				left:0.7, 
				right:0.7, 
				top:0.75,
				bottom:0.75,
				header:0.3,
				footer:0.3
			};
			
			var sheetName = $(this).attr("data-sheet");
			XLSX.utils.book_append_sheet(workbook, sheet, sheetName);
		});
		
		var d = new Date();
		d = ('0' + d.getHours()).slice(-2) + ('0' + d.getMinutes()).slice(-2) + ('0' + d.getSeconds()).slice(-2);
	
		XLSX.writeFile(workbook, "testcases_" + d + ".xlsx");
	});
});
