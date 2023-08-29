/*jQuery(function($) {
    var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
        bottomOffset = 800; // the distance (in px) from the page bottom when you want to load more posts

    $(window).scroll(function() {
        var data = {
            'action': 'loadmore', 
            'query': argsbolos_loadmore_params.posts,
            'page': bolos_loadmore_params.current_page
        };
        if ($(document).scrollTop() > ($(document).height() - bottomOffset) && canBeLoaded == true) {
            $.ajax({
                url: misha_loadmore_params.ajaxurl,
                data: data,
                type: 'POST',
                beforeSend: function(xhr) {
                    // you can also add your own preloader here
                    // you see, the AJAX call is in process, we shouldn't run it again until complete
                    canBeLoaded = false;
                },
                success: function(data) {
                    if (data) {
                        $('#main').find('article:last-of-type').after(data); // where to insert posts
                        canBeLoaded = true; // the ajax is completed, now we can run it again
                        misha_loadmore_params.current_page++;
                    }
                }
            });
        }
    });
});*/


$(document).ready(function() {
    $('.filtroProdutosTodos').css("display", "none");
    $('#filtroProdutosTodos').css("display", "block");
    $('.bolos-chocolate-lista').css("display", "none");
    $('.bolos-branco-lista').css("display", "none");
    $('.bolos-zero-lista').css("display", "none");
    $('.bolos-caseiros-lista').css("display", "none");
    $('.todosindredientes').css("display", "block");
});

function showBoloChocolate() {
    $('.listaCategoria button.btn').removeClass('btnActive');
    $('.btn-bolo-chocolate').addClass('btnActive');

    $('.filtroProdutosTodos').css("display", "none");
    $('#filtroIngredienteChocolate').css("display", "block");

    $('.todosprodutos-lista').hide(200);
    $('.all').hide(200);
    $('.bolos-chocolate-lista').show(500);
}

function showBoloBranco() {
    $('.listaCategoria button.btn').removeClass('btnActive');
    $('.btn-bolo-branco').addClass('btnActive');

    $('.filtroProdutosTodos').css("display", "none");
    $('#filtroIngredienteBranco').css("display", "block");

    $('.todosprodutos-lista').hide(200);
    $('.all').hide(200);
    $('.bolos-branco-lista').show(500);
}

function showBoloZero() {
    $('.listaCategoria button.btn').removeClass('btnActive');
    $('.btn-bolo-zero').addClass('btnActive');

    $('.filtroProdutosTodos').css("display", "none");
    $('#filtroIngredienteZero').css("display", "block");

    $('.todosprodutos-lista').hide(200);
    $('.all').hide(200);
    $('.bolos-zero-lista').show(500);
}

function showBoloCaseiros() {
    $('.listaCategoria button.btn').removeClass('btnActive');
    $('.btn-bolo-caseiro').addClass('btnActive');

    $('.filtroProdutosTodos').css("display", "none");
    $('#filtroIngredienteCaseiros').css("display", "block");

    $('.todosprodutos-lista').hide(200);
    $('.all').hide(200);
    $('.bolos-caseiros-lista').show(500);
}

//--------------------------------------------------------------------------------
//FILTRO BOLOS
$(document).ready(function() {

    //TODOS
    $('select#filtroProdutosTodos').focus(function(e) {
        $('.product-items .todosprodutos-lista').isotope();
    });
    $('select#filtroProdutosTodos').change(function(e) {
        var filterValueTodos = $(this).val();
        //console.log(filterValueTodos);

        $('.product .todosprodutos-lista').isotope({ filter: filterValueTodos });
    });

    //CHOCOLATE
    $('select#filtroIngredienteChocolate').focus(function(e) {
        $('.product-items .bolos-chocolate-lista').isotope();
    });
    $('select#filtroIngredienteChocolate').change(function(e) {
        var filterValueChocolate = $(this).val();
        //console.log(filterValueChocolate);

        $('.product-items .bolos-chocolate-lista').isotope({ filter: filterValueChocolate });
    });

    //BRANCOS
    $('select#filtroIngredienteBranco').focus(function(e) { 
        $('.product-items .bolos-branco-lista').isotope();
    });
    $('select#filtroIngredienteBranco').change(function(e) {
        var filterValueBranco = $(this).val();
        //console.log(filterValueBranco);

        $('.product-items .bolos-branco-lista').isotope({ filter: filterValueBranco });
    });

    //ZERO
    $('select#filtroIngredienteZero').focus(function(e) {
        $('.bolos .bolos-zero-lista').isotope();
    });
    $('select#filtroIngredienteZero').change(function(e) {
        var filterValueZero = $(this).val();
        //console.log(filterValueZero);

        $('.bolos .bolos-zero-lista').isotope({ filter: filterValueZero });
    });

    //CASEIROS
    $('select#filtroIngredienteCaseiros').focus(function(e) {
        $('.bolos .bolos-caseiros-lista').isotope();
    });
    $('select#filtroIngredienteCaseiros').change(function(e) {
        var filterValueCaseiros = $(this).val();
        console.log(filterValueCaseiros);

        $('.bolos .bolos-caseiros-lista').isotope({ filter: filterValueCaseiros });
    });

});
