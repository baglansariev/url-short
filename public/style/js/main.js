$(function () {
    new ClipboardJS('.copy-btn');
});

var myUrl = {
    pattern: /(http|https):\/\/(www\.)?([a-zA-Z]*[0-9]*-*\/*\.*\+*[a-zA-Z]*[0-9])*(\?([a-zA-Z]*[0-9]*-*\/*\.*\+*[a-zA-Z]*[0-9])*)?(&([a-zA-Z]*[0-9]*-*\/*\.*\+*[a-zA-Z]*[0-9])*)*/,

    shorten: function () {
        let data = {
            'client_url': $("[name=url]").val(),
        };

        if(data.client_url.match(this.pattern)){
            $.ajax({
               url: '/url/shorten',
                data: data,
                type: 'post',
                dataType: 'json',
                success: function (ans) {
                    $('#url-result').text(ans.url);
                    $('.result-row').fadeIn();
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
        else{
            alert('Ваша ссылка введена не корректно!');
        }
    }
};