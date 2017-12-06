$("#submitBtn").click(function() {
	// console.log("dsdas");
	var database = $("[name=database]").val();
	var species = $("[name=species]").val();
	var speciesName = $("[name=speciesName]").val();
	if (speciesName.length == 0) {
		alert("please input species name");
		return false;
	}
	$.post();
	console.log(database);
	return false;
	// body...
});