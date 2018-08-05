// Sidenav
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {inDuration: 500,
        outDuration: 500});
});

// Collapse
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {inDuration: 500,
        outDuration: 500});
});

 document.addEventListener('DOMContentLoaded', function() {
	cName = window.location.pathname.slice(1);
	//console.log(cName);
	elems = document.getElementsByClassName(cName);
    for(var elem in elems) {
        elems[elem].className +=" active";
    }
    //console.log(elems[1]);
	elems[1].style.display="block";
 });
