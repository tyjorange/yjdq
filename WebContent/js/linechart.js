layui.use(['laydate', 'laypage', 'layer', 'table', 'element'], function () {
    var $ = layui.$, laydate = layui.laydate, laypage = layui.laypage, layer = layui.layer, table = layui.table,
        element = layui.element;
    $.ajax({
        url: "dao/linechart_findAll.php",
        type: 'POST',
        dataType: "json",
        success: function (data) {
            if (data.code == 0) {
                var line1 = new Morris.Line({
                    element: 'morris-line-chart1',
                    resize: true,
                    data: data.data,
                    xkey: 'time',
                    ykeys: ['voltage'],
                    labels: ['电压'],
                    lineColors: ["#5B9BD5"],
                    hideHover: 'true'
                });
                var line2 = new Morris.Line({
                    element: 'morris-line-chart2',
                    resize: true,
                    data: data.data,
                    xkey: 'time',
                    ykeys: ['electric'],
                    labels: ['电流'],
                    lineColors: ["#ED7D31"],
                    hideHover: 'true'
                });
                var line3 = new Morris.Line({
                    element: 'morris-line-chart3',
                    resize: true,
                    data: data.data,
                    xkey: 'time',
                    ykeys: ['monthKwh'],
                    labels: ['月度有功电量'],
                    lineColors: ["#FFC000"],
                    hideHover: 'true'
                });
                var line4 = new Morris.Line({
                    element: 'morris-line-chart4',
                    resize: true,
                    data: data.data,
                    xkey: 'time',
                    ykeys: ['monthKvarh'],
                    labels: ['月度无功电量'],
                    lineColors: ["#A5A5A5"],
                    hideHover: 'true'
                });
            }
        }
    });
});