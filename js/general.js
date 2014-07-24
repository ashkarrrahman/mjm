jQuery(document).ready(function() {
    jQuery('#fullpage').fullpage({
        slidesColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
        menu: '#menu',
        easing: 'easeOutBack'
    });

});