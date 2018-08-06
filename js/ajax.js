// $(document).ready(function(){
$(function(){
    $("#landing").click(function(){
        $(".cs-3").load("data-ajax/landing.php");
        elem_name=localStorage.setItem("elem_name", this.id);
    });
    $("#site").click(function(){
        $(".cs-3").load("data-ajax/site.php");
        elem_name=localStorage.setItem("elem_name", this.id);

    });
    $("#store").click(function(){
        $(".cs-3").load("data-ajax/store.php");
        elem_name=localStorage.setItem("elem_name", this.id);
    });
    $("#integration").click(function(){
        $(".cs-3").load("data-ajax/integration.php");
        elem_name=localStorage.setItem("elem_name", this.id);
    });
});
// });