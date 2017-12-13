//
// var app = new Vue({
//     el: '#main-content',
//     data: {
//         browseData:{}
//     }
// })
//
// $.get('./api/browse',function (data) {
//     console.log(data)
//     app.browseData = data;
// });
$("#submitBtn").click(function() {
	// console.log("dsdas");
	// var database = $("[name=database]").val();
	// var species = $("[name=species]").val();
	var speciesName = $("[name=speciesName]").val();
	// if (speciesName.length == 0) {
	// 	alert("please input species name");
	// 	return false;
	// }
	// $.get();
	// console.log(database);
	// return false;
	// body...
});

$(function () {
    $('[data-toggle="popover"]').popover({
        container: 'body'
	})
})