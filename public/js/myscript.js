$(document).ready(function(){
    $(".hamburger .hamburger__inner").click(function(){
        $(".wrapper").toggleClass("active")
    })

    $(".top_navbar .toggleProfile").click(function(){
        $(".profile_dd").toggleClass("active");
    });

    //Tabelat md5
    $('#dtHorizontalExample').DataTable({"scrollX": true});
    $('.dataTables_length').addClass('bs-select');


})
//delete modal
function handleDelete(id)
{
    let form = document.getElementById('deleteCategoryForm')
    form.action = '/categories/' + id
    $('#deleteModal').modal('show')
}
//active class when clicked li
$(function(){
    let current = location.pathname;
    $('.components li a').each(function(){
        let $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $('a').removeClass('active');
            $this.addClass('active');
        }

    })
    $('.menu-item').click(function(event) {
        if($(this).closest("li.menu-item").children("ul.sub-menu").length > 0)
        {
            $('.sub-menu').slideToggle('fast');
            return false;
        }
    });
})
