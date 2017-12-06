searchMethod = "BLAST";
searchStatus = "beforeSubmit";//beforeSubmit,searching,result
onSearchStatusChange(searchStatus);
$("#softwareNav").delegate("li", "click", function() {
    $("#softwareNav li.active").removeClass("active");
    $(this).addClass("active");
    searchMethod = $(this).text();
});

$("#submitBtn").click(function() {
    seq = $("#searchSeq").val();
    species = $('input[name=speciesRadio]:checked').val();
    database = $('input[name=databaseRadio]:checked').val();
    token = $('meta[name=csrf-token]').attr('content');
    // console.log(token);
    if (seq.length < 100) {
        alert("minimun sqe length is 100 bp");
        return;
    }
    $.post("", {
            "_token": token,
            "species": species,
            "database": database,
            "seq": seq,
            "searchMethod": searchMethod
        },
        function(data) {
            onSearchStatusChange("searching");
            taskHash = data;
            interval = setInterval(function() { queryResult(taskHash) }, 10000);
        });

});

// interval = setInterval(function() { queryResult('571a38b6d07895b64038abda6c640cfb') }, 5000);

function queryResult(taskHash) {
    $.get('./identification/' + taskHash,
        function(data) {
            if (data.length === 0) {
                return;
            } else {
                clearInterval(interval);
                $("div#identification_result>table>tbody").html("");
                $.each(JSON.parse(data.identification_result), function(i, item) {
                    $("<tr></tr>").append("<td>" + item.seq_name + "</td>")
                        .append("<td>" + item.taxonomy + "</td>")
                        .appendTo($("div#identification_result>table>tbody"));
                });

                var content = [];
                $("div#genus_abd>table>tbody").html("");
                $.each(JSON.parse(data.genus_abd), function(i, item) {
                    var genus = Object.keys(item)[0];
                    var abd = item[genus];
                    $("<tr></tr>").append("<td>" + genus + "</td>")
                        .append("<td>" + abd + "</td>")
                        .appendTo($("div#genus_abd>table>tbody"));
                    content.push({ "label": genus, "value": abd });
                });
                pieConfig.data.content = content;
                $("#genusPie").html("");
                var genusPie = new d3pie("genusPie", pieConfig);

                content = [];
                $("div#species_abd>table>tbody").html("");
                $.each(JSON.parse(data.species_abd), function(i, item) {
                    var species = Object.keys(item)[0];
                    var abd = item[species];
                    $("<tr></tr>").append("<td>" + species + "</td>")
                        .append("<td>" + abd + "</td>")
                        .appendTo($("div#species_abd>table>tbody"));
                    content.push({ "label": species, "value": abd });

                });
                pieConfig.data.content = content;
                pieConfig.header.title.text = "Species Abundance Pie"
                $("#speciesPie").html("");
                var speciesPie = new d3pie("speciesPie", pieConfig);
                onSearchStatusChange('result');
            }
        });
}

function onSearchStatusChange(status) {
    if (status == "result") {
        $("#searchResult").show();
    }else{
        $("#searchResult").hide();
    }
    if (status == "beforeSubmit") {

    }
    if (status == "searching") {
        $("#submitBtn").text("Searching...")
        $("#loader").show();
    }else{
        $("#submitBtn").text("Submit and Search")
        $("#loader").hide();
    }
}

pieConfig = {
    "header": {
        "title": {
            "text": "Genus Abundance Pie",
            "fontSize": 24,
            "font": "open sans"
        }
    },
    "size": {
        "canvasWidth": 590,
        "pieOuterRadius": "90%"
    },
    "data": {
        "sortOrder": "value-desc",
        "content": []
    },
    "labels": {
        "outer": {
            "pieDistance": 32
        },
        "mainLabel": {
            "fontSize": 13
        },
        "percentage": {
            "color": "#ffffff",
            "fontSize": 13,
            "decimalPlaces": 0
        },
        "value": {
            "color": "#adadad",
            "fontSize": 11
        },
        "lines": {
            "enabled": true
        },
        "truncation": {
            "enabled": true
        }
    },
    "tooltips": {
        "enabled": true,
        "type": "placeholder",
        "string": "{label}: {value}, {percentage}%",
        "styles": {
            "fontSize": 13
        }
    },
    "effects": {
        "pullOutSegmentOnClick": {
            "effect": "linear",
            "speed": 400,
            "size": 8
        }
    },
    "misc": {
        "gradient": {
            "enabled": true,
            "percentage": 100
        }
    }
};
// var genusPie = new d3pie("genusPie", );
