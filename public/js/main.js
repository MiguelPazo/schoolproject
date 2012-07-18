$(document).ready(function(){
    $('#dock2').Fisheye(
    {
        maxWidth: 40,
        items: 'a',
        itemsText: 'span',
        container: '.dock-container2',
        itemWidth: 40,
        proximity: 80,
        alignment : 'left',
        valign: 'bottom',
        halign : 'center'
    }
    )
})