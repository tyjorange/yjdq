layui.use(['layer', 'element'], function () {
    var $ = layui.$, layer = layui.layer, element = layui.element;
    //监听导航点击
    element.on('nav(demo)', function (elem) {
        //console.log(elem)
        layer.msg(elem.text());
    });
    $('a').on('click', function () {
        var h = $(this).attr('href');
        if (h !== 'javascript:;') {
            $('#ifbody').attr('src', h);
        }
        return false;
    })
});