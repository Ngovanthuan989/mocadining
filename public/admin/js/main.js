const app = {
    chageQtyCartAjax: () => {
        $("input.input-number").change(function() {
            let qty = $(this).val();
            let rowId = $(this).data("id");
            let price = $(this).data("price");
            let url = $(this).data("url");
            let subtitle = $(this).parent().parent().next().children();
            $.ajax({
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "POST",
                dataType: "json",
                data: {
                    rowId,
                    qty,
                    price,
                },
                success: function(result) {
                    subtitle.html(result.subtitle + " VNĐ");
                    $(".total-price").html(result.total + "VNĐ");
                },
            });
        });
    },
    handleChangeQtyInput: () => {
        $(".quantity-left-minus").click(function() {
            let input = $("input.input-number");
            let qty = input.val();
            if (qty > 1) {
                input.val(Number(qty - 1));
            }
        });
        $(".quantity-right-plus").click(function() {
            let input = $("input.input-number");
            let qty = input.val();
            if (qty < 100) {
                input.val(Number(qty) + 1);
            }
        });
    },
    handleFilterProducts(filter) {
        let url = $("#filter").data("url");
        $.ajax({
            url: url,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            dataType: "json",
            data: {
                filter,
            },
            success: function(result) {
                console.log(123);
            },
        });
    },
    handleChangeOrderBy() {
        $("#filter-orderby").change(function() {
            let data = $(this).val();
            app.handleFilterProducts(data);
        });
    },
    handleFilter() {
        let url = $('#filter').data('url');
        $('#submitFilter').click(function(e) {
            e.preventDefault();
            let inputs = Array.from($('input'));
            let data = {};
            let selected = $('#filterSelect').val();
            data['selected'] = selected;
            inputs.forEach((input, index) => {
                if (input.name != '_token') {
                    data[input.name] = input.value.trim();
                }
            });
            $.ajax({
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "POST",
                dataType: "json",
                data: data,
                success: function(result) {
                    // if(data != []){
                    $('#content-body').html(result);
                    // }
                },
            });
        });
    },
    handleChangeData(data) {
        let url = $('.list-action-data-player').data('url');
        $.ajax({
            url: url,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            type: "POST",
            dataType: "json",
            data: data,
            success: function(result) {
                $('#change-data').html(result.template);
                let pagination = `<ul class="pagination" style="margin-top:20px">`;
                for (let i = 1; i <= result.perPage; i++) {
                    let active = data.page == i ? 'active' : '';
                    pagination += `<li class="page-item ${active}" aria-current="page" style="cursor:pointer"><span class="page-link">${i}</span></li>`
                }
                pagination += `</ul>`;
                $('#pagination').html(pagination);
                $('.list-action-data-player').data('type', data.typeData);
                app.handlePagination()
                $("#datepicker").datepicker({
                    dateFormat: 'yy-mm-dd'
                });
                $("#datepicker1").datepicker({
                    dateFormat: 'yy-mm-dd'
                });
                app.handleLoadData()
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status)
                console.log(thrownError)
            }
        });
    },
    handleLoadData() {
        let id = $('.list-action-data-player').data('id');
        $('.loadDataPlayer').click(function() {
            let typeData = $(this).data('type');
            let page = 1;
            let stringTime1 = $('#datepicker').length ? $('#datepicker').val() : null;
            let stringTime2 = $('#datepicker1').length ? $('#datepicker1').val() : null;
            let data = {
                typeData,
                id,
                page,
                stringTime1,
                stringTime2
            };
            app.handleChangeData(data);
        })
    },
    handlePagination() {
        let id = $('.list-action-data-player').data('id');
        let typeData = $('.list-action-data-player').data('type');
        $('.page-item').click(function() {
            console.log(456);
            $('.page-item').removeClass('active');
            $(this).addClass('active');
            let page = $(this).children('.page-link').text();
            let data = {
                typeData,
                id,
                page
            };
            app.handleChangeData(data);
        })
    },
    handleAddItem() {
        $('#addItem').click(function() {
            let button = `<input type="file" name="list-image[]" id="image" style="width:100%" class="form-control mt-1">`;
            $('#list-image').append(button);
        })
    }
};

$(document).ready(function() {
    app.chageQtyCartAjax();
    app.handleChangeQtyInput();
    app.handleChangeOrderBy();
    app.handleFilter();
    app.handleLoadData();
    app.handlePagination();
    app.handleAddItem();
});