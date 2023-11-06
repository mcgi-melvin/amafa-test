jQuery(document).ready(() => {
    $('#hero').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: false,
        pauseOnFocus: false,
        fade: true,
    });
})

function form_submit()
{
    event.preventDefault()

    console.log( event )
    alert("Message Sent")
}

function toggle_menu()
{

}