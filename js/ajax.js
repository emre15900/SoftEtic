window.addEventListener("DOMContentLoaded", function () {

    function getFormData($form) {
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
        });

        return indexed_array;
    }

    var form = $("#contact-form");

    form.on("submit", function (e) {
        e.preventDefault();
        var data = getFormData(form);
        // console.log(data);
        if (data != null) {
            $.ajax({
                data: data,
                url: "mail.php",
                type: "post",
                success: function (response) {
                    if (response === "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'İletiniz Başarılı',
                            text: 'Mesajınız Bize Ulaştı En Geç 24 Saat İçerisinde Geri Döneceğiz',
                        })
                        form.find("input[type=text], textarea").val("");
                        form.find("input[type=mail]").val("");
                        form.find("input[type=mail]").setAttr('value','');
                        form.find("input[type=mail]").removeClass('error')


                    }
                }, error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr, ajaxOptions, thrownError);
                }
            });
        }
    });
});